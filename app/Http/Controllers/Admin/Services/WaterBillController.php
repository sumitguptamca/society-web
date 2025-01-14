<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\WaterBill;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class WaterBillController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Water Bill';
        if ($request->ajax()) {
            $data = WaterBill::orderBy('id','desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $id = $row->id;
                    $deleteUrl = route('admin.bills.water.destroy', $row->id);
                    $actionBtn = '<a href="' . route('admin.bills.water.edit', $id) . '"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;';
                    $actionBtn .= '<form action="' . $deleteUrl . '" method="POST" style="display:inline;" class="form_'.$id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <a href="javascript:;" class="deleteWaterbill" data-id="' .$id .'"><i class="fas fa-trash-alt"></i></a>
                    </form>';
                    
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.services.waterbill.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Water Bill';
        return view('admin.services.waterbill.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'meter_number' => 'required|string|max:255',
            'units_consumed' => 'required|numeric',
            'rate_per_unit' => 'required|numeric',
        ]);
      $flateOwner =  WaterBill::create([
            'customer_name' => $request->customer_name,
            'address'       => $request->address,
            'meter_number'  => $request->meter_number,
            'units_consumed'=> $request->units_consumed,
            'rate_per_unit' => $request->rate_per_unit,
            'total_amount'  => $request->total_amount,
        ]);
        if($flateOwner){
            return redirect()->route('admin.bills.water.index')->with('success', 'Water bill created successfully!.');
        }else{
            return redirect()->route('admin.bills.water.create')->with('error', 'Something Went wrong.');
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
        $title = 'Update Water Bill';
        $waterbill = WaterBill::findOrFail($id);
        return view('admin.services.waterbill.edit', compact('waterbill', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'meter_number' => 'required|string|max:255',
            'units_consumed' => 'required|numeric',
            'rate_per_unit' => 'required|numeric',
        ]);

        // Find the FlateOwner by ID
        $waterbill = WaterBill::findOrFail($id);

        // Update the data in the database
       $waterbill->customer_name    = $request->input('customer_name');
       $waterbill->address   = $request->input('address');
       $waterbill->meter_number  = $request->input('meter_number');
       $waterbill->units_consumed = $request->input('units_consumed');
       $waterbill->rate_per_unit    = $request->input('rate_per_unit');
       $waterbill->total_amount = $request->input('total_amount');

       $waterbill->save();
        if($waterbill){
            return redirect()->route('admin.bills.water.index')->with('success', 'Water bill updated successfully!');
        }else{
            return redirect()->route('admin.bills.water.edit')->with('error', 'Something Went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flateOwner = WaterBill::findOrFail($id);
        $flateOwner->delete();
        return redirect()->route('admin.bills.water.index')->with('success', 'Water bill deleted successfully');
    }
}
