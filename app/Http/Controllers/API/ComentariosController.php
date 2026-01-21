<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ComentarioResource;
use App\Models\Comentario;
use App\Models\Evidencia;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Evidencia $evidencia, Comentario $comentario)
    {
        $query = Comentario::query();
        if($query) {  
            $query->orWhere('nombre', 'like', '%' .$request->q . '%');
        }
       return ComentarioResource::collection(
            $query->where('evidencia_id', $evidencia->id)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Evidencia $evidencia , Comentario $comentario) 
    {
        $comentarioData = json_decode($request->getContent(), true);

        $comentario = Comentario::create($comentarioData);

        return new ComentarioResource($comentario);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evidencia $evidencia,Comentario $comentario)
    {
        
        return new ComentarioResource($comentario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evidencia $evidencia, Comentario $comentario)
    {
        $comentarioData = json_decode($request->getContent(), true)->where('evidencia_id', $evidencia->id);

        $comentario->update($comentarioData);

        return new ComentarioResource($comentario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evidencia $evidencia,Comentario $comentario)
    {
        try {
            $comentario->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
