<?php

namespace App\Http\Controllers\Admin\Renovation;

use App\Http\Controllers\Controller;
use App\Models\Renovation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class RenovationRequestController extends Controller
{
    
    public function index(Request $request){

        $title = 'Tickets';
        if ($request->ajax()) {
            $data = Renovation::join('flate_owners as fo', 'renovations.flatowner_id', '=', 'fo.id')
              ->orderBy('renovations.id', 'desc')
              ->select('renovations.*', 'fo.name as flatowner','fo.flat_no');
            return DataTables::of($data)
                ->addIndexColumn()
                
                ->addColumn('action', function($row){
                    $id = $row->id;
                    $deleteUrl = route('admin.renovation.destroy', $row->id);
                    // $actionBtn = '<a href="' . route('client.tickets.edit', $id) . '"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;';
                    $actionBtn = '<form action="' . $deleteUrl . '" method="POST" style="display:inline;" class="form_'.$id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <a href="javascript:;" class="deleteRenovation" data-id="' .$id .'" title="Delete"><i class="fas fa-trash-alt"></i></a>
                    </form>';
                    
                    return $actionBtn;
                })
              
                ->rawColumns(['action','created_at','status'])
                ->make(true);
        }
        return view('admin.renovation.index', compact('title'));
    }
    public function destroy($id)
    {
        $ticket = Renovation::where('id', $id)
                        ->first();
        if ($ticket) {
            $ticket->delete();
            return redirect()->route('admin.renovation.index')->with('success', 'Ticket deleted successfully');
        } else {
            return redirect()->route('admin.renovation.index')->with('error', 'Not deleted');
        }
    }
}
