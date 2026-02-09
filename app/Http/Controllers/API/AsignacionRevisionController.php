<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AsignacionesRevisionResource;
use App\Models\AsignacionRevision;
use App\Models\Evidencia;
use Illuminate\Http\Request;

class AsignacionRevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Evidencia $evidencia)
    {
        $query = AsignacionRevision::where('evidencia_id', $evidencia->id);
        if($query) {
            $query->orWhere('revisor_id', 'like', '%' .$request->q . '%');
        }
       return AsignacionesRevisionResource::collection(
            $query->where('evidencia_id', $evidencia->id)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    public function indexUserAsignacion(Request $request, $id) // $id
    {
        $query = AsignacionRevision::where('asignado_por_id', $id);
       return AsignacionesRevisionResource::collection(
            $query->where('asignado_por_id', $id)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Evidencia $evidencia,AsignacionRevision $asignacion)
    {
        $asignacionData = json_decode($request->getContent(), true);

        $asignacion = AsignacionRevision::create($asignacionData);

        return new AsignacionesRevisionResource($asignacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evidencia $evidencia,AsignacionRevision $asignacion)
    {
       
        return new AsignacionesRevisionResource($asignacion);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Evidencia $evidencia, AsignacionRevision $asignacion)
    {
        $asignacionData = json_decode($request->getContent(), true);

        $asignacion->update($asignacionData);

        return new AsignacionesRevisionResource($asignacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Evidencia $evidencia,AsignacionRevision $asignacion)
    {
        try {
            $asignacion->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
