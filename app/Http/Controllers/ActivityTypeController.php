<?php

namespace App\Http\Controllers;

use App\Models\ActivityType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityTypeController extends Controller
{

    public function index(Request $request)
    {
        $act_types = ActivityType::latest()->paginate(30);
        if($request->ajax()){

            return response()->json([
               'success'        => true,
               'act_types'      => $act_types,
            ]);
      }
        return view('admins.activity_types.index',compact('act_types'));
    }


    public function create()
    {
        return view('admins.activity_types.create-edit');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
        ]);
        ActivityType::create(['name'=>$request->name]);
        return response()->json([
            'success' => true,
             'message' => 'Successfully created activity type',
         ]);
        // return redirect()->route('activity_type.index')->with('success','You have successfully added new activity type!!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $act_type=ActivityType::find($id);
        return response()->json([
            'success' => true,
            'act_type' => $act_type,
        ]);
        return view('admins.activity_types.create-edit',['act_type'=>$act_type]);
    }

    public function act_type_update(Request $request, $id)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }
        $act_type = ActivityType::find($id);
        $act_type->update(['name'=>$request->name]);
        return response()->json([
            'success' => true,
             'message' => 'Success Updated Activity Type',
            ]);

    }

    public function act_type_delete($id)
    {
        // dd($id);
        // $act_type=ActivityType::find($id);
        // $act_type->delete();
        // return back()->with('success','You have successfully deleted');

        ActivityType::find($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Success Deleted activity type',
            ]);
    }
}
