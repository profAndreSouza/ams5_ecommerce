<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    
    function login(Request $request) {
        if($request->method() === 'GET') {
            return view('users.login');
        } else {
            $credentials = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            if (Auth::attempt($credentials)) {
                return redirect()->route('home');
            }

            return back()->withErrors([
                'email' => 'Credenciais inválidas.',
            ])->withInput();
            
        }
    }

    
    function logout(Request $request) {
        Auth::logout();
        return redirect()->route('home');
    }

}