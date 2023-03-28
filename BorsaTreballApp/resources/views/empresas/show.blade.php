@extends('layouts.master')

@section('content')
    @include('partials.navbar')
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 card">
                <div class="card-body">
                    <form method="POST" action="{{ route('modificarOferta') }}" class="row">
                        @csrf
                        <input type="hidden" name="id" value="{{ $oferta->id }}">
                        <div class="col-3 mb-3">
                            <label for="nombreEmpresa" class="form-label">Nombre de la empresa</label>
                            <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa"
                                value="{{ $empresa->nombre }}" disabled>
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
                            <label for="nombrePuesto" class="form-label">Puesto ofertado</label>
                            <input type="text" class="form-control" id="nombrePuesto" name="nombrePuesto"
                                value="{{ $oferta->nombrePuesto }}" readonly>
                        </div>
                        <div class="col-3 mb-3">
                            <label for="salario" class="form-label">Salario</label>
                            <input type="number" class="form-control" id="salario" name="salario"
                                value="{{ $oferta->salario }}" readonly>
                        </div>
                        <div class="col-3 mb-3">
                            <label for="fechaPublicacion" class="form-label">Fecha de publicación</label>
                            <input type="date" class="form-control" id="fechaPublicacion" name="fechaPublicacion"
                                value="{{ $oferta->fechaPublicacion }}" disabled>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="estadoOferta" class="form-label">Estado de la oferta</label>
                            <select id="estadoOferta" class="form-select" name="estadoOferta" disabled>
                                @foreach (['vigente', 'caducada', 'cubierta'] as $estado)
                                    <option value="{{ $estado }}" @if ($estado == $oferta->estadoOferta) selected @endif>
                                        {{ ucfirst($estado) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea id="descripcion" class="form-control" readonly>{{ $oferta->descripcion }}</textarea>
                        </div>
                        <div class="col-2 offset-10 botones">
                            <button type="button" id="editarDatosOferta" class="btn btn-warning w-100">Editar
                                oferta</button>
                            <button type="submit" class="d-none btn btn-primary w-100">Guardar oferta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if ($oferta->numeroInscritos > 0)
            <div class="row mt-4">
                <div class="mx-auto w-75">
                    <table class="table text-center table-light table-hover table-striped overflow-hidden rounded-3">
                        <thead class="table-secondary">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $user)
                                <tr>
                                    <td>{{ $user->nombre }}</td>
                                    <td>{{ $user->apellidos }}</td>
                                    <td>
                                        <form action="{{ route('mostrarUsuarioInscrito') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="userEmail" value="{{ $user->email }}">
                                            <button type="submit" class="btn btn-primary">Mostrar detalle</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        @endif
    </div>
@stop

@section('scripts')
    <script type="text/javascript" src={{ asset('js/empresas.js') }}></script>
@stop
