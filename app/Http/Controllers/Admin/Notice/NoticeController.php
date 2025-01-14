<?php

namespace App\Http\Controllers\Admin\Notice;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class NoticeController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Notice';
        if ($request->ajax()) {
            $data = Notice::orderBy('id','desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $id = $row->id;
                    $deleteUrl = route('admin.notice.destroy', $row->id);
                    $actionBtn = '<a href="' . route('admin.notice.edit', $id) . '" title="Edit"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;';
                    $actionBtn .= '<form action="' . $deleteUrl . '" method="POST" style="display:inline;" class="form_'.$id.'">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <a href="javascript:;" class="deleteNotice" data-id="' .$id .'"><i class="fas fa-trash-alt"></i></a>
                    </form>';
                    
                    return $actionBtn;
                })
                ->editColumn('description', function ($row) {
                    // Truncate content to 20 words
                    $truncatedContent = Str::words($row->description, 15, '...');
                    return nl2br(e($truncatedContent)); 
                })
                ->rawColumns(['action','description'])
                ->make(true);
        }
        return view('admin.notice.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Notice';
        return view('admin.notice.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $request->validate([
            'notice_date' => 'required|date',
            'notice_title' => 'required|string|max:255',
            'notice_description' => 'required|string',
            ]);
        $notice =  Notice::create([
                'notice_date' => $request->notice_date,
                'title'       => $request->notice_title,
                'description'  => $request->notice_description,
                'created_by'  => $request->user_id,
            ]);
        if($notice){
            return redirect()->route('admin.notice.index')->with('success', 'Notice created successfully!.');
        }else{
            return redirect()->route('admin.notice.create')->with('error', 'Something Went wrong.');
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
        $title = 'Update Notice';
        $notice = Notice::findOrFail($id);
        $notice_date = Carbon::parse($notice->notice_date)->format('Y-m-d');
        return view('admin.notice.edit', compact('notice', 'title','notice_date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'notice_date' => 'required|date',
            'notice_title' => 'required|string|max:255',
            'notice_description' => 'required|string',
        ]);

        // Find the FlateOwner by ID
        $notice = Notice::findOrFail($id);

        // Update the data in the database
       $notice->notice_date    = $request->input('notice_date');
       $notice->title   = $request->input('notice_title');
       $notice->description  = $request->input('notice_description');

       $notice->save();
        if($notice){
            return redirect()->route('admin.notice.index')->with('success', 'Notice updated successfully!');
        }else{
            return redirect()->route('admin.notice.edit')->with('error', 'Something Went wrong.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();
        return redirect()->route('admin.notice.index')->with('success', 'Notice deleted successfully');
    }
}
