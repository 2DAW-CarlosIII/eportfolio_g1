@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1 </a></h1>
    <p>Listado de Familias Profesionales </p>
@endsection

@section('content')
    <div class="row">

        @foreach ($familias_profesionales as $key => $familia_profesional)
            <div class="col-4 col-6-medium col-12-small">
                <section class="box">
                    <a href="#" class="images featured"><img src="{{ asset('/images/logo.png') }}" alt=""
                            style="width: 50%; height: 50%;" /></a>
                    <header>
                        <h3>{{ $familia_profesional->nombre }}</h3>
                    </header>
                    <p>Codigo: {{ $familia_profesional->codigo }}</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getShow'], $familia_profesional->id) }}"
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