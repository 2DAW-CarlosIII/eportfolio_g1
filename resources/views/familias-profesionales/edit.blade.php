@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1 </a></h1>
    <p>Edicion de Familias Profesionales </p>
@endsection

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Familia Profesional
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'putCreate'],$familia_profesional->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$familia_profesional->nombre}}" required>
                        </div>

                        <div class="form-group">
                            <label for="codigo">Codigo</label>
	                        <input type="text" name="codigo" id="codigo" value="{{$familia_profesional->codigo}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" value="{{$familia_profesional->descripcion}}" class="form-control">
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
