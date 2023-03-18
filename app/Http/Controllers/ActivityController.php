<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use App\Models\ActivityImage;
use App\Models\ActivityType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{

    public function index(Request $request)
    {
        $acts = Activity::with('act_imgs','act_types')->latest()->paginate(30);
        $act_types = ActivityType::all();
        if($request->ajax()){

            return response()->json([
               'success'        => true,
               'acts'           => $acts,
               'act_types'      => $act_types
            ]);
      }
        return view('admins.activities.index',compact('acts','act_types'));
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
            'title_mm'          => 'required',
            'description'       => 'required',
            'description_mm'    => 'required',
            'preview_img'       => 'required',
            'activity_type_id'  => 'required',
            'location'          => 'required',
            'location_mm'       => 'required',
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
        $act_imgs  = ActivityImage::where('activity_id',$act->id)->get();
        return response()->json([
            'success'       => true,
            'act'           => $act,
            'act_imgs'      =>$act_imgs
        ]);
        return view('admins.activities.create-edit',compact('act','act_types'));
    }


    public function update(Request $request, $id)
    {
        $act = Activity::find($id);
        $data = $request->validate([
            'title'             => 'required',
            'title_mm'          => 'required',
            'description'       => 'required',
            'description_mm'    => 'required',
            'preview_img'       => 'nullable',
            'activity_type_id'  => 'required',
            'location'          => 'required',
            'location_mm'       => 'required',
            'date'              => 'nullable'
        ]);

         if ($request->has('preview_img')) {
            $file = $request->preview_img;
            $folderName = "uploads/activity";
            $fileName = $file->getClientOriginalName();
            $originalFileName = preg_replace('/\\.[^.\\s]{3,4}$/', '', $fileName);
            $savedFileName = $originalFileName.rand(0,9999).'.'.$file->getClientOriginalExtension();
            $file->storeAs($folderName,$savedFileName);
            $data['preview_img'] = $savedFileName;
            if ($act->preview_img) {
                Storage::delete('public/uploads/activit/' . $act->preview_img);
            }
        }else{
            $data['preview_img'] = $act->preview_img;
        }
        // dd($data);
        $act->update([
            'title'             =>$data['title'],
            'title_mm'          =>$data['title_mm'],
            'description'       =>$data['description'],
            'description_mm'    =>$data['description_mm'],
            'preview_img'       =>$data['preview_img'],
            'activity_type_id'  =>$data['activity_type_id'],
            'location'          =>$data['location'],
            'location_mm'       =>$data['location_mm'],
            'date'              =>$data['date']
        ]);

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
        return response()->json([
            'success' => true,
             'message' => 'Success Updated Activity'
            ]);
        // dd('hi');
        // return redirect()->route('activities.index');
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
            'message' => 'Success Deleted image',
            ]);

    }

    public function get_activities_by_type($act_type_id)
    {
        $activities = Activity::where('activity_type_id',$act_type_id)->get();
        return response()->json($activities, 200);
    }
}
