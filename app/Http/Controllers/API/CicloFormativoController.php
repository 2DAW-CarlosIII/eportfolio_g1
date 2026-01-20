<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CicloFormativo;
use Illuminate\Http\Request;
use App\Http\Resources\CicloFormativoResource;
use App\Models\FamiliaProfesional;

class CicloFormativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, FamiliaProfesional $familiaProfesional)
    {
        $query = CicloFormativo::where('familia_profesional_id', $familiaProfesional->id);
        if ($query) {
            $query->where('nombre', 'like', '%' . $request->q . '%');
        }

        return CicloFormativoResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cicloFormativo = json_decode($request->getContent(), true);

        $cicloFormativo = CicloFormativo::create($cicloFormativo);

        return new CicloFormativoResource($cicloFormativo);
    }

    /**
     * Display the specified resource.
     */
    public function show(FamiliaProfesional $familiaProfesional, CicloFormativo $cicloFormativo)
    {
        return new CicloFormativoResource($cicloFormativo);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CicloFormativo $cicloFormativo)
    {
        $cicloFormativoData = json_decode($request->getContent(), true);
        $cicloFormativo->update($cicloFormativoData);

        return new CicloFormativoResource($cicloFormativo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CicloFormativo $cicloFormativo)
    {
        try {
            $cicloFormativo->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
