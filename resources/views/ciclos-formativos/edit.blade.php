@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1 </a></h1>
    <p>Edicion de Ciclos Formativos </p>
@endsection

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Ciclo Formativo
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'update'],['id' => $ciclo_formativo->id]) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$ciclo_formativo->nombre}}" required maxlength="255">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Codigo</label>
	                        <input type="text" name="codigo" id="codigo" value="{{$ciclo_formativo->codigo}}" class="form-control" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="grado">Grado</label>
                            <select name="grado" id="grado" class="form-control" required>
                                @foreach ($grados as $grado)
                                    <option value="{{ $grado }}" @if ($grado == $ciclo_formativo->grado) selected @endif>{{ $grado }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{$ciclo_formativo->descripcion}}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar Ciclo Formativo
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
