@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1</a></h1>
	<p>Entorno Servidor: Trabajo En Grupo</p>
@endsection

@section('content')
    <div class="row m-4">
        <div class="col-sm-4">
            <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px"/></a>
        </div>
        <div class="col-sm-8">

            <header>
                <h3>{{ $ciclo_formativo->nombre }}</h3>
                <h4>Codigo: {{$ciclo_formativo->codigo}}</h4>
                <p>Grado: {{$ciclo_formativo->grado}}</p>
            </header>
            <footer>
                <p></p>
                <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'getEdit'], ['id' => $ciclo_formativo->id]) }}" class="button alt">Editar Ciclo Formativo</a></li>
                            <li><a href="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'getIndex']) }}" class="button alt">Todos los Ciclos Formativos</a></li>
                </ul>
            </footer>

        </div>
    </div>
@endsection

@section('menu')
    <li>Opcion adicional</li>
@endsection
