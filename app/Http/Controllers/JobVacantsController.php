<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Models\Branch;
use App\Models\Region;
use App\Models\Jobroles;
use App\Models\JobVacants;
use App\Models\JobCategory;
use App\Models\VacantBranch;
use Illuminate\Http\Request;
use App\Models\JobApplicationForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\{Auth,Session};

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
        $categories = JobCategory::all();
        // $branches = Branch::latest()->get();
        $branches = Branch::where('region_id', 1)->get();
        $regions = Region::all();
        return view('admins.job_vacants.job_add',compact('categories','branches','regions'));
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
            'tumb' => 'nullable|mimes:jpeg,jpg,png,gif',
            'offer' => 'required|array',
            'offer.*' => 'string',
            'qualification' => 'required|array',
            'qualification.*' => 'string',
        ], [
            'banner.mimes' => 'The banner must be a file of type: jpeg, jpg, png, gif.',
            'tumb.mimes' => 'The tumb must be a file of type: jpeg, jpg, png, gif.',
            'offer.required' => 'Please select at least one offer.',
            'qualification.required' => 'Please select at least one qualification.',
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

        $status = $request['status'] === 'online' ? 'online' : 'offline';
        $date = now()->format('Y-m-d');
        $category_id = $request->category_name;

        $offerArray = $request->input('offer');
        $offerString = json_encode($offerArray);

        $qualificationArray = $request->input('qualification');
        $qualificationString = json_encode($qualificationArray);

        $jobVacant = JobVacants::create([
            'vacant_banner' => $file_banner,
            'vacant_image'  => $file_tumb,
            'vacant_name'   => $request['vacant_name'],
            'industry'   => $request['industry'],
            'emptype'   => $request['emptype'],
            'no_vacant'   => $request['no_vacant'],
            'qualification'   => $qualificationString,
            'experience'   => $request['experience'],
            'vacant_description'   => $request['jobrequired'],
            'vacant_spec'   => $request['vacant_spec'],
            'gender'   => $request['gender'],
            'salary'   => $request['salary'],
            'currency'   => $request['currency'],
            'min'   => $request['min'],
            'max'   => $request['max'],
            'offer'   => $offerString,
            'q1'   => $request['q1'],
            'q2'   => $request['q2'],
            'q3'   => $request['q3'],
            'region'   => $request['region'],
            'township'   => $request['township'],
            'address'   => $request['address'],
            'category_id'   => $category_id,
            'job_role'   => $request['job_role'],
            'status'   => $status,
            'date'   => $date,
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
        $branches = Branch::latest()->get();
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
        $vacants = Jobroles::where('category_id',$vacant_detail->category_id)->get();
        return view('admins.job_vacants.edit',compact('vacant_detail','categories','branches','branchIds','getbranches','vacants'));
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
        $vacant->industry = $request->industry;
        $vacant->emptype = $request->emptype;
        $vacant->no_vacant = $request->no_vacant;
        $vacant->qualification = $request->qualification;
        $vacant->experience = $request->experience;
        $vacant->qualification = $request->qualification;
        $vacant->gender = $request->gender;


        $vacant->category_id = $request->category_name;
        $vacant->job_role = $request->job_role;
        $vacant->vacant_description = $request->vacant_description;
        $vacant->vacant_spec = $request->vacant_spec;
        $vacant->region = $request->region;
        $vacant->township = $request->township;
        $vacant->address = $request->address;

        if($request->salary=='Range'){
            $vacant->currency = $request->currency;
            $vacant->min = $request->min;
            $vacant->max = $request->max;
            $vacant->salary = $request->salary;
            }else{
                $vacant->currency = null;
                $vacant->min = null;
                $vacant->max = null;
                $vacant->salary = $request->salary;
        }

        $vacant->offer = $request->offer;
        $vacant->q1 = $request->q1;
        $vacant->q2 = $request->q2;
        $vacant->q3 = $request->q3;

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
        $branches = Branch::latest()->get();
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


        public function getJobRoles($category_id)
    {
        $jobRoles = Jobroles::where('category_id', $category_id)->pluck('job_role', 'id');
        return response()->json($jobRoles);
    }



    public function UpdateStatus1(Request $request, $id) {
        $vacant = JobVacants::find($id);

        if($vacant->status1 = $request->status1){
            $vacant->status = "offline";
        }
        $vacant->remark = $request->remark;
        $vacant->save();
        return redirect()->back()->with('success', 'Status and remark updated successfully.');
    }


    public function getBranchesByRegion($region_id)
{
    $branches = Branch::where('region_id', $region_id)->get();

    return response()->json($branches);
}



}
