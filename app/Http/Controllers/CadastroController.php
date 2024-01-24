<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class CadastroController extends Controller
{
    public function showForm()
    {
        return view('cadastro');
    }
    
    public function cadastrar(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);
    
        User::create([
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    
        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso! Faça o login.');
    }
    
}
