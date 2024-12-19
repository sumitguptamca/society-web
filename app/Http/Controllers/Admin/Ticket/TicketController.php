<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Models\FlateOwner;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TicketController extends Controller
{
    public function index(Request $request){

        if ($request->ajax()) {
            $data = Ticket::join('flate_owners as fo', 'tickets.flateowner_id', '=', 'fo.id')
              ->orderBy('tickets.id', 'desc')
              ->select('tickets.*', 'fo.name as flateowner_name');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->format('d-m-Y H:i:s'); // Format datetime
                })
                ->addColumn('action', function($row){
                     $id = $row->id;
                    $actionBtn = '<a href="'. route('admin.tickets.show', $id).'" title="Show more details"><i class="fas fa-eye"></i></a>';
                    
                    return $actionBtn;
                })
                ->rawColumns(['action','created_at'])
                ->make(true);
        }
        return view('admin.tickets.index');
    }

    public function show($id){
        $ticket = Ticket::findOrFail($id);
        $flateowner_id  = $ticket->flateowner_id;
        $flateowner_name = FlateOwner::where('id', $flateowner_id )->value('name');
        return view('admin.tickets.show', compact('ticket','flateowner_name'));
    }
}
