<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\JobApplicationForm;
use App\Models\JobVacants;
use App\Models\JobCategory;
use App\Models\Logs;
use App\Models\VacantBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\{Auth,Session};
use Illuminate\Support\Facades\DB;
class JobVacantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $branches = Branch::latest()->get();
        $categories = JobCategory::all();
        $vacants = JobVacants::OrderBy('id')->paginate(20);

        $start_date = $request->start_date ?: Session::get('start_date');
        $end_date = $request->end_date ?: Session::get('end_date');
        $category_id = $request->category_name ?: Session::get('category_id');
        $vacant_name = $request->vacant_name ?: Session::get('vacant_name');
        $status = $request->status ?: Session::get('status');

        $query = JobVacants::query();
        if ($start_date && $end_date) {
            $query->whereBetween('date', [$start_date, $end_date]);
        } elseif ($start_date) {
            $query->where('date', 'LIKE', '%' . $start_date . '%');
        }

        if ($category_id) {
            $query->where('category_id', 'LIKE', '%' . $category_id . '%');
        }

        if ($vacant_name) {
            $query->where('vacant_name', 'LIKE', '%' . $vacant_name . '%');
        }

        if ($status) {
            $query->where('status', 'LIKE', '%' . $status . '%');
        }

        $vacants = $query->latest()->paginate(20);
        $vacants->appends($request->all());

        $vacant_ids = $vacants->pluck('id');

        $apply_counts = JobApplicationForm::whereIn('jobvacant_id', $vacant_ids)
            ->select('jobvacant_id', DB::raw('count(*) as total'))
            ->groupBy('jobvacant_id')
            ->pluck('total', 'jobvacant_id');

        return view('admins.job_vacants.index', compact('vacants', 'categories', 'apply_counts','branches'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'banner' => 'nullable|mimes:jpeg,jpg,png,gif',
            'tumb' => 'nullable|mimes:jpeg,jpg,png,gif'
        ], [
            'banner.mimes' => 'The banner must be a file of type: jpeg, jpg, png, gif.',
            'tumb.mimes' => 'The tumb must be a file of type: jpeg, jpg, png, gif.'
        ]);

        $file_banner = null;
        if ($request->hasFile('banner')) {
            $file_banner = rand(0, 999999) . "_" . $request->file('banner')->getClientOriginalName();
            $pathfile_banner = Storage::putFileAs('uploads/jobvacants', $request->file('banner'), $file_banner);
        }

        $file_tumb = null;
        if ($request->hasFile('tumb')) {
            $file_tumb = rand(0, 999999) . "_" . $request->file('tumb')->getClientOriginalName();
            $pathfile_tumb = Storage::putFileAs('uploads/jobvacants', $request->file('tumb'), $file_tumb);
        }

        $status=$request['status'];
        if($status == 'online'){
            $status = 'online';
        }else{
            $status = 'offline';
        }

        $date=now()->format('Y-m-d');

        $category_id=$request->category_name;

        $jobVacant = JobVacants::create([
            'vacant_banner' => $file_banner,
            'vacant_image'  => $file_tumb,
            'vacant_name'   => $request['vacant_name'],
            'vacant_description'   => $request['jobrequired'],
            'vacant_shortxt'   => $request['jobshortxt'],
            'male'   => $request['male'],
            'female'   => $request['female'],
            'salary'   => $request['salary'],
            'category_id'   => $category_id,
            'status'          => $status,
            'date'          => $date,
        ]);

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Job Vacant Form',
            'tracking' => 'Create Job Vacant',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        $branchIds = $request->input('branch_id');

        foreach ($branchIds as $branchId) {
            VacantBranch::create([
                'branch_id' => $branchId,
                'vacant_id' => $jobVacant->id,
            ]);
        }

        return back()->with('success', 'Successfully saved...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobVacants  $jobVacants
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vacant_detail=JobVacants::find($id);
        $branches = Branches::latest()->get();
        return view('admins.job_vacants.edit',compact('vacant_detail','branches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobVacants  $jobVacants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branches = Branch::latest()->get();
        $categories = JobCategory::all();
        $vacant_detail=JobVacants::find($id);
        $branchIds = VacantBranch::where('vacant_id', $id)->pluck('branch_id');
        $getbranches = Branch::whereIn('id', $branchIds)->get();
        return view('admins.job_vacants.edit',compact('vacant_detail','categories','branches','branchIds','getbranches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobVacants  $jobVacants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // dd('hi');
         $request->validate([
            'vacant_name' => 'required',
            'vacant_banner' => 'nullable|mimes:jpeg,jpg,png,gif',
            'vacant_image' => 'nullable|mimes:jpeg,jpg,png,gif'
        ], [
            'category_banner.mimes' => 'The banner must be a file of type: jpeg, jpg, png, gif.',
            'category_image.mimes' => 'The image must be a file of type: jpeg, jpg, png, gif.'
        ]);

        $vacant = JobVacants::find($id);

        $vacant->vacant_name = $request->vacant_name;
        $vacant->category_id = $request->category_id;
        $vacant->vacant_shortxt = $request->vacant_shortxt;
        $vacant->male = $request->male;
        $vacant->female = $request->female;
        $vacant->salary = $request->salary;
        $vacant->vacant_description = $request->vacant_description;

        $vacant->status = $request->has('status') ? 'online' : 'offline';


    if ($request->hasFile('vacant_banner')) {
        $destination = 'app/public/uploads/jobvacants/'.$vacant->vacant_banner;
        if (Storage::exists($destination)) {
            unlink(storage_path('app/public/uploads/jobvacants/'.$vacant->vacant_banner));
        }

        $banner = rand(0,999999)."_".$request->file('vacant_banner')->getClientOriginalName();
        $path = Storage::putFileAs('uploads/jobvacants/', $request->file('vacant_banner'), $banner);

        $vacant->vacant_banner = $banner;
    } else {
        $vacant->vacant_banner = $request->banner_old;
    }

    if ($request->hasFile('vacant_image')) {
        $destination = 'app/public/uploads/jobvacants/'.$vacant->vacant_image;
        if (Storage::exists($destination)) {
            unlink(storage_path('app/public/uploads/jobvacants/'.$vacant->vacant_image));
        }

        $img = rand(0,999999)."_".$request->file('vacant_image')->getClientOriginalName();
        $path = Storage::putFileAs('uploads/jobvacants/', $request->file('vacant_image'), $img);

        $vacant->vacant_image = $img;
    } else {
        $vacant->vacant_image = $request->tumb_old;
    }

        $vacant->save();

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Job Vacant Form',
            'tracking' => 'Update Job Vacant',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        $branchIds = $request->input('branch_id');

        if($branchIds!=null){
            foreach ($branchIds as $branchId) {
                VacantBranch::create([
                    'branch_id' => $branchId,
                    'vacant_id' => $vacant->id,
                ]);
            }
        }



        return back()->with('success','Job vacant Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobVacants  $jobVacants
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobVacants $jobVacants)
    {
        //
    }



    public function jobupdateStatus(Request $request, $id)
    {
        $category = JobVacants::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $status = $request->input('status');

        $category->status = $status;
        $category->save();

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Job Vacant Status',
            'tracking' => 'Job vacant status change online or offline.',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return response()->json(['message' => 'Category status Changed successfully'], 200);
    }

    public function destroyvacants(Request $request)
    {
        $request->validate([
            'selected_items' => 'required|array',
            'selected_items.*' => 'exists:job_vacants,id',
        ]);

        JobVacants::destroy($request->input('selected_items'));

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Job Vacant Form',
            'tracking' => 'Job vacant delete.',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return response()->json(['message' => 'Successfully deleted your category.']);
    }

    public function searchvacant(Request $request)
    {
        $branches = Branches::latest()->get();
        $categories = JobCategory::all();
        $query = JobVacants::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }
        elseif ($request->filled('start_date')) {
            $startDate = $request->input('start_date');
            $query->whereDate('created_at', $startDate);
        }

        if ($request->filled('category_id')) {
            $category_id = $request->input('category_id');
            $query->where('category_id', 'LIKE', '%' . $category_id . '%');
        }

        if ($request->filled('vacant_name')) {
            $vacant_name = $request->input('vacant_name');
            $query->where('vacant_name', 'LIKE', '%' . $vacant_name . '%');
        }

        if ($request->filled('status')) {
            $status = $request->input('status');
            $query->where('status', $status);
        }

        $vacants = $query->latest()->paginate(20);
        $vacants->appends($request->all());

        $vacant_ids = $vacants->pluck('id');


        $apply_counts = JobApplicationForm::whereIn('jobvacant_id', $vacant_ids)
            ->select('jobvacant_id', DB::raw('count(*) as total'))
            ->groupBy('jobvacant_id')
            ->pluck('total', 'jobvacant_id');

        return view('admins.job_vacants.index', compact('vacants','apply_counts','categories','branches'));

    }

    public function deleteBranch($id) {
        $branch = Branch::find($id);
        if ($branch) {
            $branch->delete();
        }
        return redirect()->back()->with('success', 'Branch Deleted Successfully');
    }

}
