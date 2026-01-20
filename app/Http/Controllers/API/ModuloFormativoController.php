<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ModuloFormativo;
use App\Http\Resources\ModuloFormativoResource;
use Illuminate\Http\Request;
use App\Models\CicloFormativo;
use App\Models\User;

class ModuloFormativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, CicloFormativo $cicloFormativo)
    {
        $query = ModuloFormativo::where('ciclo_formativo_id', $cicloFormativo->id);

        if ($query) {
            $query->where('nombre', 'like', '%' . $request->q . '%');
        }

        return ModuloFormativoResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $moduloFormativo = json_decode($request->getContent(), true);

        $moduloFormativo = ModuloFormativo::create($moduloFormativo);

        return new ModuloFormativoResource($moduloFormativo);
    }

    /**
     * Display the specified resource.
     */
    public function show(CicloFormativo $cicloFormativo, ModuloFormativo $moduloFormativo)
    {
        return new ModuloFormativoResource($moduloFormativo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CicloFormativo $cicloFormativo, ModuloFormativo $moduloFormativo)
    {
        $moduloFormativoData = json_decode($request->getContent(), true);
        $moduloFormativo->update($moduloFormativoData);

        return new ModuloFormativoResource($moduloFormativo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CicloFormativo $cicloFormativo, ModuloFormativo $moduloFormativo)
    {
        try {
            $moduloFormativo->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
