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
                <h3>Descripción: {{$evidencia->descripcion}}</h3>
                <h5>Estado validación: {{$evidencia->estado_validacion}}</h5>
                @if($evidencia->url)
                    <p>documento: <a href="{{ Storage::url($evidencia->url) }}">Ver documento</a></p>
                @endif
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