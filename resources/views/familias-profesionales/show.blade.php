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
                <h3>{{ $familia_profesional->nombre }}</h3>
                <h4>Codigo: {{$familia_profesional->codigo}}</h4>
            </header>
            <footer>
                <p></p>
                <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getEdit'], $familia_profesional->id) }}" class="button alt">Editar Familia Profesional</a></li>
                            <li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getIndex']) }}" class="button alt">Todas los Familias Profesionales</a></li>
                </ul>
            </footer>

        </div>
    </div>
@endsection

@section('menu')
    <li>Opcion adicional</li>
@endsection
