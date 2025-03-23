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

    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required'
        ]);
        
        $user = $request->only(['email', 'password']);
        Auth::attempt($user);

        return redirect('/');
    }
}
