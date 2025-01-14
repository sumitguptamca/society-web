<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientLoginController extends Controller
{
    public function showLoginform()
    {
        $title = 'Login';
        return view('client/auth/login', compact('title'));
    }

    public function login(Request $request)
    {
        // Validate the incoming data
      $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
            if (Auth::guard('flatowner')->attempt($request->only('username', 'password'))) {
                return redirect()->intended('/client/dashboard')->with('success', 'Logged in Successfully!');
            }
            return redirect()->back()->with('error', 'Invalid username or password.');
    }
    public function clientLogout(Request $request){
        Auth::guard('flatowner')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/client/login')->with('success', 'Logged out Successfully!');
    }
}
