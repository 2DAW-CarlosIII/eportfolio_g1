<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AsignacionesRevisionResource;
use App\Models\AsignacionRevision;
use App\Models\Evidencia;
use Illuminate\Http\Request;
use App\Models\User;

class AsignacionRevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Evidencia $evidencia)
    {
        $query = $evidencia->asignaciones_revision()->newQuery();
        if($query) {
            $query->where('revisor_id', 'like', '%' .$request->search . '%');
        }
        if($query){
            $query->where('estado', 'like', '%' .$request->estado_asignacion . '%');
        }
       return AsignacionesRevisionResource::collection(
            $query->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->per_page));
    }

    public function indexUserAsignacion(Request $request, User $user) // $id
    {
        $query = $user->asignaciones_revision()->newQuery();
        if($query) {
            $query->where('revisor_id', 'like', '%' .$request->search . '%');
        }
        if($query){
            $query->where('estado', 'like', '%' .$request->estado_asignacion . '%');
        }
       return AsignacionesRevisionResource::collection(
            $query->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->per_page));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Evidencia $evidencia,AsignacionRevision $asignacion)
    {
        $validate_data = $request->validate([
            'fecha_limite' => 'required|date',
            'estado_validacion' => 'in:' . implode(',', AsignacionRevision::ESTADOS),
        ]);

        $validate_data['evidencia_id'] = $evidencia->id;    
        $validate_data['revisor_id'] = $request->revisor_id;
        $validate_data['asignado_por_id'] = $request->asignado_por_id;

        $asignacion = AsignacionRevision::create($validate_data);

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
        $validate_data = $request->validate([
            'fecha_limite' => 'required|date',
            'estado_validacion' => 'in:' . implode(',', AsignacionRevision::ESTADOS),
        ]);

        $validate_data['evidencia_id'] = $evidencia->id;    
        $validate_data['revisor_id'] = $request->revisor_id;
        $validate_data['asignado_por_id'] = $request->asignado_por_id;

        $asignacion->update($validate_data);

        return new AsignacionesRevisionResource($asignacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Evidencia $evidencia,AsignacionRevision $asignacion)
    {
        try {
            $asignacion->delete();
            return response()->json([
                'message' => 'AsignacionRevision eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
