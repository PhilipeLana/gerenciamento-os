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
    return "Área do Administrador - Login Funcional!";
})->name('dashboard.admin');

Route::get('/dashboard-usuario', function () {
    return "Área do Usuário Comum - Login Funcional!";
})->name('dashboard.usuario');

//Gestão de Usuários 
Route::get('/usuarios', [UserController::class, 'index']);
Route::post('/usuarios/store', [UserController::class, 'store'])->name('users.store');

//Middleware
Route::middleware(['auth', \App\Http\Middleware\CheckAdmin::class])->group(function () {
    
    Route::get('/dashboard-admin', function () {
        return "Área do Administrador - Protegida e Funcional!";
    })->name('dashboard.admin');

    //
    Route::get('/usuarios', [UserController::class, 'index']);
});