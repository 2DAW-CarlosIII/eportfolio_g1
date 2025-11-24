@extends('layouts.master')

@section('content')
    <h1>Edit Familias Profesional</h1>

    <form action="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'update']), ['id' => $id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $familia_profesional['nombre']) }}">
        </div>

        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="text" id="codigo" name="codigo" class="form-control" value="{{ $familia_profesional['codigo']) }}">
        </div>

        <div class="form-group text-center">
        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
            Modificar proyecto
        </button>
        </div>
    </form>


@stop
