<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class DashboardController extends Controller
{
    // Display the login form (if you want to create a custom login page)
    public function index()
    {
        $userData = User::get();
        $username = $userData->first()->name;
        return view('Admin/Dashboard/dashboard', compact('userData','username'));
    }

}
