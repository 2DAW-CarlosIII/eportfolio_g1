<?php

namespace App\Http\Controllers;

use App\Models\CriterioEvaluacion;
use Illuminate\Http\Request;

class CriteriosEvaluacionController extends Controller
{
    public function getIndex()
    {
        return view('criterios_evaluacion.index')
            ->with('criterios_evaluacion', CriterioEvaluacion::all());
    }

    public function getCreate()
    {
        return view('criterios_evaluacion.create');
    }

    public function getShow($id)
    {
        return view('criterios_evaluacion.show')
            ->with('criterio_evaluacion', CriterioEvaluacion::findorFail($id))
            ->with('id', $id);
    }

    public function getEdit($id)
    {
        return view('criterios_evaluacion.edit')
            ->with('criterio_evaluacion', CriterioEvaluacion::findorFail($id))
            ->with('id', $id);
    }

    
}
