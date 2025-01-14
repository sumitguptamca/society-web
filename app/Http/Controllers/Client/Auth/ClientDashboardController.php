<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $notice = $this->latestNotice();
        return view('client.dashboard.dashboard', compact('title','notice'));
    }

    public function latestNotice()
    {
        // return Notice::where('notice_date', '>=', now())->orderBy('notice_date', 'asc')->first();public function latestNotice()
        return Notice::join('users', 'notices.created_by', '=', 'users.id')
        ->orderBy('notices.created_at', 'desc')
        ->select('notices.*', 'users.name as created_by_name')  // Select notice fields and the user's name
        ->first();
    }

}
