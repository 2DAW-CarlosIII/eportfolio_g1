<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CriterioEvaluacionResource;
use App\Models\CriterioEvaluacion;
use App\Models\ResultadoAprendizaje;
use App\Models\User;
use Illuminate\Http\Request;

class CriterioEvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ResultadoAprendizaje $resultadoAprendizaje)
    {

        $query = CriterioEvaluacion::query()->where('resultado_aprendizaje_id', $resultadoAprendizaje->id);
        if ($query) {
            $query->where('descripcion', 'like', '%' . $request->search . '%');
        }

        return CriterioEvaluacionResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
            ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource_pn storage.
     */
        public function store(Request $request, ResultadoAprendizaje $resultadoAprendizaje)
    {

        $validate_data = $request->validate([
            'codigo' => 'required|string|max:50|unique:criterios_evaluacion,codigo',
            'descripcion' => 'required|string|max:255',
            'peso_porcentaje' => 'required|numeric|min:0|max:100',
            'orden' => 'required|numeric|min:0',
        ]);
        $validate_data['resultado_aprendizaje_id'] = $resultadoAprendizaje->id;
        $criterioEvaluacion = CriterioEvaluacion::create($validate_data);

        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(ResultadoAprendizaje $resultadoAprendizaje,CriterioEvaluacion $criterioEvaluacion)
    {
        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResultadoAprendizaje $resultadoAprendizaje, CriterioEvaluacion $criterioEvaluacion)
    {
        $validate_data = $request->validate([
            'codigo' => 'required|string|max:50|unique:criterios_evaluacion,codigo',
            'descripcion' => 'required|string|max:255',
            'peso_porcentaje' => 'required|numeric|min:0|max:100',
            'orden' => 'required|numeric|min:0',
        ]);
        $validate_data['resultado_aprendizaje_id'] = $resultadoAprendizaje->id;
        $criterioEvaluacion->update($validate_data);

        return new CriterioEvaluacionResource($criterioEvaluacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResultadoAprendizaje $resultadoAprendizaje, CriterioEvaluacion $criterioEvaluacion)
    {
        try {
            $criterioEvaluacion->delete();
            return response()->json(['message' => 'Criterio de Evaluación eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}