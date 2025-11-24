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
                <h3>{{ $familia_profesional['nombre'] }}</h3>
                <h4>Docente ID: {{$familia_profesional['docente_id']}}</h4>
            </header>
            <p>
                <a href="http://github.com/2DAW-CarlosIII/{{ $familia_profesional['dominio'] }}">
                    http://github.com/2DAW-CarlosIII/{{ $familia_profesional['dominio'] }}
                </a>
            </p>
            <footer>
                <ul>
                    @foreach ($familia_profesional['metadatos'] as $indice => $metadato)
                        <li>{{ $indice }}: {{ $metadato }}</li>
                    @endforeach
                </ul>
                @if ($familia_profesional['metadatos']['calificacion'] >= 5)
                    <p>Estado: <strong style="color: green;">Familia profesional aprobada<strong></p>
                    <button class="btn" >Suspender familia profesional</button>
                @elseif($familia_profesional['metadatos']['calificacion'] < 5)
                    <p>Estado: <strong style="color: red">Familia profesional suspensa<strong></p>
                    <button class="btn" style="background-color: rgb(46, 128, 236);">Aprobar familia profesional</button>
                @endif
                <p></p>
                <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getEdit'], ['id' => $id]) }}" class="button alt">Editar Familia Profesional</a></li>
                            <li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getIndex']) }}" class="button alt">Todas los Familias Profesionales</a></li>
                </ul>
            </footer>

        </div>
    </div>
@endsection

@section('menu')
    <li>Opcion adicional</li>
@endsection
