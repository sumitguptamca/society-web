<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\ElectricityBill;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ElectricityBillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Electricity Bill';
        if ($request->ajax()) {
            $data = ElectricityBill::orderBy('id','desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $id = $row->id;
                    $deleteUrl = route('admin.bills.electricities.destroy', $row->id);
                    $actionBtn = '<a href="' . route('admin.bills.electricities.edit', $id) . '"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;';
                    $actionBtn .= '<form action="' . $deleteUrl . '" method="POST" style="display:inline;" class="form_'.$id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <a href="javascript:;" class="deleteElectricitybill" data-id="' .$id .'"><i class="fas fa-trash-alt"></i></a>
                    </form>';
                    
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.services.electricitybill.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Electricity Bill';
        return view('admin.services.electricitybill.create', compact('title'));
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
      $flateOwner =  ElectricityBill::create([
            'customer_name' => $request->customer_name,
            'address'       => $request->address,
            'meter_number'  => $request->meter_number,
            'units_consumed'=> $request->units_consumed,
            'rate_per_unit' => $request->rate_per_unit,
            'total_amount'  => $request->total_amount,
        ]);
        if($flateOwner){
            return redirect()->route('admin.bills.electricities.index')->with('success', 'Electricity bill created successfully!.');
        }else{
            return redirect()->route('admin.bills.electricities.create')->with('error', 'Something Went wrong.');
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
        $title = 'Electricity Bill';
        $electricitybill = ElectricityBill::findOrFail($id);
        return view('admin.services.electricitybill.edit', compact('electricitybill', 'title'));
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
        $electricitybill = ElectricityBill::findOrFail($id);

        // Update the data in the database
       $electricitybill->customer_name    = $request->input('customer_name');
       $electricitybill->address   = $request->input('address');
       $electricitybill->meter_number  = $request->input('meter_number');
       $electricitybill->units_consumed = $request->input('units_consumed');
       $electricitybill->rate_per_unit    = $request->input('rate_per_unit');
       $electricitybill->total_amount = $request->input('total_amount');

       $electricitybill->save();
        if($electricitybill){
            return redirect()->route('admin.bills.electricities.index')->with('success', 'Electricity bill updated successfully!');
        }else{
            return redirect()->route('admin.bills.electricities.edit')->with('error', 'Something Went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flateOwner = ElectricityBill::findOrFail($id);
        $flateOwner->delete();
        return redirect()->route('admin.bills.electricities.index')->with('success', 'Electricity bill deleted successfully');
    }
}
