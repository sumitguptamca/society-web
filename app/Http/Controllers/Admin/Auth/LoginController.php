<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Display the login form (if you want to create a custom login page)
    public function showLoginForm()
    {
        return view('Admin/Auth/sign-in');
    }

    
    public function login(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Redirect if successful
            return redirect()->intended('/dashboard')->with('success', 'Admin Login Successfully!');  // Redirect to intended route or dashboard
        }
        return redirect()->back()->with('error', 'Invalid email or password.');
        
        
    }

    // Handle the logout process
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/admin')->with('success', 'Admin Logout Successfully!');
        // return redirect('/');
    }
}
