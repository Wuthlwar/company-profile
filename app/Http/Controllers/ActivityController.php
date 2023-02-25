<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use App\Models\ActivityImage;
use App\Models\ActivityType;

class ActivityController extends Controller
{

    public function index()
    {
        $acts = Activity::latest()->get();
        return view('admins.activities.index',compact('acts'));
    }


    public function create()
    {
        $act_types = ActivityType::all();
        $act = new Activity();
        return view('admins.activities.create-edit',compact('act_types','act'));
    }


    public function store(StoreActivityRequest $request)
    {
        $data = $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'preview_img'       => 'required',
            'activity_type_id'  => 'required',
            'location'          => 'nullable',
            'date'              => 'nullable'
        ]);
        // dd('hi');
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

        // dd('hi');
        return redirect()->route('activities.index');
    }


    public function show(Activity $activity)
    {
        $act      = $activity->id;
        $act_imgs = ActivityImage::where('activity_id', $act)->get();
        // dd($act_imgs);
        return view('admins.activities.show',compact('act_imgs','act'));
    }


    public function edit(Activity $activity)
    {
        $act = Activity::find($activity->id);
        $act_types = ActivityType::all();
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
        $act->delete();
        return redirect()->route('activities.index');
    }
    public function del_act_imgs($img_id)
    {
       $img = ActivityImage::find($img_id);
       $img->delete();
       return back();

    }
}
