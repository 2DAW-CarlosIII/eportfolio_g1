<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FamiliaProfesional;
use Illuminate\Http\Request;
use App\Http\Resources\FamiliaProfesionalResource;


class FamiliaProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = FamiliaProfesional::where('id', $request->id);
        if ($query) {
            $query->orWhere('nombre', 'like', '%' . $request->search . '%');
        }
        return FamiliaProfesionalResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|unique:familias_profesionales',
            'descripcion' => 'required',
        ]);

        $familiaProfesional = FamiliaProfesional::create($request->all());

        return new FamiliaProfesionalResource($familiaProfesional);

        /* can paginate familia profesionals                                                                                                                                                                        0.10s  
  ⨯ requires nombre field                                                                                                                                                                                    0.09s  
  ⨯ requires codigo field                                                                                                                                                                                    0.08s  
  ⨯ codigo must be unique  */
    }

    /**
     * Display the specified resource.
     */
    public function show(FamiliaProfesional $familiaProfesional)
    {
        return new FamiliaProfesionalResource($familiaProfesional);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FamiliaProfesional $familiaProfesional)
    {
        $familiaProfesionalData = json_decode($request->getContent(), true);
        $familiaProfesional->update($familiaProfesionalData);

        return new FamiliaProfesionalResource($familiaProfesional);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FamiliaProfesional $familiaProfesional)
    {
        try {
            $familiaProfesional->delete();
            return response()->json([
                'message' => 'FamiliaProfesional eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
