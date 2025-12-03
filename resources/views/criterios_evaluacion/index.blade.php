@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1</a></h1>
    <p>Entorno Servidor: Trabajo En Grupo</p>
@endsection

@section('content')
    <div class="row">

        @foreach ($criterios_evaluacion as $criterio_evaluacion)
            <div class="col-4 col-6-medium col-12-small">
                <section class="box">
                    <a href="#" class="images featured"><img src="{{ asset('/images/logo.png') }}" alt=""
                            style="width: 50%; height: 50%;" /></a>
                    <header>
                        <h3>{{ $criterio_evaluacion->descripcion }}</h3>
                    </header>
                    <p>Codigo: {{ $criterio_evaluacion->codigo }}</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\CriteriosEvaluacionController::class, 'getShow'], $criterio_evaluacion->id) }}"
                                    class="button alt">Más info</a></li>
                        </ul>
                    </footer>
                </section>
            </div>
        @endforeach

    </div>
@endsection

@section('menu')
    <li>Opcion adicional</li>
@endsection