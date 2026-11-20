<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['centro' => config('eportfolio.centro')]);
});

Route::prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', function () { 
        return view('evidencias.index', ['evidencias' => config('eportfolio.evidencias')]); 
        })->name('index');

    Route::get('show/{id}', function ($id) { 
        return view('evidencias.show', ['id' => $id, 'evidencia' => config('eportfolio.evidencias')[$id] ?? null]);
        })->name('show')->whereNumber('id');

    Route::get('create', function () { 
        return view('evidencias.create');
        })->name('create');

     Route::get('edit/{id}', function ($id) { 
        return view('evidencias.edit', ['id' => $id, 'evidencia' => config('eportfolio.evidencias')[$id] ?? null]);
        })->name('edit')->whereNumber('id');
});

Route::get('perfil/{id?}', function ($id = null){
    return $id ? 'Perfil del usuario ' . $id : 'Mi perfil';
 })->whereNumber('id')->name('perfil');

Route::get('/acerca', function () {
    return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro')];
 })->name('acerca');
