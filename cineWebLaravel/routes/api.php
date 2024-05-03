<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeliculasController;

// Rutas para películas
Route::prefix('peliculas')->group(function () {
    // Ruta para obtener todas las películas
    Route::get('/', [PeliculasController::class, 'index']);

    // Ruta para obtener una película por su ID
    Route::get('/{id}', [PeliculasController::class, 'show']);

    // Ruta para agregar una nueva película
    Route::post('/', [PeliculasController::class, 'store']);

    // Ruta para actualizar una película existente
    Route::put('/{id}', [PeliculasController::class, 'update']);

    // Ruta para eliminar una película por su ID
    Route::delete('/{id}', [PeliculasController::class, 'destroy']);
});

// Ruta para el inicio de sesión

Route::post('/api/login', [AuthController::class, 'login']);
