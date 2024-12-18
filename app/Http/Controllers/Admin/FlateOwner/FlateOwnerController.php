<?php

namespace App\Http\Controllers\Admin\FlateOwner;

use App\Http\Controllers\Controller;
use App\Models\FlateOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class FlateOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        if ($request->ajax()) {
            $data = FlateOwner::orderBy('id','desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    // $deleteUrl = route('admin.flateowner.destroy', $row->id);
                    $id = $row->id;
                    $actionBtn = '<a href="' . route('admin.flateowner.edit', $id) . '" class="btn btn-primary btn-sm">Edit</a> &nbsp;&nbsp;';
                    $actionBtn .= '<form action="' . $row->id . '" method="POST" style="display:inline;" onclick="archiveFunction()">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <button type="submit" class="btn btn-danger btn-sm deleteFlateOwner" >Delete</button>
                    </form>';
                    
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
         
        return view('admin/flateOwners/flateownerlist');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/flateOwners/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required',
            'flat_no' => 'required',
            'username' => 'username',
            'password' => 'required|string|min:5|confirmed',
        ]);
      $flateOwner =  FlateOwner::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'flat_no' => $request->flat_no,
            'city' => $request->city,
            'country' => $request->country,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        if($flateOwner){
            return redirect()->route('admin.flateowner.index')->with('success', 'Flate Owner added successful!.');
        }else{
            return redirect()->route('admin.flateowner.create')->with('error', 'Something Went wrong.');
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
        $flateOwner = FlateOwner::findOrFail($id);
        return view('admin.flateOwners.edit', compact('flateOwner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:flate_owners,email,' . $id,
            'mobile' => 'required|string',
            'flat_no' => 'required|string',
            'city' => 'required|string',
            'username' => 'required|string|max:255',
        ]);

        // Find the FlateOwner by ID
        $flateOwner = FlateOwner::findOrFail($id);

        // Update the data in the database
        $flateOwner->name = $request->input('name');
        $flateOwner->email = $request->input('email');
        $flateOwner->mobile = $request->input('mobile');
        $flateOwner->flat_no = $request->input('flat_no');
        $flateOwner->city = $request->input('city');
        $flateOwner->username = $request->input('username');

        // Only update the password if a new one is provided
        if ($request->filled('password')) {
            $flateOwner->password = bcrypt($request->input('password'));
        }

        // Save the updated data
        $flateOwner->save();

        // Redirect back to the list of FlateOwners with a success message
        return redirect()->route('admin.flateowner.index')->with('success', 'FlateOwner updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
        $flateOwner = FlateOwner::findOrFail($id);

        // Delete the FlateOwner
        $flateOwner->delete();
    
        // Redirect to the FlateOwner list with a success message
        return redirect()->route('admin.flateowner.index')->with('success', 'Flate Owner deleted successfully');
    }
}
