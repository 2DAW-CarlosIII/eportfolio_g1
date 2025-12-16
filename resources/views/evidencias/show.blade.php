@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1</a></h1>
    <p>Entorno Servidor: Trabajo En Grupo</p>
@endsection

@section('content')

    <div class="row m-0">
        <div class="col-12 col-sm-4">
            <a href="#" class="image"><img src="{{ asset('/images/logo.png') }}" alt=""
                    style="width: 15vh; height: 15vh;" /></a>
        </div>
        <div class="col-12 col-sm-8">

            <header>
                <h3></h3>
                <h4>Url: {{$evidencia->url}}</h4>
                <h5>Estado validación: {{$evidencia->estado_validacion}}</h5>
                <p>Descripción: {{$evidencia->descripcion}}</p>
            </header>
            <footer>
                <p></p>
                <ul class="actions">
                    @auth
                    <li><a href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getEdit'], ['id' => $evidencia->id]) }}"
                            class="button alt">Editar Evidencia</a></li>
                    @endauth
                    <li><a href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getIndex']) }}"
                            class="button alt">Todas las Evidencias</a></li>
                </ul>
            </footer>

        </div>
    </div>
@endsection

@section('menu')
    <li>Opcion adicional</li>
@endsection
