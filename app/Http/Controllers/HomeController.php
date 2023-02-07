<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
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
    
}