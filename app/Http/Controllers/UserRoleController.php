<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getUserid=Auth()->user()->id;
        if (auth()->user()->role == '3'|| auth()->user()->role == '2') {
            $users = User::latest()->where('id',$getUserid)->paginate(1);
        } else {
            $users = User::latest()->paginate(20);
        }

        return view('admins.account.index', compact('users'));

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
           // Validate the request data
           $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required',
            'department' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $date=now()->format('Y-m-d');
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->date = $date;
        $user->department =  $request->department;
        $user->password = Hash::make($request->password);
        $user->save();

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'User Account From',
            'tracking' => 'User Account Create',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        // Redirect back with success message
        return redirect()->route('User_accounts_management.index')->with('success', 'User created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role' => 'required',
            'department' => 'required',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->department = $request->department;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'User Account From',
            'tracking' => 'User Account Update',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);
        return redirect()->route('User_accounts_management.index')->with('success', 'User updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function destroyUsers(Request $request)
    {
        $request->validate([
            'selected_items' => 'required|array',
            'selected_items.*' => 'exists:users,id',
        ]);

        User::destroy($request->input('selected_items'));


        Logs::create([
            'name' => Auth()->user()->name,
            'email' => Auth()->user()->email,
            'form_name' => 'User Account From',
            'tracking' => 'User Account Delete',
            'ip' => $request->ip(),
            'date' => now()->format('Y-m-d'),
        ]);

        return response()->json(['message' => 'Successfully deleted user account.']);
    }

    public function searchUsers(Request $request)
    {
        $query = User::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('date', [$startDate, $endDate]);
        }
        elseif ($request->filled('start_date')) {
            $startDate = $request->input('start_date');
            $query->whereDate('date', $startDate);
        }

        if ($request->filled('name')) {
            $name = $request->input('name');
            $query->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($request->filled('email')) {
            $email = $request->input('eamil');
            $query->where('email', $email);
        }

        if ($request->filled('role')) {
            $role = $request->input('role');
            $query->where('role', $role);
        }

        $users = $query->latest()->paginate(20);
        $users->appends($request->all());

        return view('admins.account.index', compact('users'));


    }

}
