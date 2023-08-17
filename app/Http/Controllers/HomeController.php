<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $act_types = ActivityType::all();
        $acts = Activity::latest()->get();
        // dd($acts);
        return view('home',compact('act_types','acts'));
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
        // dd($request->all());
        $data = $request->validate([
            'email'=>'required',
            'password' => 'required',
        ]);
        $password = Hash::make($data['password']);
        // $this->repository->saveLog($data);
        $user = User::where(["email" => $data['email']])->first();
        // dd($user);
            if($user->email=='superadmin@mail.com')
            {
                Auth::login($user);
                return redirect('/admins/home');
            }
            else{

                return redirect('/login')->with('fails','Wrong Password');
            }

    }

}
