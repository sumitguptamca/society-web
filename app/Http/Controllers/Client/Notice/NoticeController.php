<?php

namespace App\Http\Controllers\Client\Notice;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(){
        $title = 'Notice';
        $notices = Notice::join('users', 'notices.created_by', '=', 'users.id')
        ->select('notices.*', 'users.name as created_by_name') // Select notice columns and user name as created_by_name
        ->orderBy('notices.id', 'desc')
        ->get();
        return view('client.notice.index', compact('title','notices'));
    }
}
