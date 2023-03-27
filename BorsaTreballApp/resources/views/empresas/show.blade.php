@extends('layouts.master')

@section('content')
    @include('partials.navbar')
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 card">
                <div class="card-body">
                    <form class="row" method="POST">
                        @csrf
                        <input type="hidden" name="lastEmail" value="{{ $empresa->email }}"">
                        <div class="col-3 mb-3">
                            <label for="nombre" class="form-label">Nombre de la empresa</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="{{ $empresa->nombre }}"" disabled>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="direccion" class="form-label">Dirección de la empresa</label>
                            <input type="text" class="form-control" id="direccion" name="direccion"
                                value="{{ $empresa->direccion }}" disabled>
                        </div>
                        <div class="col-3 mb-3">
                            <label for="localidad" class="form-label">Localidad</label>
                            <input type="text" class="form-control" id="localidad" name="localidad"
                                value="{{ $empresa->localidad }}" disabled>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="puesto" class="form-label">Puesto ofertado</label>
                            <input type="text" class="form-control" id="puesto" name="puesto"
                                value="{{ $oferta->nombrePuesto }}" readonly>
                        </div>
                        <div class="col-3 mb-3">
                            <label for="salario" class="form-label">Salario</label>
                            <input type="number" class="form-control" id="salario" name="salario"
                            value="{{ $oferta->salario }}" readonly>
                        </div>
                        <div class="col-3 mb-3">
                            <label for="data" class="form-label">Data de publicación</label>
                            <input type="date" class="form-control" id="data" name="data"
                                value="{{ $oferta->fechaPublicacion }}" readonly>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select id="estado" class="form-select" name="estado">
                                <option value="vigente">Vigente</option>
                                <option value="caducada">Caducada</option>
                                <option value="cubierta">Cubierta</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea id="descripcion" class="form-control" readonly>{{ $oferta->descripcion }}</textarea>
                        </div>
                        <div class="col-2 offset-10 botones">
                            <button type="button" id="editarDatosOferta" class="btn btn-warning w-100">Editar oferta</button>
                            <button type="submit" class="d-none btn btn-primary w-100">Guardar oferta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-4"> 
            <table class="table table-responsive table-light table-hover table-striped">
                <thead class="table-secondary">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        {{-- <th>Email</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $user)
                    <tr>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->apellidos }}</td>
                        {{-- <td>{{ $user-> }}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

{{-- @section('scripts')
    <script type="text/javascript" src={{ asset('js/empresas.js') }}></script>
@stop --}}
