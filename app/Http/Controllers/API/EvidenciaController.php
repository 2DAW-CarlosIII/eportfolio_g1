<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Evidencia;
use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Resources\EvidenciaResource;

class EvidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Tarea $tarea)
    {
        $query = Evidencia::where('tarea_id', $tarea->id);
        if ($query) {
            $query->where('descripcion', 'like', '%' . $request->q . '%');
        }

        return EvidenciaResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evidencia = json_decode($request->getContent(), true);

        $evidencia = Evidencia::create($evidencia);

        return new EvidenciaResource($evidencia);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea, Evidencia $evidencia)
    {
        return new EvidenciaResource($evidencia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea, Evidencia $evidencia)
    {
        $evidenciaData = json_decode($request->getContent(), true);
        $evidencia->update($evidenciaData);

        return new EvidenciaResource($evidencia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evidencia $evidencia)
    {
        try {
            $evidencia->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
