<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required | email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credential))
        {
            $request->session()->regenerate();
            return redirect()->intended('travel.index');
        }
        return back()->with('loginError', 'Wrong Email or Password');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('/login');
    }
}
