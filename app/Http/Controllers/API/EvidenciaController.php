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
        $query = $tarea->evidencias()->newQuery();
        if ($query) {
            $query->where('descripcion', 'like', '%' . $request->search . '%');
        }

        if ($query) {
            $query->where('estado_validacion', 'like', '%' . $request->estado_evidencia . '%');
        }


        return EvidenciaResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );

    }
    public function indexUserEvidencia(Request $request, $id) // $id
    {
        $query = Evidencia::where('estudiante_id', $id);
        if ($query) {
            $query->where('estado_validacion', 'like', '%' . $request->estado_evidencia . '%');
        }
        return EvidenciaResource::collection(
            $query->where('estudiante_id', $id)
                ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'url' => 'required',
            'descripcion' => 'required',
            'estado_validacion' => 'required|in:' . implode(',', Evidencia::ESTADOS_VALIDACION),
        ]);
        $validate_data['estudiante_id'] = $request->user()->id;
        $validate_data['tarea_id'] = $request->tarea_id;
        $evidencia = Evidencia::create($validate_data);

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
        $validate_data = $request->validate([
            'url' => 'required',
            'descripcion' => 'required',
            'estado_validacion' => 'required|in:' . implode(',', Evidencia::ESTADOS_VALIDACION),
        ]);
        $validate_data['estudiante_id'] = $request->user()->id;
        $validate_data['tarea_id'] = $tarea->id;
        $evidencia->update($validate_data);

        return new EvidenciaResource($evidencia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea, Evidencia $evidencia)
    {
        try {
            $evidencia->delete();
            return response()->json([
                'message' => 'Evidencia eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
