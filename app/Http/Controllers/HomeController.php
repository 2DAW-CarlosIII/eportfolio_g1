<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome()
    {
        return redirect()->action([FamiliasProfesionalesController::class, 'getIndex']);
    }

    public function getCriteriosEvaluacion()
    {
        return redirect()->action([CriteriosEvaluacionController::class, 'getIndex']);
    }

    public function getResultadosAprendizaje()
    {
        return redirect()->action([ResultadosAprendizajeController::class, 'getIndex']);
    }

    public function getCiclosFormativos()
    {
        return redirect()->action([CiclosFormativosController::class, 'getIndex']);
    }
}
