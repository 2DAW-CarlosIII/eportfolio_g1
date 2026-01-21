<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AsignacionesResource;
use App\Http\Resources\ComentarioResource;
use App\Models\Asignacion;
use App\Models\Comentario;
use App\Models\Evidencia;
use App\Models\User;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Evidencia $evidencia, Asignacion $asignacion)
    {
        $query = Asignacion::query();
        if($query) {
            $query->orWhere('nombre', 'like', '%' .$request->q . '%');
        }
       return AsignacionesResource::collection(
            $query
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Evidencia $evidencia,Asignacion $asignacion)
    {
        $asignacionData = json_decode($request->getContent(), true);

        $asignacion = Asignacion::create($asignacionData);

        return new AsignacionesResource($asignacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evidencia $evidencia,Asignacion $asignacion)
    {
       
        return new AsignacionesResource($asignacion);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Evidencia $evidencia, Asignacion $asignacion)
    {
        $asignacionData = json_decode($request->getContent(), true)->where('evidencia_id', $evidencia->id);

        $asignacion->update($asignacionData);

        return new AsignacionesResource($asignacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Evidencia $evidencia,Asignacion $asignacion)
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
