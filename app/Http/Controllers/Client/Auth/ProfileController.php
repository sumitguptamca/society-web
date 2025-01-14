<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function viewprofile(){
        // $user = User::findOrFail($id);
        $title = 'Profile';
        return view('client.auth.viewprofile', compact('title'));
    }
}
