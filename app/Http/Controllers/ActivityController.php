<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use App\Models\ActivityImage;
use App\Models\ActivityType;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index(Request $request)
    {
        $acts = Activity::latest()->paginate(30);
        $act_types = ActivityType::all();
        $act_id = $request->session()->get('act_id')?$request->session()->get('act_id'):1;
        $act =Activity::whereId($act_id)->first();
        // dd($act);
        if($request->ajax()){

            return response()->json([
               'success'        => true,
               'acts'           => $acts,
               'act_types'      => $act_types,
               'act'            => $act
            ]);
      }
        return view('admins.activities.index',compact('acts','act_types','act'));
    }


    public function create()
    {
        $act_types = ActivityType::all();
        $act = new Activity();
        return view('admins.activities.create-edit',compact('act_types','act'));
    }


    public function store(StoreActivityRequest $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'description_mm'       => 'required',
            'preview_img'       => 'required',
            'activity_type_id'  => 'required',
            'location'          => 'nullable',
            'date'              => 'nullable'
        ]);
        // dd($request->all());
        $file = $request->preview_img;
        $folderName = "uploads/activity";
        $fileName = $file->getClientOriginalName();
        $originalFileName = preg_replace('/\\.[^.\\s]{3,4}$/', '', $fileName);
        $savedFileName = $originalFileName.rand(0,9999).'.'.$file->getClientOriginalExtension();
        $file->storeAs($folderName,$savedFileName);
        $data['preview_img'] = $savedFileName;
        $act = Activity::create($data);
        if($request->file!=null)
        {
            foreach($files=$request->file as $file)
            {
            $folderName = "uploads/activity_images";
            $fileName = $file->getClientOriginalName();
            $originalFileName = preg_replace('/\\.[^.\\s]{3,4}$/', '', $fileName);
            $savedFileName = $originalFileName.rand(0,9999).'.'.$file->getClientOriginalExtension();
            $saveFile = new ActivityImage();
            $file->storeAs($folderName,$savedFileName);
            $saveFile->activity_id = $act->id;
            $saveFile->name = $fileName;
            $saveFile->file = $savedFileName;
            $saveFile->save();
            }
        }

        return response()->json([
            'success' => true,
             'message' => 'Success created position',
         ]);
        // return redirect()->route('activities.index');
    }


    public function show(Activity $activity)
    {
        $act      = $activity->id;
        $activity = Activity::find($act);
        $act_imgs = ActivityImage::where('activity_id', $act)->get();
        // dd($act_imgs);
        return view('admins.activities.show',compact('act_imgs','act','activity'));
    }


    public function edit(Activity $activity)
    {
        $act = Activity::find($activity->id);
        $act_types = ActivityType::all();
        return response()->json([
            'success' => true,
            'act' => $act,
        ]);
        return view('admins.activities.create-edit',compact('act','act_types'));
    }


    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        $act = Activity::find($activity->id);
        $data = $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'preview_img'       => 'nullable',
            'activity_type_id'  => 'required',
            'location'          => 'nullable',
            'date'              => 'nullable'
        ]);
        // dd('hi');
        if($request->preview_img!=null)
        {
            $file = $request->preview_img;
            $folderName = "uploads/activity";
            $fileName = $file->getClientOriginalName();
            $originalFileName = preg_replace('/\\.[^.\\s]{3,4}$/', '', $fileName);
            $savedFileName = $originalFileName.rand(0,9999).'.'.$file->getClientOriginalExtension();
            $file->storeAs($folderName,$savedFileName);
            $data['preview_img'] = $savedFileName;
        }
        $act->update($data);
        if($request->file!=null)
        {
            foreach($files=$request->file as $file)
            {
            $folderName = "uploads/activity_images";
            $fileName = $file->getClientOriginalName();
            $originalFileName = preg_replace('/\\.[^.\\s]{3,4}$/', '', $fileName);
            $savedFileName = $originalFileName.rand(0,9999).'.'.$file->getClientOriginalExtension();
            $saveFile = new ActivityImage();
            $file->storeAs($folderName,$savedFileName);
            $saveFile->activity_id = $act->id;
            $saveFile->name = $fileName;
            $saveFile->file = $savedFileName;
            $saveFile->save();
            // dd($saveFile);
            }
        }
        // dd('hi');
        return redirect()->route('activities.index');
    }


    public function destroy(Activity $activity)
    {
        $act = Activity::find($activity->id);
        $act->delete();#fffafa
        return redirect()->route('activities.index');
    }

    public function delete($id)
    {
        $act = Activity::find($id);
        $act_img = ActivityImage::where('activity_id',$act->id)->delete();
        $act->delete();
        return response()->json([
            'success' => true,
            'message' => 'Success Deleted Activity',
            ]);
    }


    public function del_imgs($img_id)
    {
        $act = ActivityImage::find($img_id)->delete();
        // ->delete();
        return response()->json([
            'success' => true,
            'message' => 'Success Deleted user',
            ]);

    }
}
