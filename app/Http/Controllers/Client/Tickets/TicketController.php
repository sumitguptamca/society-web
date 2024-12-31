<?php

namespace App\Http\Controllers\Client\Tickets;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Tickets';
        if ($request->ajax()) {
            $userId = auth()->id();
            $data = Ticket::where('flateowner_id' , $userId)->orderBy('id','desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $id = $row->id;
                    $deleteUrl = route('client.tickets.destroy', $row->id);
                    // $actionBtn = '<a href="' . route('client.tickets.edit', $id) . '"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;';
                    $actionBtn = '<form action="' . $deleteUrl . '" method="POST" style="display:inline;" class="form_'.$id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <a href="javascript:;" class="deleteTicket" data-id="' .$id .'"><i class="fas fa-trash-alt"></i></a>
                    </form>';
                    
                    return $actionBtn;
                })
                ->editColumn('title', function ($row) {
                    if ($row->title == 1) {
                        return 'For Complaint Raise';
                    } elseif ($row->title == 2) {
                        return 'Update Owner Detail';
                    } elseif ($row->title == 3) {
                        return 'Update Mobile No.';
                    } elseif ($row->title == 4) {
                        return 'Update Email';
                    } 
                    else {
                        return 'N/A'; // Default value if no match
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }
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
                    'title' => $request->ticket_name ?: null,
                    'ticket_no' => $ticketno ?: null,
                    'phone'       => $request->phone ?: null,
                    'email'       => $request->email ?: null,
                    'description'  => $request->description ?: null,
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
    public function destroy($id)
    {
        $userId = Auth::id();
        $ticket = Ticket::where('id', $id)
                        ->where('flateowner_id', $userId)
                        ->first();

        // Check if ticket exists and belongs to the user
        if ($ticket) {
            $ticket->delete();
            return redirect()->route('client.tickets.index')->with('success', 'Ticket deleted successfully');
        } else {
            return redirect()->route('client.tickets.index')->with('error', 'Not deleted');
        }
    }
}
