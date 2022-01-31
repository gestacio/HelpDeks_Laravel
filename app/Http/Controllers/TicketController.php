<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = Auth::id();
        // dd($user_id);
        $department_id = Auth::user()->department_id;
        // dd($department_id);
        $tickets_out = Ticket::all()->where('user_id', "$user_id");
        $tickets_in = Ticket::all()->where('department_id', "$department_id");
        // dd($tickets_in);

        return view('tickets.index', [
            'tickets_out' => $tickets_out,
            'tickets_in' => $tickets_in,
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
        return view('tickets.create');
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
            'title' => 'required',
            'content' => 'required'
        ]);

        // dd($request);
        // $request->user_id = Auth::id();
        // $ticket = Ticket::create([$request->all()]);

        $ticket = Ticket::create([
            'user_id' => Auth::id(),
            'priority_id' => 1
        ] + $request->all());

        $ticket->save();

        return redirect()->route('tickets.index')->with('status', 'Ticket creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        // dd($request);
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $ticket->update($request->all());

        return redirect()->route('tickets.index')->with('status', 'Ticket actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return back()->with('status', 'Ticket eliminado');
    }
}
