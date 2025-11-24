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
                    Añadir Familia Profesional
                </div>
                <div class="card-body" style="padding:30px">


                    <form action="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'store']) }}" method="POST">

                        @csrf

                        <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="docente_id">Docente</label>
	                        <input type="number" name="docente_id" id="docente_id">
                        </div>

                        <div class="form-group">
                        {{-- TODO: Completa el input para la URL de GitHub --}}
                            <label for="dominio">Dominio</label>
	                        <input type="text" name="dominio" id="dominio" class="form-control">
                        </div>

                        <div class="form-group">
                        <label for="descripcion">Metadatos</label>
                        <textarea name="metadatos" id="metadatos" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Añadir Familia Profesional
                        </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir familias profesionales
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'store']) }}"
                        method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" name="codigo" id="codigo">
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir familia profesional
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@stop
