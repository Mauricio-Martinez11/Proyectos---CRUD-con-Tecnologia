<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TransportistaController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('dashboard');
});

// Rutas para Usuarios
Route::resource('usuarios', UsuarioController::class);

// Rutas para Transportistas
Route::resource('transportistas', TransportistaController::class);

// Rutas para Vehículos
Route::resource('vehiculos', VehiculoController::class);

// Rutas para Productos
Route::resource('productos', ProductoController::class);
