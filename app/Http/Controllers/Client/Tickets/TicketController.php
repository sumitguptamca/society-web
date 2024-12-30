<?php

namespace App\Http\Controllers\Client\Tickets;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Tickets';
        return view('client.tickets.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Ticket';
        return view('client.tickets.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ticket_name' => 'required|string|max:255',
            ]);
           
            $lastTicket = Ticket::orderBy('id', 'desc')->first();
            $ticketno = 'TICKET-' . str_pad(optional($lastTicket)->id + 1, 6, '0', STR_PAD_LEFT);       
            $tickets =  Ticket::create([
                    'flateowner_id' => $request->user_id,
                    'title' => $request->ticket_name,
                    'ticket_no' => $ticketno,
                    'phone'       => $request->phone,
                    'description'  => $request->description,
                ]);
            if($tickets){
                return redirect()->route('client.tickets.index')->with('success', 'Ticket added successfully!.');
            }else{
                return redirect()->route('client.tickets.create')->with('error', 'Something Went wrong.');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
