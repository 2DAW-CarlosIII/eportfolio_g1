<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CicloFormativo;
use Illuminate\Http\Request;
use App\Http\Resources\CicloFormativoResource;
use App\Models\Evidencias;
use App\Models\Evaluacion;
use App\Http\Resources\EvaluacionResource;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Evidencias $evidencias)
    {
        $query = Evaluacion::where('evidencias_id', $evidencias->id);
        if ($query) {
            $query->where('descripcion', 'like', '%' . $request->q . '%');
        }

        return EvaluacionResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evaluacionData = json_decode($request->getContent(), true);

        $evaluacion = Evaluacion::create($evaluacionData);

        return new EvaluacionResource($evaluacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evidencias $evidencias, Evaluacion $evaluacion)
    {
        return new EvaluacionResource($evaluacion);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evidencias $evidencias, Evaluacion $evaluacion)
    {
        $evaluacionData = json_decode($request->getContent(), true);
        $evaluacion->update($evaluacionData);

        return new EvaluacionResource($evaluacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evidencias $evidencias, Evaluacion $evaluacion)
    {
        try {
            $evaluacion->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
