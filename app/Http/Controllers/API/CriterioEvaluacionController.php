<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CriterioEvaluacionResource;
use App\Models\CriterioEvaluacion;
use Illuminate\Http\Request;

class CriterioEvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query =    CriterioEvaluacion::query();
        if ($query) {
            $query->orWhere('nombre', 'like', '%' . $request->q . '%');
        }

        return CriterioEvaluacionResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
            ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource_pn storage.
     */
        public function store(Request $request)
    {
        $evaluacionData = json_decode($request->getContent(), true);

        $evaluacion = CriterioEvaluacion::create($evaluacionData);

        return new CriterioEvaluacionResource($evaluacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(CriterioEvaluacion $evaluacion)
    {
        return new CriterioEvaluacionResource($evaluacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CriterioEvaluacion $evaluacion)
    {
        $evaluacionData = json_decode($request->getContent(), true);
        $evaluacion->update($evaluacionData);

        return new CriterioEvaluacionResource($evaluacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriterioEvaluacion $evaluacion)
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