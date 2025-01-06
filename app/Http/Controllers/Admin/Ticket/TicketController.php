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

        $title = 'Tickets';
        if ($request->ajax()) {
            $data = Ticket::join('flate_owners as fo', 'tickets.flateowner_id', '=', 'fo.id')
              ->orderBy('tickets.id', 'desc')
              ->select('tickets.*', 'fo.name as flateowner_name','fo.flat_no');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->format('d-m-Y H:i:s'); // Format datetime
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
                ->addColumn('action', function($row){
                     $id = $row->id;
                     $route = route('admin.tickets.updateStatus');
                    // $actionBtn = '<a class="btn btn-info updateStatus" style="margin-top: 8px;" href="'.$route.'" title="Update" data-pid="'.$id.'">Update</a> &nbsp;&nbsp;&nbsp;';
                    $actionBtn =  '<button class="updateStatusBtn custome-btn" data-id="' . $row->id . '" data-status="' . $row->status . '"><i class="fas fa-refresh" title="Update Status"></i></button> &nbsp;&nbsp;';
                    $actionBtn .= '<a href="'. route('admin.tickets.show', $id).'" title="Show more details"><i class="fas fa-eye"></i></a>';
                    return $actionBtn;
                })
                ->addColumn('status', function($row) {
                    $noticestatus = $this->updateTicketStatus($row->id);
                    $id = $row->id;
                    $status = $row->status;
                    return '<select class="form-select ticket_status_'. $id.' ddselect" name="status">
                    <option value="Open" '.(($noticestatus->status == "Open") ? "selected" : "").'>Open</option>
                    <option value="In progress" '.(($noticestatus->status == "In Progress") ? "selected" : "").'>In Progress</option>
                    <option value="Closed" '.(($noticestatus->status == "Closed") ? "selected" : "").'>Closed</option>
                    </select>';
                })
                
                ->rawColumns(['action','created_at','status'])
                ->make(true);
        }
        return view('admin.tickets.index', compact('title'));
    }

    public function show($id){
        $title = 'Ticket Details';
        $ticket = Ticket::findOrFail($id);
        $flateowner_id  = $ticket->flateowner_id;
        $flateowner_name = FlateOwner::where('id', $flateowner_id )->value('name');
        return view('admin.tickets.show', compact('ticket','flateowner_name', 'title'));
    }

    public function edit($id){
        $title = 'Update Ticket';
        $tickets = Ticket::findOrFail($id);
        return view('admin.tickets.edit', compact('tickets', 'title'));
    }
    function updateTicketStatus($id)
    {
        // dd($id);
        $ticket = Ticket::where('id', $id)->first(); 
        if(is_null($ticket)){
            return false;
        }
        return $ticket;
    }

    public function updateTStatus(Request $request){
        try {
            // Validate the request data (ensure the status is one of the valid statuses)
            $request->validate([
                'id' => 'required|exists:tickets,id',  // Ensure ticket ID exists
                'status' => 'required|in:Open,In progress,Closed',  // Only allow these status values
            ]);
    
            // Find the ticket by ID
            $ticket = Ticket::findOrFail($request->id);
            // Update the ticket status
            $ticket->status = $request->status;
            if($ticket->save()){
                return response()->json([
                    'success' => true,
                    'message' => 'Ticket status updated successfully!'
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Error while updating ticket status:'
                ], 400);
            }
    
            // Redirect to the tickets index page with a success message
            // return redirect()->route('admin.tickets.index')->with('success', 'Ticket status updated successfully!');
            
        } catch (\Exception $e) {
            // Handle any errors (e.g., database issues)
            return response()->json([
                'success' => false,
                'message' => 'Error updating ticket status: ' . $e->getMessage()
            ]);
            /* return redirect()->route('admin.tickets.index')->with('error', 'Error updating ticket status: ' . $e->getMessage()); */
        }
    }
}
