<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResultadoAprendizajeResource;
use App\Models\ResultadoAprendizaje;
use Illuminate\Http\Request;
use App\Models\ModuloFormativo;

class ResultadoAprendizajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ModuloFormativo $moduloFormativo)
    {

        $query = ResultadoAprendizaje::query()->where('modulo_formativo_id', $moduloFormativo->id);
        if ($query) {
            $query->where('codigo', 'like', '%' . $request->q . '%');
        }

        return ResultadoAprendizajeResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource_pn storage.
     */
        public function store(Request $request, ModuloFormativo $moduloFormativo)
    {
        $resultadoAprendizajeData = json_decode($request->getContent(), true);

        $resultadoAprendizaje = ResultadoAprendizaje::create($resultadoAprendizajeData);

        return new ResultadoAprendizajeResource($resultadoAprendizaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(ModuloFormativo $moduloFormativo, ResultadoAprendizaje $resultadoAprendizaje)
    {
        return new ResultadoAprendizajeResource($resultadoAprendizaje);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModuloFormativo $moduloFormativo, ResultadoAprendizaje $resultadoAprendizaje)
    {
        $resultadoAprendizajeData = json_decode($request->getContent(), true);
        $resultadoAprendizaje->update($resultadoAprendizajeData);

        return new ResultadoAprendizajeResource($resultadoAprendizaje);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModuloFormativo $moduloFormativo, ResultadoAprendizaje $resultadoAprendizaje)
    {
        try {
            $resultadoAprendizaje->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}