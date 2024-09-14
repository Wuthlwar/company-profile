<?php

namespace App\Http\Controllers;

use App\Models\JobApplicationForm;
use App\Models\JobVacants;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\{Auth,Session};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendReceivedHr;
use App\Models\Branch;
use App\Models\Logs;
use App\Models\VacantBranch;
use App\Models\VacantBranchUser;

class JobApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = JobCategory::all();

        // Retrieve filters from the request or session
        $start_date = $request->start_date ?: Session::get('start_date');
        $end_date = $request->end_date ?: Session::get('end_date');
        $cat_id = $request->cat_id ?: Session::get('cat_id');
        $position = $request->position ?: Session::get('position');
        $surname = $request->surname ?: Session::get('surname');
        $email = $request->email ?: Session::get('email');

        // Build the query
        $query = JobApplicationForm::query();
        if ($start_date && $end_date) {
            $query->whereBetween('date', [$start_date, $end_date]);
        } elseif ($start_date) {
            $query->where('date', 'LIKE', '%' . $start_date . '%');
        }

        if ($cat_id) {
            $query->where('cat_id', 'LIKE', '%' . $cat_id . '%');
        }

        if ($position) {
            $query->where('position', 'LIKE', '%' . $position . '%');
        }

        if ($surname) {
            $query->where('surname', 'LIKE', '%' . $surname . '%');
        }

        if ($email) {
            $query->where('email', 'LIKE', '%' . $email . '%');
        }
        $va_id = JobVacants::latest()->first();
        // dd($va_id->id);

        if ($request->routeIs('Job_Application_form.index') && $request->has('jobvacant_id')) {
            $jobvacant_id = $request->jobvacant_id;
            $query->where('jobvacant_id', $jobvacant_id);
            $apply_vacants = $query->latest()->paginate(10);
            $apply_vacants->appends(['jobvacant_id' => $jobvacant_id]);


        } else {
            $apply_vacants = $query->latest()->paginate(20);
            $apply_vacants->appends($request->all());
        }

        $vacant_ids = $apply_vacants->pluck('id');

        $vacant_ids = $vacant_ids->toArray();

        $getbranches = collect();
        $branchIds = collect();
        $id_g = JobApplicationForm::whereIn('id', $vacant_ids)->latest()->first();

        if ($id_g) {
            $branchIds = VacantBranchUser::where('vacant_id', $id_g->id)
                ->distinct()
                ->pluck('branch_id');

            $getbranches = Branch::whereIn('id', $branchIds)->distinct()->get();
        }

        $apply_counts = JobApplicationForm::whereIn('jobvacant_id', $vacant_ids)
            ->select('jobvacant_id', DB::raw('count(*) as total'))
            ->groupBy('jobvacant_id')
            ->pluck('total', 'jobvacant_id');

        return view('admins.job_apply.index', compact('apply_vacants', 'categories', 'apply_counts','branchIds','getbranches'));
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
            'resume' => 'nullable|mimes:pdf,docx|max:10240', // max file size in kilobytes
            'email' => 'required|string|email|max:255',
        ], [
            'resume.mimes' => 'The resume must be a file of type: docx,pdf.',
            'resume.max' => 'The resume must not be greater than 10MB.',
            'email.email' => 'The email must be a valid email address. Email ကိုမှန်ကန်စွာဖြည့်ပါ။',
            // 'email.unique' => 'The email has already been taken. သင်၏ Email သည် တစ်ကြိမ်ဖောင်တင်ထားပါသည်။ ',
        ]);


        $resume = rand(0, 999999) . "_" . $request->file('resume')->getClientOriginalName();
        $pathfile_banner = Storage::putFileAs('uploads/jobvacants', $request->file('resume'), $resume);

        $date = now()->format('Y-m-d');
        $customerEmail = $request->email; // e.g., nyinyi@gmail.com
        $hrEmail = 'waiminmaung@pro1globalhomecenter.com';
        $details = [
            'resume' => $resume,
            'jobvacant_id' => $request->jobvacant_id,
            'cat_id' => $request->cat_id,
            'position' => $request->position,
            'title' => $request->title,
            'surname' => $request->surname,
            'father' => $request->father,
            'dob' => $request->dob,
            'education' => $request->education,
            'experience' => $request->experience,
            'nrc' => $request->nrc,
            'phone' => $request->phone,
            'email' => $customerEmail,
            'current_address' => $request->current_address,
            'career_summary' => $request->career_summary,
            'salary' => $request->salary,
            'emergency_address' => $request->emergency_address,
            'agree' => $request->agree,
            'date' => $date,
        ];

        $resumePath = storage_path('app/public/uploads/jobvacants/' . $resume);

        try {

            Mail::to($customerEmail)->send(new SendReceivedHr($details, $resumePath));


            Mail::to($customerEmail)
            ->bcc($hrEmail)
            ->send(new SendReceivedHr($details, $resumePath));

        } catch (\Exception $e) {

            \Log::error('Failed to send email: ' . $e->getMessage());
        }


        $jobs=JobApplicationForm::create([
            'jobvacant_id' => $request['jobvacant_id'],
            'cat_id' => $request['cat_id'],
            'position' => $request['position'],
            'title' => $request['title'],
            'surname' => $request['surname'],
            'father' => $request['father'],
            'dob' => $request['dob'],
            'education' => $request['education'],
            'experience' => $request['experience'],
            'nrc' => $request['nrc'],
            'phone' => $request['phone'],
            'email' => $customerEmail,
            'current_address' => $request['current_address'],
            'emergency_address' => $request['emergency_address'],
            'career_summary' => $request['career_summary'],
            'resume' => $resume,
            'agree' => $request['agree'],
            'status' => $request['status'],
            'salary' => $request['salary'],

            'q1' => $request['q1'],
            'ans1' => $request['ans1'],

            'q2' => $request['q2'],
            'ans2' => $request['ans2'],

            'q3' => $request['q3'],
            'ans3' => $request['ans3'],

            'status' => $request['status'],
            'date' => $date
        ]);

        $branchIds = $request->input('branch_id');

        if($branchIds!=null){
        foreach ($branchIds as $branchId) {
            VacantBranchUser::create([
                'branch_id' => $branchId,
                'vacant_id' => $jobs->id,
            ]);
        }
    }

        return redirect()->route('job_application_apply_successfully')->with('success', 'Successfully saved...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobApplicationForm  $jobApplicationForm
     * @return \Illuminate\Http\Response
     */
    public function show(JobApplicationForm $jobApplicationForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobApplicationForm  $jobApplicationForm
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplicationForm $jobApplicationForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobApplicationForm  $jobApplicationForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplicationForm $jobApplicationForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobApplicationForm  $jobApplicationForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplicationForm $jobApplicationForm)
    {
        //
    }

    public function destroyvacantsapply(Request $request)
    {
        $request->validate([
            'selected_items' => 'required|array',
            'selected_items.*' => 'exists:job_application_forms,id',
        ]);

        JobApplicationForm::destroy($request->input('selected_items'));

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Job Apply Form',
            'tracking' => 'Job Apply Delete',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return response()->json(['message' => 'Successfully deleted your Job Apply.']);
    }


    public function searchvacantapply(Request $request)
    {
        $categories = JobCategory::all();
        $query = JobApplicationForm::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }
        elseif ($request->filled('start_date')) {
            $startDate = $request->input('start_date');
            $query->whereDate('created_at', $startDate);
        }

        if ($request->filled('cat_id')) {
            $cat_id = $request->input('cat_id');
            $query->where('cat_id', 'LIKE', '%' . $cat_id . '%');
        }

        if ($request->filled('position')) {
            $vacant_name = $request->input('position');
            $query->where('position', 'LIKE', '%' . $vacant_name . '%');
        }

        if ($request->filled('surname')) {
            $status = $request->input('surname');
            $query->where('surname', $status);
        }

        if ($request->filled('email')) {
            $status = $request->input('email');
            $query->where('email', $status);
        }

        $va_id = JobVacants::latest()->first();

        if ($request->routeIs('Job_Application_form.index') && $request->has('jobvacant_id')) {
            $jobvacant_id = $request->jobvacant_id;
            $query->where('jobvacant_id', $jobvacant_id);
            $apply_vacants = $query->latest()->paginate(10);
            $apply_vacants->appends(['jobvacant_id' => $jobvacant_id]);
        } else {
            $apply_vacants = $query->latest()->paginate(20);
            $apply_vacants->appends($request->all());
        }

        $vacant_ids = $apply_vacants->pluck('id');


        $apply_counts = JobApplicationForm::whereIn('jobvacant_id', $vacant_ids)
            ->select('jobvacant_id', DB::raw('count(*) as total'))
            ->groupBy('jobvacant_id')
            ->pluck('total', 'jobvacant_id');

            return view('admins.job_apply.index', compact('apply_vacants', 'categories', 'apply_counts'));


    }

}
