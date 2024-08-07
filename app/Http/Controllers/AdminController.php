<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Donate;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show the admin login form
    public function showLoginForm()
    {
        $donations = Donate::all();
        return view ('login',['donations' => $donations]);
    }

    // Handle admin login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/'); // Redirect to admin dashboard
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        // Log out the admin
        Auth::guard('admin')->logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the login page or home page
        return redirect()->route('login');
    }
}
