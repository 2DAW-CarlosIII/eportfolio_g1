@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1</a></h1>
	<p>Entorno Servidor: Trabajo En Grupo</p>
@endsection

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Familia Profesional
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'update'],['id' => $id]) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$familia_profesional['nombre']}}">
                        </div>

                        <div class="form-group">
                            <label for="docente_id">Docente</label>
	                        <input type="number" name="docente_id" id="docente_id" value="{{$familia_profesional['docente_id']}}">
                        </div>

                        <div class="form-group">
                            <label for="dominio">Dominio</label>
	                        <input type="text" name="dominio" id="dominio" class="form-control" value="{{$familia_profesional['dominio']}}">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Metadatos</label>
                            <textarea name="metadatos" id="metadatos" class="form-control" rows="3" ></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar familia profesional
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('menu')
    <li>Opcion adicional</li>
@endsection
