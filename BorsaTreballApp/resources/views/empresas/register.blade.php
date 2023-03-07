@extends('layouts.master')

@section('content')
    @include('partials.navbar')
    <div class="container">
        {{-- Muestra la ventana de registro para empresas --}}

        <div class="row" style="margin-top:40px">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Registra tu empresa
                    </div>
                    <div class="card-body" style="padding:30px">
                        <form method="POST" action="">
                            {{-- TODO: Protección contra CSRF --}}
                            @csrf

                            <div class="form-group">
                                <label for="nomEmp">Nombre de la empresa: </label>
                                <input type="text" name="nomEmp" id="nomEmp" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="dirEmp">Direccion de la empresa: </label>
                                <input type="text" name="dirEmp" id="dirEmp" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="localidad">Localidad: </label>
                                <input type="text" name="localidad" id="localidad" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="provincia">Provincia: </label>
                                <input type="text" name="provincia" id="provincia" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="telf">Telefono: </label>
                                <input type="number" name="telf" id="telf" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="pagCor">Pagina web corporativa: </label>
                                <input type="text" name="pagCor" id="pagCor" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="pass">Contraseña: </label>
                                <input type="password" name="pass" id="pass" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                    Registrar empresa
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
