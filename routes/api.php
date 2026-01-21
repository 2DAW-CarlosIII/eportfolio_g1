<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('evidencias.asignacion', App\Http\Controllers\API\AsignacionController::class)
    ->parameters([
        'evidencias' => 'evidencia'
    ]);

    Route::apiResource('evidencias.comentarios', App\Http\Controllers\API\ComentariosController::class)
    ->parameters([
        'evidencias' => 'evidencia',
        'comentarios' => 'comentario'
    ]);