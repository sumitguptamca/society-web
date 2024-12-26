<?php

namespace App\Http\Controllers\Admin\GST;

use App\Http\Controllers\Controller;
use App\Models\GSTDetail;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GSTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = GSTDetail::orderBy('id','desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $id = $row->id;
                    $deleteUrl = route('admin.gst.destroy', $row->id);
                    $actionBtn = '<a href="' . route('admin.gst.edit', $id) . '"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;';
                    $actionBtn .= '<form action="' . $deleteUrl . '" method="POST" style="display:inline;" class="form_'.$id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <a href="javascript:;" class="deleteGST" data-id="' .$id .'"><i class="fas fa-trash-alt"></i></a>
                    </form>';
                    
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.gstDetail.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gstDetail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'gstName' => 'required|string|max:255',
            'gstPercentage' => 'required',
            ]);
            $gst = new GSTDetail();
            $gst->name = $request->gstName;
            $gst->percentage = $request->gstPercentage;
            $gst->details = $request->gst_detail;
            $gst->save();
        if($gst){
            return redirect()->route('admin.gst.index')->with('success', 'GST Detail created successfully!.');
        }else{
            return redirect()->route('admin.gst.create')->with('error', 'Something Went wrong.');
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
        $gstdetail = GSTDetail::findOrFail($id);
        return view('admin.gstDetail.edit', compact('gstdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'gstName' => 'required|string|max:255',
            'gstPercentage' => 'required',
        ]);

        // Find the FlateOwner by ID
        $gstDetail = GSTDetail::findOrFail($id);

        // Update the data in the database
       $gstDetail->name    = $request->input('gstName');
       $gstDetail->percentage   = $request->input('gstPercentage');
       $gstDetail->details  = $request->input('gst_detail');

       $gstDetail->save();
        if($gstDetail){
            return redirect()->route('admin.gst.index')->with('success', 'GST Detail updated successfully!');
        }else{
            return redirect()->route('admin.gst.edit')->with('error', 'Something Went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gstdetail = GSTDetail::findOrFail($id);
        $gstdetail->delete();
        return redirect()->route('admin.gst.index')->with('success', 'GST Detail deleted successfully');
    }
}
