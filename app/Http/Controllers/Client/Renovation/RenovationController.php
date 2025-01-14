<?php

namespace App\Http\Controllers\Client\Renovation;

use App\Http\Controllers\Controller;
use App\Models\Renovation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class RenovationController extends Controller
{
    
    public function index(Request $request)
    {
        $title = 'Renovation Request';
        if ($request->ajax()) {
            $userId = auth()->id();
            $data = Renovation::where('flatowner_id' , $userId)->orderBy('id','desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $id = $row->id;
                    $deleteUrl = route('client.renovation.destroy', $row->id);
                    // $actionBtn = '<a href="' . route('client.tickets.edit', $id) . '"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;';
                    $actionBtn = '<form action="' . $deleteUrl . '" method="POST" style="display:inline;" class="form_'.$id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <a href="javascript:;" class="deleteRenovation" data-id="' .$id .'"><i class="fas fa-trash-alt"></i></a>
                    </form>';
                    
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('client.renovation.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Renovation Request';
        return view('client.renovation.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all())
        $request->validate([
            'request_name' => 'required|string|max:255',
            'phone' => ['nullable','numeric','digits_between:10,15'],
            ]);
            $tickets =  Renovation::create([
                    'flatowner_id' => $request->user_id,
                    'request' => $request->request_name ?: null,
                    'phone'       => $request->phone ?: null,
                    'note'  => $request->description ?: null,
                ]);
            if($tickets){
                return redirect()->route('client.renovation.index')->with('success', 'Renovation request added successfully!.');
            }else{
                return redirect()->route('client.renovation.create')->with('error', 'Something Went wrong.');
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
        $ticket = Renovation::where('id', $id)
                        ->where('flatowner_id', $userId)
                        ->first();
        if ($ticket) {
            $ticket->delete();
            return redirect()->route('client.renovation.index')->with('success', 'Ticket deleted successfully');
        } else {
            return redirect()->route('client.renovation.index')->with('error', 'Not deleted');
        }
    }
}
