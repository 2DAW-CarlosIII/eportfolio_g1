<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TareaResource;
use App\Models\CriterioEvaluacion;
use App\Models\CriterioTarea;
use App\Models\Tarea;
use App\Models\ResultadoAprendizaje;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, CriterioEvaluacion $criterioEvaluacion)
    {
        $criterioTarea = CriterioTarea::query()->where('criterio_evaluacion_id', $criterioEvaluacion->id)->first();
        $query = Tarea::query();
        $query->where('criterio_evaluacion_id', $criterioTarea->criterio_evaluacion_id);
        if ($query) {
            $query->where('enunciado', 'like', '%' . $request->q . '%');
        }

        return TareaResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
            ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource_pn storage.
     */
    public function store(Request $request, CriterioEvaluacion $criterioEvaluacion)
    {
        $tareaData = json_decode($request->getContent(), true);
        $tarea = Tarea::create($tareaData);

        return new TareaResource($tarea);
    }

    /**
     * Display the specified resource.
     */
    public function show(CriterioEvaluacion $criterioEvaluacion, Tarea $tarea)
    {
        return new TareaResource($tarea);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CriterioEvaluacion $criterioEvaluacion, Tarea $tarea)
    {
        $tareaData = json_decode($request->getContent(), true);

        $tarea->update($tareaData);

        return new TareaResource($tarea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriterioEvaluacion $criterioEvaluacion, Tarea $tarea)
    {
        try {
            $tarea->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}