<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            
            if ($user->role === 'admin') {
                return redirect('/admin');
            } else if ($user->role === 'user') {
                return redirect('/home');
            }
        } else {
            return redirect('/')->withErrors([
                'login' => 'Invalid credentials'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        return redirect('/login');
    }
}
