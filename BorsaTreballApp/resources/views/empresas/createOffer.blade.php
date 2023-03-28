@extends('layouts.master')

@section('content')
    @include('partials.navbar')
    <div class="container">
        {{-- Muestra la ventana de registro para empresas --}}

        <div class="row" style="margin-top:40px">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">Registrar nueva oferta</h5>
                        <form method="POST" action="{{ url('empresas/oferta/create') }}" class="row">
                            {{-- TODO: Protección contra CSRF --}}
                            @csrf

                            <div class="col-12 form-group mb-3">
                                <label for="nombreEmp">Nombre de la empresa: </label>
                                <input type="text" name="nombreEmp" id="nombreEmp" class="form-control" value="{{ $nombreEmp->nombre }}" readonly>
                            </div>

                            <div class="col-12 form-group mb-3">
                                <label for="nomPue">Nombre del puesto: </label>
                                <input type="text" name="nomPue" id="nomPue" class="form-control" required>
                            </div>

                            <div class="col-12 form-group mb-3">
                                <label for="descr">Descripción: </label>
                                <textarea name="descr" id="descr" class="form-control" required></textarea>
                            </div>

                            <div class="col-12 form-group mb-3">
                                <label for="localidad">Localidad: </label>
                                <input type="text" name="localidad" id="localidad" class="form-control" required>
                            </div>

                            <div class="col-12 form-group mb-3">
                                <label for="salario">Salario: </label>
                                <input type="number" step="0.01" name="salario" id="salario" class="form-control" required>
                            </div>

                            <div class="col-6 offset-3 form-group">
                                <button type="submit" class="btn btn-primary w-100">Crear oferta</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop