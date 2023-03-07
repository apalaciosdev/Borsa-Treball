@extends('layouts.master')

@section('content')
    @include('partials.navbar')
    <div class="container">
        {{-- Muestra la ventana de registro para empresas --}}

        <div class="row" style="margin-top:40px">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Registra tu oferta
                    </div>
                    <div class="card-body" style="padding:30px">
                        <form method="POST" action="{{ url('empresas/oferta/create') }}" class="row">
                            {{-- TODO: Protección contra CSRF --}}
                            @csrf

                            <div class="col-12 form-group mb-3">
                                <label for="nomEmp">Nombre de la empresa: </label>
                                <input type="text" name="nomEmp" id="nomEmp" class="form-control" value={{ $nombreEmp->nombre }} disabled>
                            </div>

                            <div class="col-12 form-group mb-3">
                                <label for="nomPue">Nombre del puesto: </label>
                                <input type="text" name="nomPue" id="nomPue" class="form-control">
                            </div>

                            <div class="col-12 form-group mb-3">
                                <label for="descr">Descripción: </label>
                                <textarea name="descr" id="descr" class="form-control"></textarea>
                            </div>

                            <div class="col-12 form-group mb-3">
                                <label for="localidad">Localidad: </label>
                                <input type="text" name="localidad" id="localidad" class="form-control">
                            </div>

                            <div class="col-12 form-group mb-3">
                                <label for="salario">Salario: </label>
                                <input type="float" name="salario" id="salario" class="form-control">
                            </div>

                            <div class="col-6 offset-3 form-group">
                                <button type="submit" class="btn btn-primary w-100">
                                    Crear oferta
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop