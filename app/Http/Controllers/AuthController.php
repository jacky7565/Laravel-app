<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return  view('/login');
    }

    public function checkAuth(Request $request)
    {

        $checkVal = $request->validate([
            'email' => 'required|email',
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        }
        return back()->withErrors([
            'email' => "Invalid Cradential",
        ])->onlyInput('email');
    }


    public function logOut()
    {
        Auth::logout();

        return redirect('/');
    }
}
