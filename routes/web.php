<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


// Rota para a pagina principal 

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');




// Rotas para o login
Route::get('/login', function () {
    return view('login');
})->name('login');