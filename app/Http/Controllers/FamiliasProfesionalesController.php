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

    
}
