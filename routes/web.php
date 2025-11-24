<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamiliasProfesionalesController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'getHome']);

/*
Route::get('/', function () {
    return 'Pantalla principal';
});
*/
// ----------------------------------------
Route::get('login', function () {
    return view('auth.login');
});
Route::get('logout', function () {
    return "Logout usuario";
});


// ----------------------------------------
Route::prefix('FamiliasProfesione')->group(function () {
    Route::get('/', [FamiliasProfesionalesController::class, 'getIndex']);
    Route::get('show/{id}', [FamiliasProfesionalesController::class, 'getShow']) -> where('id', '[0-9]+');
    Route::get('create', [FamiliasProfesionalesController::class, 'getCreate']);
    Route::get('edit/{id}', [FamiliasProfesionalesController::class, 'getEdit']) -> where('id', '[0-9]+');
});


// ----------------------------------------
Route::get('perfil/{id?}', function ($id = null) {
    if ($id === null)
        return 'Visualizar el usuario propio';
    return 'Visualizar el usuario de ' . $id;
}) -> where('id', '[0-9]+');

