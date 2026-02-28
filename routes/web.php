<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('login');
});

//exibir a tela de login
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
//rota para o processo do login
Route::post('/login', [UserController::class, 'login']);
//rota para logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');




Route::get('/usuarios', [UserController::class, 'index']);

Route::post('/usuarios/store', [UserController::class, 'store'])->name('users.store');