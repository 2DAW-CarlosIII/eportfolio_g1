<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CicloFormativo;
use Illuminate\Http\Request;
use App\Http\Resources\CicloFormativoResource;
use App\Models\FamiliaProfesional;
use Illuminate\Support\Facades\Auth;

class CicloFormativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $FamiliaProfesionalId)
    {
        $query = CicloFormativo::where('familia_profesional_id', $FamiliaProfesionalId);
        if ($query) {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }

        return CicloFormativoResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $FamiliaProfesionalId)
    {
        if(Auth::user()->email != env('ADMIN_EMAIL')) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
        $validate_data = $request->validate([
            'nombre' => 'required|string',
            'codigo' => 'required|string|max:50|unique:ciclos_formativos,codigo',
            'grado' => 'required|string|max:50|in:' . implode(',', CicloFormativo::GRADOS),
            'descripcion' => 'nullable|string',
        ]);
        $validate_data['familia_profesional_id'] = $FamiliaProfesionalId;
        $cicloFormativo = CicloFormativo::create($validate_data);

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
    public function update(Request $request, $FamiliaProfesionalId , CicloFormativo $cicloFormativo)
    {
        if(Auth::user()->email != env('ADMIN_EMAIL')) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
        $validate_data = $request->validate([
            'nombre' => 'required|string',
            'codigo' => 'required|string|max:50|unique:ciclos_formativos,codigo,',
            'grado' => 'required|string|max:50|in:' . implode(',', CicloFormativo::GRADOS),
            'descripcion' => 'nullable|string',
        ]);
        $validate_data['familia_profesional_id'] = $FamiliaProfesionalId;
        $cicloFormativo->update($validate_data);

        return new CicloFormativoResource($cicloFormativo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FamiliaProfesional $familiaProfesional, CicloFormativo $cicloFormativo)
    {
        if(Auth::user()->email != env('ADMIN_EMAIL')) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }
        try {
            $cicloFormativo->delete();
            return response()->json([
                'message' => 'CicloFormativo eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
