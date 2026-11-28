<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EvidenciaController;

Route::controller(EvidenciaController::class)->prefix('evidencias')->name('evidencias.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('show/{id}', 'show')->whereNumber('id')->name('show');
    Route::get('create', 'create')->name('create');
    Route::get('edit/{id}', 'edit')->whereNumber('id')->name('edit');
    Route::post('/', 'store')->name('store');
    Route::put('edit/{id}', 'update')->whereNumber('id')->name('update');
});