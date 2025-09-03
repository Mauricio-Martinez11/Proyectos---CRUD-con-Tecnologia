<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TransportistaController;

Route::get('/', function () {
    return view('dashboard');
});

// Rutas para Usuarios
Route::resource('usuarios', UsuarioController::class);

// Rutas para Transportistas
Route::resource('transportistas', TransportistaController::class);


