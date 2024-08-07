<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPeliController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/Movie', [ApiPeliController::class, 'listarPeliculas']);
Route::get('/Movie/{id}', [ApiPeliController::class, 'obtenerPelicula']);
Route::post('/Movie', [ApiPeliController::class, 'crearPelicula']);