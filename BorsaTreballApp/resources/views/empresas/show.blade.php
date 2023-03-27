@extends('layouts.master')

@section('content')
    @include('partials.navbar')
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 card">
                <div class="card-body">
                    <form class="row" method="POST">
                        @csrf
                        <input type="hidden" name="lastEmail" value='{{ $empresa->email }}'>
                        <div class="col-3 mb-3">
                            <label for="nombre" class="form-label">Nombre de la empresa</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value='{{ $empresa->nombre }}' disabled>
                        </div>
                        <div class="col-5 mb-3">
                            <label for="direccion" class="form-label">Dirección de la empresa</label>
                            <input type="text" class="form-control" id="direccion" name="direccion"
                                value='{{ $empresa->direccion }}' disabled>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="localidad" class="form-label">Localidad</label>
                            <input type="text" class="form-control" id="localidad" name="localidad"
                                value='{{ $empresa->localidad }}' disabled>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="puesto" class="form-label">Puesto ofertado</label>
                            <input type="text" class="form-control" id="puesto" name="puesto"
                                value='{{ $oferta->nombrePuesto }}' readonly>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea readonly>{{ $oferta->descripcion }}</textarea>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="salario" class="form-label">Salario</label>
                            <input type="number" class="form-control" id="salario" name="salario"
                                value='{{ $oferta->salario }}' readonly>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="data" class="form-label">Data de publicación</label>
                            <input type="date" class="form-control" id="data" name="data"
                                value='{{ $oferta->fechaPublicacion }}' readonly>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select id="estado" name="estado">
                                <option>Vigente</option>
                                <option>Caducada</option>
                                <option>Cubierta</option>
                            </select>
                        </div>
                        <div class="col-2 botones">
                            <button type="button" id="editarDatosOferta" class="btn btn-warning w-100">Editar oferta</button>
                            <button type="submit" class="d-none btn btn-primary w-100">Guardar oferta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-4"> 
            
            {{-- @foreach ($ofertas as $oferta)
                <div class="col-12 card mt-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">{{ $oferta->nombrePuesto }}</h4>
                            <p>Estado de la oferta: {{ ucfirst($oferta->estadoOferta) }}</p>
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $oferta->localidadOferta }}</h6>
                        <p class="card-text">Descripción del puesto de trabajo:<br>{{ $oferta->descripcion }}<br>Salario:
                            {{ $oferta->salario }}<br>Número de inscritos: {{ $oferta->numeroInscritos }}</p>
                        <a href="{{ route('mostrarOfertaEmp', $oferta->id) }}" class="text-decoration-none">Editar oferta <i class="bi bi-arrow-right-circle"></i></a>
                    </div>
                </div>
            @endforeach --}}
        </div>
    </div>
@stop

{{-- @section('scripts')
    <script type="text/javascript" src={{ asset('js/empresas.js') }}></script>
@stop --}}
