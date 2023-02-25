<?php

namespace App\Http\Controllers;

use App\Models\ActivityType;
use Illuminate\Http\Request;

class ActivityTypeController extends Controller
{

    public function index()
    {
        $act_types = ActivityType::latest()->get();
        // dd($act_types);
        return view('admins.activity_types.index',compact('act_types'));
    }


    public function create()
    {
        $act_type = new ActivityType();
        return view('admins.activity_types.create-edit',['act_type'=>$act_type]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
        ]);
        ActivityType::create(['name'=>$request->name]);
        return redirect()->route('activity_type.index')->with('success','You have successfully added new activity type!!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $act_type=ActivityType::find($id);
        return view('admins.activity_types.create-edit',['act_type'=>$act_type]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required',
        ]);
        $act_type = ActivityType::find($id);
        $act_type->update(['name'=>$request->name]);
        return redirect()->route('activity_type.index')->with('success','You have successfully updated');

    }

    public function destroy($id)
    {
        // dd($id);
        $act_type=ActivityType::find($id);
        $act_type->delete();
        return back()->with('success','You have successfully deleted');
    }
}
