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
}
