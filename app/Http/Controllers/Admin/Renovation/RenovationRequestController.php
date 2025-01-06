<?php

namespace App\Http\Controllers\Admin\Renovation;

use App\Http\Controllers\Controller;
use App\Models\Renovation;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
                
                // ->addColumn('action', function($row){
                //      $id = $row->id;
                //      $route = route('admin.renovation.updateStatus');
                //     // $actionBtn = '<a class="btn btn-info updateStatus" style="margin-top: 8px;" href="'.$route.'" title="Update" data-pid="'.$id.'">Update</a> &nbsp;&nbsp;&nbsp;';
                //     $actionBtn =  '<button class="updateStatusBtn custome-btn" data-id="' . $row->id . '" data-status="' . $row->status . '"><i class="fas fa-refresh" title="Update Status"></i></button> &nbsp;&nbsp;';
                //     $actionBtn .= '<a href="'. route('admin.renovation.show', $id).'" title="Show more details"><i class="fas fa-eye"></i></a>';
                //     return $actionBtn;
                // })
              
                ->rawColumns(['action','created_at','status'])
                ->make(true);
        }
        return view('admin.renovation.index', compact('title'));
    }
}
