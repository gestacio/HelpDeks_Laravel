<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user_id = Auth::id();
        // dd($user_id);
        // $department_id = Auth::user()->department_id;
        // dd($department_id);
        // $tickets_out = Ticket::all()->where('user_id', "$user_id");
        // $tickets_in = Ticket::all()->where('department_id', "$department_id");
        $users = User::all();
        $departments = Department::all();

        return view('users.index', [
            'users' => $users,
            'departments' => $departments
        ]);
        // return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        $departments = Department::all();
        // dd($departments);

        return view('users.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'department_id' => 'required',
        ]);

        // $user = User::create($request->all());
        $user = User::create([
            'password' => bcrypt($request->password)
        ] + $request->all());

        $user->save();
        // $departments = Department::all();

        // return redirect()->route('users.index')->with('status', 'Usuario creado correctamente');
        return redirect('users')->with('status', 'Usuario creado correctamente');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('status', 'Usuario eliminado correctamente');
    }
}
