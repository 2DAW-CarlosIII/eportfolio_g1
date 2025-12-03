@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1</a></h1>
	<p>Entorno Servidor: Trabajo En Grupo</p>
@endsection

@section('content')
    <div class="row">

        @foreach ($ciclos_formativos as $key => $ciclo_formativo)
            <div class="col-4 col-6-medium col-12-small">
                <section class="box">
                    <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" /></a>
                    <header>
                        <h3>{{ $ciclo_formativo->nombre }}</h3>
                    </header>
                        <p>Codigo: {{ $ciclo_formativo->codigo }}</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'getShow'], ['id' => $ciclo_formativo->id]) }}"
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
