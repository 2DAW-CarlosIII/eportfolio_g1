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


Route::prefix('v1')->group(function () {
    Route::apiResource('familias-profesionales', FamiliaProfesionalController::class)->parameters([
        'familias-profesionales' => 'familiaProfesional'
    ]);
    Route::apiResource('familias-profesionales.ciclos-formativos', CicloFormativoController::class)
        ->parameters([
            'familias-profesionales' => 'familiaProfesional',
            'ciclos-formativos' => 'cicloFormativo'
        ]);
    Route::apiResource('ciclos-formativos.modulos-formativos', ModuloFormativoController::class)
        ->parameters([
            'ciclos-formativos' => 'cicloFormativo',
            'modulos-formativos' => 'moduloFormativo'
        ]);
    Route::apiResource('modulos-formativos.matriculas', MatriculaController::class)
        ->parameters([
            'modulos-formativos' => 'moduloFormativo',
            'matriculas' => 'matricula'
        ]);

    Route::apiResource('modulos-formativos.resultados-aprendizaje', ResultadoAprendizajeController::class)
        ->parameters([
            'modulos-formativos' => 'moduloFormativo',
            'resultados-aprendizaje' => 'resultadoAprendizaje'
        ]);
    Route::apiResource('resultados-aprendizaje.criterios-evaluacion', CriterioEvaluacionController::class)
        ->parameters([
            'resultados-aprendizaje' => 'resultadoAprendizaje',
            'criterios-evaluacion' => 'criterioEvaluacion'
        ]);
    Route::apiResource('criterios-evaluacion.tareas', TareaController::class)
        ->parameters([
            'criterios-evaluacion' => 'criterioEvaluacion',
            'tareas' => 'tarea'
        ]);
    Route::apiResource('tareas', TareaController::class)
        ->parameters([
            'tareas' => 'tarea',

        ]);

    Route::apiResource('tareas.evidencias', EvidenciaController::class)
        ->parameters([
            'tareas' => 'tarea',
            'evidencias' => 'evidencia'
        ]);



});





Route::any('/{any}', function (ServerRequestInterface $request) {
    $config = new Config([
        'address' => env('DB_HOST', '127.0.0.1'),
        'database' => env('DB_DATABASE', 'forge'),
        'username' => env('DB_USERNAME', 'forge'),
        'password' => env('DB_PASSWORD', ''),
        'basePath' => '/api',
    ]);
    $api = new Api($config);
    $response = $api->handle($request);

    try {
        $records = json_decode($response->getBody()->getContents())->records;
        $response = response()->json($records, 200, $headers = ['X-Total-Count' => count($records)]);
    } catch (\Throwable $th) {

    }
    return $response;

})->where('any', '.*');