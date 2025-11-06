<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function()
{
    return 'Pantalla principal';
});


Route::get('/login', function()
{
    return 'Login usuario';
});

Route::get('/logout', function()
{
    return 'Logout usuario';
});

Route::get('/familias-profesionales', function()
{
    return 'familias profesionales';
});

Route::get('/familias-profesionales/show/{id}', function($id)
{
    if (isset($id) && is_numeric($id)) {
    return 'detalle familia profesional' . $id;
    } else {
        return 'ID de familia profesional no válido';
    }
})->where('id', '[0-9]+');

Route::get('familias-profesionales/edit/{id}', function($id)
{
    if (isset($id) && is_numeric($id)) {
    return 'Editar familia profesional: ' . $id;
    } else {
        return 'ID de familia profesional no válido';
    }
})->where('id', '[0-9]+');

Route::get('perfil/{id}', function($id)
{
    if (isset($id) && is_numeric($id)) {
    return 'Perfil del usuario: ' . $id;
    } else {
        return 'ID de usuario no válido';
    }
})->where('id', '[0-9]+');


