<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Guest middleware → Login user ko block kare
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Login page
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Login submit
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            // Regenerate session for security
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')
                             ->with('success', 'Login successful!');
        }

        // Failed
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully.');
    }
}
