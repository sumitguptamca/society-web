<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Display the login form (if you want to create a custom login page)
    public function showLoginform()
    {
        $title = 'Login';
        return view('admin/auth/sign-in', compact('title'));
    }

    
    public function login(Request $request)
    {
        // Validate the incoming data
      $credentials=  $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);
        // if (Auth::attempt($credentials)) {
        //     $userrole = auth()->user()->userrole;
        //     // dd($userrole);
        //     switch ($userrole) {
        //         case 2:
        //             return redirect()->intended('admin/dashboard')->with('success', 'Admin Login Successfully!');
        //         default:
        //             return redirect()->intended('/admin');
        //     }
        // }
        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Redirect if successful
            return redirect()->intended('/admin/dashboard')->with('success', 'Admin Login Successfully!');  // Redirect to intended route or dashboard
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
    }

    public function updateProfile(){
        // $user = User::findOrFail($id);
        $title = 'Update Profile';
        return view('admin.auth.updateprofile', compact('title'));
    }

    public function profileSave(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'password' => 'nullable|confirmed|min:6',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update the user's name and email
        $user = auth()->user();
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        // If a new password is provided, hash and update it
        if ($request->filled('password')) {
            $user->password = Hash::make($validated['password']);
        }

        // If a profile picture is uploaded, handle the file upload
        if ($request->hasFile('profile_picture')) {
            // Delete the old profile picture if it exists
            if ($user->image) {
                $oldFilePath = public_path('storage/' . $user->image);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }
            // Store the new profile picture and update the user
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->image = $path;
        }

        // Save the user details
        $user->save();

        // Redirect back with a success message
        return redirect()->route('admin.update')->with('success', 'Profile updated successfully.');
    }
}
