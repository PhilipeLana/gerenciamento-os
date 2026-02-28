<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    

    public function showLogin()
    {
        return view('auth.login');
    }
//lista todos os usuarios cadastrados para o admin( temos que implementar uma tela sozinha para isto)
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    //processsa o novo cadastro
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'perfil' => 'required|in:admin,comum',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'perfil' => $request->perfil,
        ]);

        return redirect()->back()->with('success', 'Usuário cadastrado com sucesso!');
    }

    
}