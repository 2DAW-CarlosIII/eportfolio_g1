@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1 </a></h1>
    <p>Listado de Evidencias </p>
@endsection

@section('content')
    <div class="row ">

        @foreach ($evidencias as $key => $evidencia)
            <div class="col-4 col-6-medium col-12-small ">
                <section class="box ">
                    <a href="#" class="images featured"><img src="{{ asset('/images/logo.png') }}" alt=""
                            style="width: 50%; height: 50%;" /></a>
                    <header>
                        <h3>{{ $evidencia->descripcion }}</h3>
                    </header>
                    <p>Estado validación: {{ $evidencia->estado_validacion }}</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getShow'], ['id' => $evidencia->id]) }}"
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