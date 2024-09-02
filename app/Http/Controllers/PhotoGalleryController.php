<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Models\PhotoGallery;
use App\Models\PhotoName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\{Auth, DB, Session};

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $photoNames = PhotoName::with('photoGalleries')->latest()->paginate(1);
        $start_date             = $request->start_date? $request->start_date:Session::get('start_date');
        $end_date               = $request->end_date? $request->end_date:Session::get('end_date');
        $name                   = $request->name? $request->name:Session::get('name');

        $query = PhotoName::query();

        if ($start_date && $end_date) {
            $query->whereBetween(DB::raw('DATE(created_at)'), [$start_date, $end_date]);
        } elseif ($start_date) {
            $query->whereDate('created_at', $start_date);
        }

        if ($name) {
            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        $photoNames->appends($request->except('page'));
        $photoNames->appends($request->all());
        return view('admins.gallery.index',compact('photoNames'));
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
        // Validate the request

        $getId=PhotoName::create([
            'name' => $request['name'],
        ]);

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $index => $file) {

                $fileName = rand(0, 999999) . "_" . $file->getClientOriginalName();

                $pathfile_name = Storage::putFileAs('uploads/gallery', $file, $fileName);

                PhotoGallery::create([
                    'file' => $pathfile_name,
                    'name_id' => $getId->id,
                ]);
            }
        }

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Photo Gallery Form',
            'tracking' => 'Photo Gallery Created',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);


        return back()->with('success', 'Successfully uploaded');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photoNames = PhotoName::find($id);
        return view('admins.gallery.edit',compact('photoNames'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoNames = PhotoName::findOrFail($id);
        $photoNames->name = $request->name;
        $photoNames->save();

        if ($request->hasFile('gallery')) {

            foreach ($request->file('gallery') as $file) {
                $fileName = rand(0, 999999) . "_" . $file->getClientOriginalName();
                $pathfile_name = $file->storeAs('uploads/gallery', $fileName);

                PhotoGallery::create([
                    'file' => $pathfile_name,
                    'name_id' => $photoNames->id,
                ]);
            }
        }

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Photo Gallery Form',
            'tracking' => 'Photo Gallery Updated',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return back()->with('success', 'Successfully updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoGallery $photoGallery)
    {
        //
    }

    public function deleteMultiple(Request $request)
    {
        // dd($request->all());

        if ($request->select_all === 'true') {

            $galleryIds = $request->selected_galleries;

            $photoNames = PhotoName::whereHas('photoGalleries', function ($query) use ($galleryIds) {
                $query->whereIn('id', $galleryIds);
            })->get();

            // dd($photoNames);

            foreach ($photoNames as $name) {

                foreach ($name->photoGalleries as $gallery) {

                    if (Storage::exists($gallery->file)) {
                        Storage::delete($gallery->file);
                    }
                    $gallery->delete();
                }

                $name->delete();
            }

            Logs::create([
                'name' => Auth()->user()->name,
                'email' => Auth()->user()->email,
                'form_name' => 'Photo Gallery Form',
                'tracking' => 'Photo Gallery Deleted',
                'ip' => $request->ip(),
                'date' => now()->format('Y-m-d'),
            ]);

            return back()->with('success', 'All selected items from gallery deleted successfully.');
        } else {

            $selectedGalleries = PhotoGallery::whereIn('id', $request->selected_galleries)->get();

            foreach ($selectedGalleries as $gallery) {

                Log::info("Deleting PhotoGallery: {$gallery->id}");

                if (Storage::exists($gallery->file)) {
                    Storage::delete($gallery->file);
                }
                $gallery->delete();
            }

            Logs::create([
                'name' => Auth()->user()->name,
                'email' => Auth()->user()->email,
                'form_name' => 'Photo Gallery Form',
                'tracking' => 'Photo Gallery Deleted',
                'ip' => $request->ip(),
                'date' => now()->format('Y-m-d'),
            ]);

            return back()->with('success', 'Selected galleries deleted successfully.');
        }
    }

    public function deleteGallery(Request $request,$id) {
        $gall = PhotoGallery::find($id);
        if ($gall) {
            $gall->delete();
        }

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Photo Gallery Form',
            'tracking' => 'Photo Gallery Deleted',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return redirect()->back()->with('success', 'Gallery Deleted Successfully');
    }

    public function deletePhotoname(Request $request,$id) {
        $gall = PhotoName::find($id);
        if ($gall) {
            $gall->delete();
        }

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Photo Gallery Form',
            'tracking' => 'Photo Gallery Deleted',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);
        return redirect()->back()->with('success', 'Gallery Deleted Successfully');
    }

    public function searchGallery(Request $request)
    {
        $query = PhotoName::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate]);
        } elseif ($request->filled('start_date')) {
            $startDate = $request->input('start_date');
            $query->whereDate('created_at', $startDate);
        }


        if ($request->filled('name')) {
            $name = $request->input('name');
            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        $photoNames = $query->latest()->paginate(1);
        $photoNames->appends($request->except('page'));

        return view('admins.gallery.index', compact('photoNames'));
    }



}
