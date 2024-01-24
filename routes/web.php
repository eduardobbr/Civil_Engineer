<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;

// Rota para a pagina principal 
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Rota para a pagina usuario 
Route::get('/user', function () {
    return view('user');
})->name('user');

// Rotas para o login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/cadastro', [CadastroController::class, 'showForm'])->name('cadastro.showForm');
Route::post('/cadastro', [CadastroController::class, 'cadastrar'])->name('cadastro.cadastrar');


// Rotas para o Cadastro
Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');