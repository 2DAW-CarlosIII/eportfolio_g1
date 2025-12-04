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
                    Modificar Criterio de Evaluación
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\CriteriosEvaluacionController::class, 'putCreate'],['id' => $id]) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$criterio_evaluacion->descripcion}}" required>
                        </div>

                        <div class="form-group">
                            <label for="codigo">Codigo</label>
	                        <input type="text" name="codigo" id="codigo" value="{{$criterio_evaluacion->codigo}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="peso_porcentaje">Peso porcentaje</label>
                            <input type="number" name="peso_porcentaje" id="peso_porcentaje" class="form-control" value="{{$criterio_evaluacion->peso_porcentaje}}" max="100" min="0" required>
                        </div>

                            <div class="form-group">
                            <label for="orden">Orden</label>
                            <input type="number" name="orden" id="orden" class="form-control" value="{{$criterio_evaluacion->orden}}" min="0" required>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar criterio de evaluación
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
