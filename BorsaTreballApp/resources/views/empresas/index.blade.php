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
                                value='{{ $empresa->nombre }}' readonly>
                        </div>
                        <div class="col-5 mb-3">
                            <label for="direccion" class="form-label">Dirección de la empresa</label>
                            <input type="text" class="form-control" id="direccion" name="direccion"
                                value='{{ $empresa->direccion }}' readonly>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="localidad" class="form-label">Localidad</label>
                            <input type="text" class="form-control" id="localidad" name="localidad"
                                value='{{ $empresa->localidad }}' readonly>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="provincia" class="form-label">Província</label>
                            <input type="text" class="form-control" id="provincia" name="provincia"
                                value='{{ $empresa->provincia }}' readonly>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono"
                                value='{{ $empresa->telefono }}' readonly>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="url" class="form-label">Página web corporativa</label>
                            <input type="text" class="form-control" id="url" name="url"
                                value='{{ $empresa->url }}' readonly>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value='{{ $empresa->email }}' readonly>
                        </div>
                        <div class="col-2 offset-10">
                            <button type="button" id="editarDatos" class="btn btn-warning w-100">Editar datos</button>
                            <button type="submit" class="d-none btn btn-primary w-100">Guardar datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($ofertas as $oferta)
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
            @endforeach
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript" src={{ asset('js/empresas.js') }}></script>
@stop
