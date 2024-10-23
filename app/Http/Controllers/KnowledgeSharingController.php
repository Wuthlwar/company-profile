<?php

namespace App\Http\Controllers;

use App\Models\KnowledgeSharing;
use App\Models\Logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KnowledgeSharingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knowledgeSharings = KnowledgeSharing::latest()->paginate(10);
        return view('admins.knowledge_sharing.index', compact('knowledgeSharings'));
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'media' => 'required',
            'link' => 'required|url',
            'file' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('/uploads/knowledge', $filename);
        } else {
            $filename = null;
        }

        KnowledgeSharing::create([
            'name' => $validatedData['name'],
            'media' => $validatedData['media'],
            'link' => $validatedData['link'],
            'file' => $filename,
        ]);

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Knowledge Sharing Form',
            'tracking' => 'Knowledge Sharing Created',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return redirect()->route('knowledge_sharing.index')->with('success', 'Knowledge Sharing created successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KnowledgeSharing  $knowledgeSharing
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeSharing $knowledgeSharing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KnowledgeSharing  $knowledgeSharing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $knowledge = KnowledgeSharing::find($id);
        return view('admins.knowledge_sharing.edit',compact('knowledge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KnowledgeSharing  $knowledgeSharing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming data
    $request->validate([
        'name' => 'required|string|max:255',
        'media' => 'required|string',
        'link' => 'required|url',
        'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional validation for the image
    ]);


    $knowledge = KnowledgeSharing::findOrFail($id);

    if ($request->hasFile('file')) {
        if ($knowledge->file && file_exists(storage_path('/uploads/knowledge' . $knowledge->cover_image))) {
            unlink(storage_path('/uploads/knowledge' . $knowledge->file));
        }


        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('/uploads/knowledge', $filename);

        $knowledge->file = $filename;
    }


    $knowledge->name = $request->input('name');
    $knowledge->media = $request->input('media');
    $knowledge->link = $request->input('link');

    $knowledge->save();

    Logs::create([
        'name' => Auth()->user()->name,
        'email' => Auth()->user()->email,
        'form_name' => 'Knowledge Sharing Form',
        'tracking' => 'Knowledge Sharing Updated',
        'ip' => $request->ip(),
        'date' => now()->format('Y-m-d'),
    ]);
    return back()->with('success', 'Knowledge Sharing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KnowledgeSharing  $knowledgeSharing
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeSharing $knowledgeSharing)
    {
        //
    }

    public function bulkDelete(Request $request)
{

    $request->validate([
        'ids' => 'required|array',
        'ids.*' => 'exists:knowledge_sharings,id'
    ]);

    KnowledgeSharing::whereIn('id', $request->ids)->delete();

    Logs::create([
        'name' => Auth()->user()->name,
        'email' => Auth()->user()->email,
        'form_name' => 'Knowledge Sharing Form',
        'tracking' => 'Knowledge Sharing Deleted',
        'ip' => $request->ip(),
        'date' => now()->format('Y-m-d'),
    ]);

    return redirect()->route('knowledge_sharing.index')->with('success', 'Selected records have been deleted.');
}

public function searchKnowledge(Request $request)
{
    $query = KnowledgeSharing::query();

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

    if ($request->filled('media')) {
        $name = $request->input('media');
        $query->where('media', 'LIKE', '%' . $name . '%');
    }

    $knowledgeSharings = $query->latest()->paginate(1);
    $knowledgeSharings->appends($request->except('page'));

    return view('admins.knowledge_sharing.index', compact('knowledgeSharings'));
}


}
