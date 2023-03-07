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
                                value={{ $oferta->nombre }} readonly>
                        </div>
                        <div class="col-7 mb-3">
                            <label for="direccion" class="form-label">Dirección de la empresa</label>
                            <input type="text" class="form-control" id="direccion" name="direccion"
                                value={{ $oferta->direccion }} readonly>
                        </div>
                        <div class="col-2 mb-3">
                            <label for="localidad" class="form-label">Localidad</label>
                            <input type="text" class="form-control" id="localidad" name="localidad"
                                value={{ $oferta->localidad }} readonly>
                        </div>

                        <div class="col-12 form-group mb-3">
                            <label for="nomPue" class="form-label">Nombre del puesto: </label>
                            <input type="text" name="nomPue" id="nomPue" class="form-control"
                                value={{ $oferta->nombrePuesto }} readonly>
                        </div>

                        <div class="col-12 form-group mb-3">
                            <label for="descr">Descripción: </label>
                            <textarea name="descr" id="descr" class="form-control" value={{ $oferta->descripcion }} readonly></textarea>
                        </div>

                        <div class="col-12 form-group mb-3">
                            <label for="localidad">Localidad: </label>
                            <input type="text" name="localidad" id="localidad" class="form-control" value={{ $oferta->localidadOferta }} readonly>
                        </div>

                        <div class="col-12 form-group mb-3">
                            <label for="salario">Salario: </label>
                            <input type="float" name="salario" id="salario" class="form-control" value={{ $oferta->salario }} readonly>
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

@stop
