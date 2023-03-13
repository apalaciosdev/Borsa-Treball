@extends('layouts.master')

@section('content')

    @include('partials.navbar')
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 card">
                <div class="card-body">
                    <form class="row">
                        <div class="col-3 mb-3">
                            <label for="nombre" class="form-label">Nombre de la empresa</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value={{ $empresa->nombre }} readonly>
                        </div>
                        <div class="col-7 mb-3">
                            <label for="direccion" class="form-label">Dirección de la empresa</label>
                            <input type="text" class="form-control" id="direccion" name="direccion"
                                value={{ $empresa->direccion }} readonly>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="localidad" class="form-label">Localidad</label>
                            <input type="text" class="form-control" id="localidad" name="localidad"
                                value={{ $empresa->localidad }} readonly>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="provincia" class="form-label">Província</label>
                            <input type="text" class="form-control" id="provincia" name="provincia"
                                value={{ $empresa->provincia }} readonly>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono"
                                value={{ $empresa->telefono }} readonly>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="url" class="form-label">Página web corporativa</label>
                            <input type="text" class="form-control" id="url" name="url"
                                value={{ $empresa->url }} readonly>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value={{ $empresa->email }} readonly>
                        </div>
                        <div class="col-2 offset-10">
                            <button type="button" class="btn btn-warning w-100">Editar datos</button>
                            <button type="button" class="d-none btn btn-primary w-100">Guardar datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src=""></script>
@stop
