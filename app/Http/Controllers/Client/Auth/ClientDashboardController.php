<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        return view('client.dashboard.dashboard', compact('title'));
    }
}
