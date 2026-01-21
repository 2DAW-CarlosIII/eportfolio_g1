<?php

use App\Http\Controllers\API\ResultadoAprendizajeController;
use App\Http\Controllers\API\CriterioEvaluacionController;
use App\Http\Controllers\API\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;
use App\Http\Controllers\API\FamiliaProfesionalController;
use App\Http\Controllers\API\CicloFormativoController;
use App\Http\Controllers\API\ModuloFormativoController;
use App\Http\Controllers\API\MatriculaController;
use App\Http\Controllers\API\EvidenciaController;
use App\Http\Controllers\API\CriterioTareaController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});