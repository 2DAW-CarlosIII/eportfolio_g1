<?php

namespace App\Http\Controllers;

use App\Models\Evidencia;
use Illuminate\Http\Request;

class EvidenciasController extends Controller
{
    public function getIndex()
    {
        return view('evidencias.index')
            ->with('evidencias', Evidencia::all());
    }

    public function getShow($id)
    {
        return view('evidencias.show')
            ->with('evidencia', Evidencia::findOrFail($id))
            ->with('id', $id);
    }

    public function getCreate()
    {
        return view('evidencias.create')
        ->with('estados_validacion', Evidencia::ESTADOS_VALIDACION);
    }

    public function getEdit($id)
    {
        return view('evidencias.edit')
            ->with('evidencia', Evidencia::findOrFail($id))
            ->with('id', $id)
            ->with('estados_validacion', Evidencia::ESTADOS_VALIDACION);
    }

    public function store(Request $request)
    {
        $evidencia = new Evidencia();
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->store('documentos', ['disk' => 'public']);
            $evidencia->url = $path;
        }
        $evidencia->descripcion = $request->descripcion;
        $evidencia->estado_validacion = $request->estado_validacion;
        $evidencia->save();

        return redirect()->action([EvidenciasController::class, 'getShow'], ['id' => $evidencia->id]);
    }

    public function update($id, Request $request)
    {
        $evidencia = Evidencia::findOrFail($id);
        if ($request->hasFile('documento')) {
            $path = $request->file('documento')->store('documentos', ['disk' => 'public']);
            $evidencia->url = $path;
        }
        $evidencia->descripcion = $request->descripcion;
        $evidencia->estado_validacion = $request->estado_validacion;
        $evidencia->save();

        return redirect()->action([EvidenciasController::class, 'getShow'], ['id' => $evidencia->id]);
    }
}
