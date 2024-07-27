<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityType;
use App\Models\Branch;
use App\Models\JobCategory;
use App\Models\JobVacants;
use App\Models\Logs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use App\Models\User;
use App\Models\VacantBranch;

class HomeController extends Controller
{
    public function home()
    {
        $act_types = ActivityType::all();
        $acts = Activity::latest()->get();
        // dd($acts);
        return view('home',compact('act_types','acts'));
    }
    public function job()
    {
        $act_types = ActivityType::all();
        $acts = Activity::latest()->get();
        $categories = JobCategory::latest()->paginate(10);
        $vacants = JobVacants::latest()->paginate(10);

        // Get the count of vacancies for each category
        $vacants_count = JobVacants::select('category_id', DB::raw('count(*) as total'))
                                   ->groupBy('category_id')
                                   ->get()
                                   ->keyBy('category_id')
                                   ->toArray();

        return view('job_vacants', compact('act_types', 'acts', 'categories', 'vacants', 'vacants_count'));
    }

            public function jobsearch(Request $request)
        {
            $act_types = ActivityType::all();
            $acts = Activity::latest()->get();
            $categories = JobCategory::latest()->paginate(10);

            $query = JobVacants::query();

            if ($request->filled('cat_id')) {
                $query->where('category_id', $request->cat_id);
            }

            if ($request->filled('position')) {
                $query->where('vacant_name', 'like', '%' . $request->position . '%');
            }

            $vacants = $query->latest()->paginate(10);

            // Get the count of vacancies for each category
            $vacants_count = JobVacants::select('category_id', DB::raw('count(*) as total'))
                                    ->groupBy('category_id')
                                    ->get()
                                    ->keyBy('category_id')
                                    ->toArray();

            return view('job_vacants', compact('act_types', 'acts', 'categories', 'vacants', 'vacants_count'));
        }

    public function jobAllcate()
    {
        $act_types = ActivityType::all();
        $acts = Activity::latest()->get();
        $categories = JobCategory::latest()->paginate(10);
        $vacants = JobVacants::latest()->paginate(10);

        // Get the count of vacancies for each category
        $vacants_count = JobVacants::select('category_id', DB::raw('count(*) as total'))
                                   ->groupBy('category_id')
                                   ->get()
                                   ->keyBy('category_id')
                                   ->toArray();

        return view('all_job_categories', compact('act_types', 'acts', 'categories', 'vacants', 'vacants_count'));
    }


    public function jobDetail($id)
    {
        $act_types = ActivityType::all();
        $acts = Activity::latest()->get();
        $categories = JobCategory::latest()->paginate(10);
        $vacants = JobVacants::latest()->paginate(10);
        $vacants_tags = JobVacants::inRandomOrder()->limit(10)->get();

        $vacant_detail=JobVacants::find($id);
        $get_cateID=JobCategory::where('id', $vacant_detail->category_id)->first();
        $vacant_count=JobVacants::where('category_id',$get_cateID->id)->get();

        $categories_for_vacant=JobCategory::latest()->get();

        $branchIds = VacantBranch::where('vacant_id', $id)->pluck('branch_id');
        $getbranches = Branch::whereIn('id', $branchIds)->get();

        return view('job_vacants_detail',compact('act_types','acts','categories','vacants','vacant_detail','categories_for_vacant','get_cateID','vacant_count','vacants_tags','branchIds','getbranches'));
    }

    public function jobDetailCate($id)
    {
        $get_cateID=JobCategory::find($id);
        $vacants_categories=JobVacants::where('category_id',$get_cateID->id)->latest()->paginate(10);
        $vacants_first=JobVacants::where('category_id',$get_cateID->id)->latest()->first();

        $get_cateIDc=JobCategory::find($id);
        $vacant_count=JobVacants::where('category_id',$get_cateIDc->id)->get();
        // dd($vacants_first);

        $get_cate=JobCategory::latest()->paginate(10);

        return view('categories_job_vacants',compact('vacants_categories','get_cateID','vacants_first','get_cateIDc','vacant_count','get_cate'));
    }


    public function successApply()
    {
        return view('successApply');
    }

    public function establish_year()
    {
        return view('establish_year');
    }

    public function mile_stone()
    {
        return view('mile_stone');
    }

    public function joint_venture()
    {
        return view('joint_venture');
    }

    public function coporate()
    {
        return view('coporate');
    }

    public function product_information()
    {
        return view('product_information');
    }

    public function delivery_service()
    {
        return view('delivery_service');
    }

    public function delivery_service_area()
    {
        return view('delivery_service_area');
    }

    public function special_order()
    {
        return view('special_order');
    }

    public function product_return()
    {
        return view('product_return');
    }

    public function consulting_service()
    {
        return view('consulting_service');
    }

    public function contractor_information()
    {
        return view('contractor_information');
    }

    public function member_service()
    {
        return view('member_service');
    }

    public function repair_service()
    {
        return view('repair_service');
    }

    public function lanthit_info()
    {
        return view('lanthit_info');
    }

    public function satsan_info()
    {
        return view('satsan_info');
    }

    public function eastdagon_info()
    {
        return view('eastdagon_info');
    }

    public function hlaingtharyar_info()
    {
        return view('hlaingtharyar_info');
    }

    public function teminalm_info()
    {
        return view('teminalm_info');
    }

    public function southdagon_info()
    {
        return view('southdagon_info');
    }

    public function shwepyithar_info()
    {
        return view('shwepyithar_info');
    }

    public function theikpan_info()
    {
        return view('theikpan_info');
    }

    public function tampawady_info()
    {
        return view('tampawady_info');
    }

    public function bago_info()
    {
        return view('bago_info');
    }

    public function mawlamyine_info()
    {
        return view('mawlamyine_info');
    }

    public function ayetharyar_info()
    {
        return view('ayetharyar_info');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function login()
    {
        return view('admins.auth.login');
        // return view('admins.auth.new_auth');
    }
    public function checkLogin(Request $request)
    {
        // Validate request data
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to find the user
        $user = User::where('email', $data['email'])->first();

        // If user exists and password matches
        if ($user && Hash::check($data['password'], $user->password)) {
            // Log the user in
            Auth::login($user);

            // Log the login attempt
            Logs::create([
                'name' => $user->name,
                'email' => $user->email,
                'form_name' => 'Login Form',
                'tracking' => 'Into Login',
                'ip' => $request->ip(),
                'date' => now()->format('Y-m-d'),
            ]);

            // Redirect to the intended page
            return redirect('/admins/home');
        }

        // If authentication fails, redirect back to login with error
        return back()->with('fails', 'Invalid email or password');

    }

}
