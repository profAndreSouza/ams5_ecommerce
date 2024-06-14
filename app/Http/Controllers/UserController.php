<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    function showFormRegister(Request $request) {
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
