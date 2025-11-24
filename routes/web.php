<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FamiliasProfesionalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getHome']);

// ----------------------------------------
Route::get('login', function () {
    return view('auth.login');
});
Route::get('logout', function () {
    return "Logout usuario";
});


// ----------------------------------------
Route::prefix('familias-profesionales')->group(function () {
    Route::get('/', [FamiliasProfesionalesController::class, 'getIndex']);

    Route::get('create', [FamiliasProfesionalesController::class, 'getCreate']);

    Route::get('/show/{id}', [FamiliasProfesionalesController::class, 'getShow']) -> where('id', '[0-9]+');

    Route::get('/edit/{id}', [FamiliasProfesionalesController::class, 'getEdit']) -> where('id', '[0-9]+');

    Route::post('store', [FamiliasProfesionalesController::class, 'store']);

    Route::put('update/{id}', [FamiliasProfesionalesController::class, 'update'])-> where('id', '[0-9]+');
});


// ----------------------------------------
Route::get('perfil/{id?}', function ($id = null) {
    if ($id === null)
        return 'Visualizar el usuario propio';
    return 'Visualizar el usuario de ' . $id;
}) -> where('id', '[0-9]+');
