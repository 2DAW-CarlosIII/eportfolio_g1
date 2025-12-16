<?php

namespace App\Http\Controllers;

use App\Models\ResultadoAprendizaje;
use Illuminate\Http\Request;

class ResultadosAprendizajeController extends Controller
{
    public function getIndex()
    {
        return view('resultados-aprendizaje.index')
            ->with('resultados_aprendizaje', ResultadoAprendizaje::all());
    }

    public function getCreate()
    {
        return view('resultados-aprendizaje.create');
    }

    public function getShow($id)
    {
        return view('resultados-aprendizaje.show')
            ->with('resultado_aprendizaje', ResultadoAprendizaje::findOrFail($id))
            ->with('id', $id);
    }

    public function getEdit($id)
    {
        return view('resultados-aprendizaje.edit')
            ->with('resultado_aprendizaje', ResultadoAprendizaje::findOrFail($id))
            ->with('id', $id);
    }

    public function store(Request $request)
    {
        $resultado_aprendizaje = new ResultadoAprendizaje();
        $resultado_aprendizaje->codigo = $request->codigo;
        $resultado_aprendizaje->descripcion = $request->descripcion;
        $resultado_aprendizaje->peso_porcentaje = $request->porcentaje;
        $resultado_aprendizaje->orden = $request->orden;
        $resultado_aprendizaje->save();

        return redirect()->action([ResultadosAprendizajeController::class, 'getShow'], ['id' => $resultado_aprendizaje->id]);
    }

    public function update(Request $request)
    {
        $resultado_aprendizaje = ResultadoAprendizaje::findOrFail($request->id);
        $resultado_aprendizaje->codigo = $request->codigo;
        $resultado_aprendizaje->descripcion = $request->descripcion;
        $resultado_aprendizaje->peso_porcentaje = $request->porcentaje;
        $resultado_aprendizaje->orden = $request->orden;
        $resultado_aprendizaje->save();

        return redirect()->action([ResultadosAprendizajeController::class, 'getShow'], ['id' => $resultado_aprendizaje->id]);
    }


}
