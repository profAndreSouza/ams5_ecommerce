<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Facades\Hash;
use Illuminate\Facades\Auth;
use Illuminate\Facades\Validator;


class UserController extends Controller
{
    function index(Request $request) {
        return view('register');
    }

    function register(Request $request) {
        // Validação dos dados do formulário de registro
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação de um novo usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Autentica o usuário recém-registrado
        Auth::login($user);

        // Redireciona para a página inicial com uma mensagem de sucesso
        return redirect('/')->with('success', 'Registro realizado com sucesso.');
    }

    function profile(Request $request) {
        return "perfil";
    }
}