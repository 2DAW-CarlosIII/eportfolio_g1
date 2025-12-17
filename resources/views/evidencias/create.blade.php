@extends('layouts.master')

@section('logo')
    <h1><a href="{{ url(config('app.url')) }}">Eportfolio Grupo 1 </a></h1>
    <p>Creación de Evidencias </p>
@endsection

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir Evidencia
                </div>
                <div class="card-body" style="padding:30px">


                    <form action="{{ action([App\Http\Controllers\EvidenciasController::class, 'store']) }}" method="POST" enctype="multipart/form-data">

                        @csrf



                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="estado_validacion">Estado de Validación</label>
                            <select name="estado_validacion" id="estado_validacion" class="form-control" required>
                                <option value="pendiente">Pendiente</option>
                                <option value="validada">Validada</option>
                                <option value="rechazada">Rechazada</option>
                            </select>
                        </div>




                        <div class="form-group">
                            <label for="documento">Documento</label>
                            <input type="file" class="form-control" id="documento" name="documento" placeholder="documento">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
