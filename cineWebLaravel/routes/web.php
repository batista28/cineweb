<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;

Route::group(['prefix' => 'api'], function () {
    Route::resource('peliculas', PeliculasController::class);
});

// Ruta para obtener el token CSRF
Route::get('/csrf-token', function () {
    return response()->json([
        'csrf_token' => csrf_token(),
    ]);
});
