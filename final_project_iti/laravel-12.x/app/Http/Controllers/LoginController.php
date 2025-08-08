<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

public function login(){
    return view('loginn');
}


    public function handlelogin(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();


        if (Auth::user()->role == 1) {

            return redirect()->intended('/admin/dashboard');

        }
         elseif (Auth::user()->role == 0) {
            return view('sttudent_dashboard');
        }

        // لو في دور غير متعرف عليه
        // Auth::logout();
        // return redirect('/login')->withErrors(['role' => 'Access denied.']);
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}


 public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/loginn');
    }
}
