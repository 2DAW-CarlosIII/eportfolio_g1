@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1 </a></h1>
    <p>Edicion de Evidencias </p>
@endsection

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Evidencia
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\EvidenciasController::class, 'update'],['id' => $evidencia->id]) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="url">Url</label>
	                        <input type="text" name="url" id="url" value="{{$evidencia->url}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{$evidencia->descripcion}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="estado_validacion">Estado de Validación</label>
                            <select name="estado_validacion" id="estado_validacion" class="form-control" required>
                                <option value="pendiente" {{ $evidencia->estado_validacion == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="validada" {{ $evidencia->estado_validacion == 'validada' ? 'selected' : '' }}>Validada</option>
                                <option value="rechazada" {{ $evidencia->estado_validacion == 'rechazada' ? 'selected' : '' }}>Rechazada</option>
                            </select>
                        </div>

                        
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar Evidencia
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
