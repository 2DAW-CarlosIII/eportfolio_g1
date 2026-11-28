<?php

use App\Http\Controllers\FamiliaProfesionalController;
use Illuminate\Support\Facades\Route;

Route::controller(FamiliaProfesionalController::class)->prefix('familias-profesionales')->name('familias-profesionales.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::get('show/{id}', 'show')->name('show')->whereNumber('id');
    Route::get('create', 'create')->name('create');
    Route::get('edit/{id}', 'edit')->name('edit')->whereNumber('id');
    Route::put('edit/{id}', 'update')->name('update')->whereNumber('id');

});