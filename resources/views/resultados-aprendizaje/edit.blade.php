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
                    Modificar Resultado de Aprendizaje
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\ResultadosAprendizajeController::class, 'putCreate'],['id' => $id]) }}" method="POST">

                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label for="codigo">Codigo</label>
	                        <input type="text" name="codigo" id="codigo" value="{{$resultado_aprendizaje->codigo}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$resultado_aprendizaje->descripcion}}" required>
                        </div>

                        <div class="form-group">
                            <label for="codigo">Porcentaje</label>
	                        <input type="number" name="porcentaje" id="porcentaje" min="0" max="100" step="0.01" value="{{$resultado_aprendizaje->peso_porcentaje}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="codigo">Orden</label>
	                        <input type="number" name="orden" id="orden" min="1" value="{{$resultado_aprendizaje->orden}}" class="form-control" required>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar Resultado de Aprendizaje
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
