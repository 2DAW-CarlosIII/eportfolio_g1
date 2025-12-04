<?php

namespace App\Http\Controllers;

use App\Models\CriterioEvaluacion;
use Illuminate\Http\Request;

class CriteriosEvaluacionController extends Controller
{
    public function getIndex()
    {
        return view('criterios-evaluacion.index')
            ->with('criterios_evaluacion', CriterioEvaluacion::all());
    }

    public function getCreate()
    {
        return view('criterios-evaluacion.create');
    }

    public function getShow($id)
    {
        return view('criterios-evaluacion.show')
            ->with('criterio_evaluacion', CriterioEvaluacion::findorFail($id))
            ->with('id', $id);
    }

    public function getEdit($id)
    {
        return view('criterios-evaluacion.edit')
            ->with('criterio_evaluacion', CriterioEvaluacion::findorFail($id))
            ->with('id', $id);
    }

    public function postCreate(Request $request)
    {
        $criterio_evaluacion = new CriterioEvaluacion();
        $criterio_evaluacion->codigo = $request->input('codigo');
        $criterio_evaluacion->descripcion = $request->input('descripcion');
        $criterio_evaluacion->resultado_aprendizaje_id = $request->input('resultado_aprendizaje_id');
        $criterio_evaluacion->peso_porcentaje = $request->input('peso_porcentaje');
        $criterio_evaluacion->orden = $request->input('orden');

        $criterio_evaluacion->save();

        return redirect()->action([CriteriosEvaluacionController::class, 'getShow'],['id' => $criterio_evaluacion->id]);
    }

    public function putCreate(Request $request, $id)
    {
        $criterio_evaluacion = CriterioEvaluacion::findOrFail($id);
        $criterio_evaluacion->codigo = $request->input('codigo');
        $criterio_evaluacion->descripcion = $request->input('descripcion');
        $criterio_evaluacion->resultado_aprendizaje_id = $request->input('resultado_aprendizaje_id');
        $criterio_evaluacion->peso_porcentaje = $request->input('peso_porcentaje');
        $criterio_evaluacion->orden = $request->input('orden');
        $criterio_evaluacion->save();

        return redirect()->action([CriteriosEvaluacionController::class, 'getShow'],['id' => $criterio_evaluacion->id]);

    }



}
