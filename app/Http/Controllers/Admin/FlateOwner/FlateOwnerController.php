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
        $title = 'Flat Owner';
        if ($request->ajax()) {
            $data = FlateOwner::orderBy('id','desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $deleteUrl = route('admin.flatowner.destroy', $row->id);
                    $id = $row->id;
                    $actionBtn = '<a href="' . route('admin.flatowner.edit', $id) . '"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;';
                    $actionBtn .= '<form action="' . $deleteUrl . '" method="POST" style="display:inline;" class="form_'.$id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <a href="javascript:;" class="deleteFlateOwner" data-id="' .$id .'"><i class="fas fa-trash-alt"></i></a>
                    </form>';
                    
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
         
        return view('admin/flateOwners/flateownerlist',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Flat Owner';
        return view('admin/flateOwners/create', compact('title'));
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
            'username' => 'required',
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
            return redirect()->route('admin.flatowner.index')->with('success', 'Flat Owner added successful!.');
        }else{
            return redirect()->route('admin.flatowner.create')->with('error', 'Something Went wrong.');
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
        $title = 'Update Flat Owner';
        $flateOwner = FlateOwner::findOrFail($id);
        return view('admin.flateOwners.edit', compact('flateOwner', 'title'));
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
        return redirect()->route('admin.flatowner.index')->with('success', 'Flat Owner updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flateOwner = FlateOwner::findOrFail($id);

        // Delete the FlateOwner
        $flateOwner->delete();
    
        // Redirect to the FlateOwner list with a success message
        return redirect()->route('admin.flatowner.index')->with('success', 'Flat Owner deleted successfully');
    }
}
