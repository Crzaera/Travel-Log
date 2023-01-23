<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required | min:3',
            'username' => 'required | unique:users',
            'email' => 'required | email:dns | unique:users',
            'password' => 'required | min:5',
        ]);

        $validation['password'] = Hash::make($validation['password']);

        User::create($validation);
        return redirect('login')->with('success', 'Registration Success! Please Login');
    }
}
