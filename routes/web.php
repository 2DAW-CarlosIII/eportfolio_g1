<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Controllers\HomeController::class)->name('home');

Route::prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', function () { 
        return view('evidencias.index', ['evidencias' => config('eportfolio.evidencias')]); 
        })->name('index');

    Route::get('show/{id}', function ($id) { 
        return view('evidencias.show', ['id' => $id, 'evidencias' => config('eportfolio.evidencias')]);
        })->name('show')->whereNumber('id');

    Route::get('create', function () { 
        return view('evidencias.create');
        })->name('create');

     Route::get('edit/{id}', function ($id) { 
        return view('evidencias.edit', ['id' => $id, 'evidencias' => config('eportfolio.evidencias')]);
        })->name('edit')->whereNumber('id');
});

Route::get('perfil/{id?}', App\Http\Controllers\PerfilController::class)->whereNumber('id')->name('perfil');

Route::get('/acerca', function () {
    return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro')];
 })->name('acerca');
 require __DIR__ . '/familias-profesionales.php';
