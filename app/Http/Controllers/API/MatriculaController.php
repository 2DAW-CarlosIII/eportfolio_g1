<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Matricula;
use App\Http\Resources\MatriculaResource;
use App\Http\Resources\ModuloFormativoResource;
use App\Models\ModuloFormativo;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ModuloFormativo $moduloFormativo)
    {
        $query = Matricula::where('modulo_formativo_id', $moduloFormativo->id);

        return MatriculaResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }
    public function modulosMatriculados(Request $request)
    {
        $user = $request->user();

        $idsModulos = Matricula::where('estudiante_id', $user->id)
            ->get('modulo_formativo_id');

        $query = ModuloFormativo::whereIn('id', $idsModulos);

        $modulos = $query->orderBy($request->sort ?? 'nombre', $request->order ?? 'asc')
            ->paginate($request->per_page ?? 15);

        return ModuloFormativoResource::collection($modulos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matricula = json_decode($request->getContent(), true);

        $matricula = Matricula::create($matricula);

        return new MatriculaResource($matricula);
    }

    public function matriculasLote(Request $request)
    {
        $estudiantes = $request->input('estudiantes_id');
        $modulos = $request->input('modulos_formativos_id');
        $nuevasMatriculas = [];
        foreach ($estudiantes as $estudianteId) {
            foreach ($modulos as $moduloId) {
                $nuevasMatriculas[] = Matricula::create([
                    'estudiante_id' => $estudianteId,
                    'modulo_formativo_id' => $moduloId,
                ]);
            }
        }

        return MatriculaResource::collection($nuevasMatriculas);
    }

    /**
     * Display the specified resource.
     */
    public function show(ModuloFormativo $moduloFormativo, Matricula $matricula)
    {
        return new MatriculaResource($matricula);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModuloFormativo $moduloFormativo, Matricula $matricula)
    {
        $matriculaData = json_decode($request->getContent(), true);
        $matricula->update($matriculaData);

        return new MatriculaResource($matricula);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModuloFormativo $moduloFormativo, Matricula $matricula)
    {
        try {
            $matricula->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
