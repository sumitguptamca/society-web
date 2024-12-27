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
      $credentials=  $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);
        // dd($credentials);
            if (Auth::guard('flatowner')->attempt($credentials)) {
                return redirect()->intended('/client/dashboard')->with('success', 'Logged in Successfully!');
            }
            return redirect()->back()->with('error', 'Invalid email or password.');
    }
    public function clientLogout(Request $request){
        Auth::guard('flatowner')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/client/login')->with('success', 'Logged out Successfully!');
    }
}
