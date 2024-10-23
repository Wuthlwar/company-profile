<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Logs::latest()->paginate(20);
        return view('admins.logs.index', compact('logs'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function show(Logs $logs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function edit(Logs $logs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logs $logs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logs  $logs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logs $logs)
    {
        //
    }

    public function destroyLogs(Request $request)
    {
        $request->validate([
            'selected_items' => 'required|array',
            'selected_items.*' => 'exists:logs,id',
        ]);

        Logs::destroy($request->input('selected_items'));

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'Logs Form',
            'tracking' => 'Logs delete.',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return response()->json(['message' => 'Successfully deleted your Logs.']);
    }
    public function searchlogs(Request $request)
    {
        $logs = Logs::all();
        $query = Logs::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('date', [$startDate, $endDate]);
        } elseif ($request->filled('start_date')) {
            $startDate = $request->input('start_date');
            $query->whereDate('date', $startDate);
        }

        if ($request->filled('name')) {
            $name = $request->input('name');
            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($request->filled('email')) {
            $email = $request->input('email');
            $query->where('email', 'LIKE', '%' . $email . '%');
        }

        if ($request->filled('all')) {
            $all = $request->input('all');
            $query->where(function($q) use ($all) {
                $q->where('form_name', 'LIKE', '%' . $all . '%')
                  ->orWhere('tracking', 'LIKE', '%' . $all . '%')
                  ->orWhere('ip', 'LIKE', '%' . $all . '%');
            });
        }

        $logs = $query->latest()->paginate(20);
        $logs->appends($request->all());

        return view('admins.logs.index', compact('logs'));
    }

}
