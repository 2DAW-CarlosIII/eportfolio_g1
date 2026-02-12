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
        $query = $criterioEvaluacion->tareas()->newQuery();
        if ($query) {
            $query->where('enunciado', 'like', '%' . $request->q . '%');
        }

        return TareaResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
            ->paginate($request->per_page)
        );

    }

    public function indexResultadoTarea(Request $request, $id)
    {

        $criterioEvaluacion = CriterioEvaluacion::query()->where('resultado_aprendizaje_id', $id)->first();
        $query = Tarea::query();
        $criterioTarea = CriterioTarea::query()->where('criterio_evaluacion_id', $criterioEvaluacion->id)->first();
        $query->where('id', $criterioTarea->tarea_id);
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
        $validate_data = $request->validate([
            'fecha_apertura' => 'required',
            'fecha_cierre' => 'required',
            'activo' => 'required',
            'observaciones' => 'required',
        ]);
        $validate_data['criterio_evaluacion_id'] = $criterioEvaluacion->id;
        $tarea = Tarea::create($validate_data);

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
        $validate_data = $request->validate([
            'fecha_apertura' => 'required',
            'fecha_cierre' => 'required',
            'activo' => 'required',
            'observaciones' => 'required',
        ]);
        $validate_data['criterio_evaluacion_id'] = $criterioEvaluacion->id;
        $tarea->update($validate_data);

        return new TareaResource($tarea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriterioEvaluacion $criterioEvaluacion, Tarea $tarea)
    {
        try {
            $tarea->delete();
            return response()->json(['message' => 'Tarea eliminad0 correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }

    public function asignacionAleatoria(){
        $this->asignacionAleatoria();
        return response()->json(['message' => 'Asignacion aleatoria realizada correctamente'], 200);        
    }
}