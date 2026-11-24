<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/evidencias.php';

Route::get('/', App\Http\Controllers\HomeController::class)->name('home');


Route::get('perfil/{id?}', App\Http\Controllers\PerfilController::class)->whereNumber('id')->name('perfil');

Route::get('/acerca', function () {
    return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro')];
 })->name('acerca');
