<?php

namespace App\Http\Controllers;

use App\Models\FamiliaProfesional;
use Illuminate\Http\Request;

class FamiliasProfesionalesController extends Controller
{
    public function getIndex()
    {
        return view('familias-profesionales.index')
            ->with('familias_profesionales', FamiliaProfesional::all());
    }

    public function getCreate()
    {
        return view('familias-profesionales.create');
    }

    public function getShow($id)
    {
        return view('familias-profesionales.show')
            ->with('familia_profesional', FamiliaProfesional::findorFail($id))
            ->with('id', $id);
    }

    public function getEdit($id)
    {
        return view('familias-profesionales.edit')
            ->with('familia_profesional', FamiliaProfesional::findorFail($id))
            ->with('id', $id);
    }

    public function postCreate(Request $request){

        $familia_profesional = new FamiliaProfesional();
        $familia_profesional->nombre = $request->nombre;
        $familia_profesional->codigo = $request->codigo;
        $familia_profesional->descripcion = $request->descripcion;
        $familia_profesional->save();

        return redirect()->action([FamiliasProfesionalesController::class, 'getShow'], ['id'=> $familia_profesional->id]);
    }

    public function putCreate(Request $request){
        $familia_profesional = FamiliaProfesional::findorFail($request->id);
        $familia_profesional->nombre = $request->nombre;
        $familia_profesional->codigo = $request->codigo;
        $familia_profesional->descripcion = $request->descripcion;
        $familia_profesional->save();
    
        return redirect()->action([FamiliasProfesionalesController::class, 'getShow'], ['id'=> $familia_profesional->id]);
    }

    
}
