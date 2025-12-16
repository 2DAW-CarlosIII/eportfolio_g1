<?php

namespace App\Http\Controllers;

use App\Models\CicloFormativo;
use Illuminate\Http\Request;

class CiclosFormativosController extends Controller
{
    public function getIndex()
    {
        return view('ciclos-formativos.index')
            ->with('ciclos_formativos', CicloFormativo::all());
    }

    public function getShow($id)
    {
        return view('ciclos-formativos.show')
            ->with('ciclo_formativo', CicloFormativo::findOrFail($id))
            ->with('id', $id);
    }

    public function getCreate()
    {
        return view('ciclos-formativos.create')
        ->with('grados', CicloFormativo::GRADOS);
    }

    public function getEdit($id)
    {
        return view('ciclos-formativos.edit')
            ->with('ciclo_formativo', CicloFormativo::findOrFail($id))
            ->with('id', $id)
            ->with('grados', CicloFormativo::GRADOS);
    }

    public function store(Request $request)
    {
        $ciclo_formativo = new CicloFormativo();
        $ciclo_formativo->nombre = $request->nombre;
        $ciclo_formativo->codigo = $request->codigo;
        $ciclo_formativo->grado = $request->grado;
        $ciclo_formativo->descripcion = $request->descripcion;
        $ciclo_formativo->save();

        return redirect()->action([CiclosFormativosController::class, 'getShow'], ['id' => $ciclo_formativo->id]);
    }

    public function update($id, Request $request)
    {
        $ciclo_formativo = CicloFormativo::findOrFail($id);
        $ciclo_formativo->nombre = $request->nombre;
        $ciclo_formativo->codigo = $request->codigo;
        $ciclo_formativo->grado = $request->grado;
        $ciclo_formativo->descripcion = $request->descripcion;
        $ciclo_formativo->save();

        return redirect()->action([CiclosFormativosController::class, 'getShow'], ['id' => $ciclo_formativo->id]);
    }
}
