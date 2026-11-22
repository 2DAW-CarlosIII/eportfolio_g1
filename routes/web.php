
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola/{nombre?}', function ($nombre = null) {
    return $nombre
        ? '¡Hola, ' . $nombre . '!'
        : '¡Hola, mundo!';
});

Route::prefix('proyectos')->name('proyectos.')->group(function () {
    Route::get('/', function () {
        return 'Listado proyectos';
    })->name('index');

    Route::get('/create', function () {
        return 'Añadir proyecto';
    })->name('create');

    Route::get('/show/{id}', function ($id) {
        return 'Vista detalle proyecto ' . $id;
    })->whereNumber('id')->name('show');

    Route::get('/edit/{id}', function ($id) {
        return 'Modificar proyecto ' . $id;
    })->whereNumber('id')->name('edit');
});

Route::get('/perfil/{id?}', function ($id = null) {
    return $id
        ? 'Perfil del usuario ' . $id . ' - Visualizar el currículo de ' . $id
        : 'Mi perfil - Visualizar el currículo propio';
})->whereNumber('id')->name('perfil');

Route::get('/centro', function () {
    return response()->json([
        'centro' => 'CIFP Carlos III'
    ]);
});

Route::prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', function () {
        return 'Listado de evidencias';
    })->name('index');

    Route::get('/show/{id}', function ($id) {
        return 'Evidencia ' . $id;
    })->whereNumber('id')->name('show');

    Route::get('/create', function () {
        return 'Nueva evidencia';
    })->name('create');

    Route::get('/edit/{id}', function ($id) {
        return 'Modificar evidencia ' . $id;
    })->whereNumber('id')->name('edit');
});

Route::get('/acerca', function () {
    return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro')
    ];
})->name('acerca');
