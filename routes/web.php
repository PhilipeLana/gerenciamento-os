<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Redireciona raiz para login
Route::get('/', function () {
    return redirect()->route('login');
});

// Autenticação
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

//
// Estas rotas recebem o usuário após a validação do perfil no Controller
Route::get('/dashboard-admin', function () {
    return view('dashboard'); // <-- Agora ele busca o seu arquivo dashboard.blade.php
})->name('dashboard.admin');

Route::get('/dashboard-usuario', function () {
    return view('dashboard'); // <-- Faz o mesmo aqui
})->name('dashboard.usuario');
//Gestão de Usuários 
Route::get('/usuarios', [UserController::class, 'index']);
Route::post('/usuarios/store', [UserController::class, 'store'])->name('users.store');

//Middleware
// ... código anterior de autenticação e dashboards iniciais ...

// Middleware de Proteção (Onde o Admin é verificado)
Route::middleware(['auth', \App\Http\Middleware\CheckAdmin::class])->group(function () {
    
    Route::get('/dashboard-admin', function () {
        return view('dashboard'); // <-- MUDE AQUI TAMBÉM para ver seu Front!
    })->name('dashboard.admin');

    // Gestão de Usuários (Apenas Admin acessa)
    Route::get('/usuarios', [UserController::class, 'index']);
});