<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;   
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');   
    }

    // Registration form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Registration process
    public function register(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:users,email',
            'phone'         => 'nullable|string|max:20',
            'password'      => 'required|confirmed|min:6',
            'profile_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Profile image upload
        $profileImage = null;
        if ($request->hasFile('profile_image')) {
            $profileImage = $request->file('profile_image')->store('profiles', 'public');
        }

        User::create([
            'name'        => $request->name,
            'username'    => strtolower(str_replace(' ', '', $request->name)), // auto username
            'email'       => $request->email,
            'phone'       => $request->phone,
            'password'    => Hash::make($request->password),
            'profile_image' => $profileImage,
            'role'          => 'user',
            'otp'           => null,
            'otp_expires_at' => null,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }
}
