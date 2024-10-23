<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use App\Models\Jobroles;
use App\Models\Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\{Auth,Session};
class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = JobCategory::OrderBy('id')->paginate(20);

        $start_date             = $request->start_date? $request->start_date:Session::get('start_date');
        $end_date               = $request->end_date? $request->end_date:Session::get('end_date');
        $category_name          = $request->category_name? $request->category_name:Session::get('category_name');
        $status                 = $request->status? $request->status:Session::get('status');

        $query                  = JobCategory::query();
        if ($start_date && $end_date) {
            $query->whereBetween('date', [$start_date, $end_date]);
        } elseif ($start_date) {
            $start_date = $request->input('start_date');
            $query->where('date', 'LIKE', '%' . $start_date . '%');
        }

        if ($category_name) {
            $query->where('category_name', 'LIKE', '%' . $category_name . '%');
        }

        if ($status) {
            $query->where('status', 'LIKE', '%' . $status . '%');
        }

        $categories = $query->latest()->paginate(20);
        $categories->appends($request->all());
        return view('admins.job_categories.index', compact('categories'));
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
        $request->validate([
            'category_name' => 'required',
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

        $jobs=JobCategory::create([
            'category_banner' => $file_banner,
            'category_image'  => $file_tumb,
            'category_name'   => $request['category_name'],
            'status'          => $status,
            'date'          => $date,
        ]);

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Job Category Form',
            'tracking' => 'Create Job Category',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        $job_roles=$request->input('job_role');

        if($job_roles!=null){
        foreach ($job_roles as $job_role) {
            Jobroles::create([
                'category_id' => $jobs->id,
                'job_role' => $job_role,
            ]);
        }
        }


        return back()->with('success', 'Successfully saved...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function show(JobCategory $jobCategory,$id)
    {
        $category = JobCategory::find($id);
        return view('admins.job_categories.detail', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = JobCategory::find($id);
        return view('admins.job_categories.job_categories_detail', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'category_name' => 'required',
            'category_banner' => 'nullable|mimes:jpeg,jpg,png,gif',
            'category_image' => 'nullable|mimes:jpeg,jpg,png,gif'
        ], [
            'category_banner.mimes' => 'The banner must be a file of type: jpeg, jpg, png, gif.',
            'category_image.mimes' => 'The image must be a file of type: jpeg, jpg, png, gif.'
        ]);

        // Find the JobCategory by ID
        $category = JobCategory::find($id);

        // Update the category name and status
        $category->category_name = $request->category_name;
        $category->status = $request->has('status') ? 'online' : 'offline';

        // Handle category banner update
        if ($request->hasFile('category_banner')) {
            $destination = 'app/public/uploads/jobvacants/'.$category->category_banner;
            if (Storage::exists($destination)) {
                unlink(storage_path($destination));
            }

            $banner = rand(0,999999)."_".$request->file('category_banner')->getClientOriginalName();
            $path = Storage::putFileAs('uploads/jobvacants/', $request->file('category_banner'), $banner);
            $category->category_banner = $banner;
        } else {
            $category->category_banner = $request->input('banner_old');
        }

        // Handle category image update
        if ($request->hasFile('category_image')) {
            $destination = 'app/public/uploads/jobvacants/'.$category->category_image;
            if (Storage::exists($destination)) {
                unlink(storage_path($destination));
            }

            $img = rand(0,999999)."_".$request->file('category_image')->getClientOriginalName();
            $path = Storage::putFileAs('uploads/jobvacants/', $request->file('category_image'), $img);
            $category->category_image = $img;
        } else {
            $category->category_image = $request->input('tumb_old');
        }


        $job_roles = $request->input('job_role');
        if (!is_null($job_roles)) {
            foreach ($job_roles as $job_role) {
                if (!empty($job_role)) {
                    Jobroles::create([
                        'category_id' => $category->id,
                        'job_role' => $job_role,
                    ]);
                }
            }
        }

        $category->save();

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Job Category Form',
            'tracking' => 'Update Job Category',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return back()->with('success', 'Job Category Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobCategory  $jobCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobCategory $jobCategory)
    {
        //
    }

    public function updateStatus(Request $request, $id)
    {
        $category = JobCategory::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $status = $request->input('status');

        $category->status = $status;
        $category->save();

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Job Category Form',
            'tracking' => 'Change online or offline Job Category',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return response()->json(['message' => 'Category status Changed successfully'], 200);
    }

    public function destroyCategory(Request $request)
    {
        $request->validate([
            'selected_items' => 'required|array',
            'selected_items.*' => 'exists:job_categories,id',
        ]);

        JobCategory::destroy($request->input('selected_items'));

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Job Category Form',
            'tracking' => 'Delete Job Category',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return response()->json(['message' => 'Successfully deleted your category.']);
    }

    public function searchcategory(Request $request)
    {
        $query = JobCategory::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('date', [$startDate, $endDate]);
        }
        elseif ($request->filled('start_date')) {
            $startDate = $request->input('start_date');
            $query->whereDate('date', $startDate);
        }

        if ($request->filled('category_name')) {
            $category_name = $request->input('category_name');
            $query->where('category_name', 'LIKE', '%' . $category_name . '%');
        }

        if ($request->filled('status')) {
            $status = $request->input('status');
            $query->where('status', $status);
        }

        $categories = $query->latest()->paginate(20);
        $categories->appends($request->all());

        return view('admins.job_categories.index', compact('categories'));


    }

    public function deleteRole($id) {
        $role = Jobroles::find($id);
        if ($role) {
            $role->delete();
        }
        return redirect()->back()->with('success', 'Job Deleted Successfully');
    }
}
