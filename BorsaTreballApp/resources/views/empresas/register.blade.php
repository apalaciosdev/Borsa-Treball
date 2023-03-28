@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Registro Empresa</h4>
                        <form method="POST" class="row">
                            @csrf
                            <div class="col-8 mb-2">
                                <label for="nomEmp">Nombre de la empresa: </label>
                                <input type="text" name="nomEmp" id="nomEmp" class="form-control" required>
                            </div>
                            <div class="col-4 mb-2">
                                <label for="telf">Telefono: </label>
                                <input type="number" name="telf" id="telf" class="form-control" required>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="provincia">Provincia: </label>
                                <input type="text" name="provincia" id="provincia" class="form-control" required>
                            </div>
                            <div class="col-6 mb-2">
                                <label for="localidad">Localidad: </label>
                                <input type="text" name="localidad" id="localidad" class="form-control" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="dirEmp">Direccion de la empresa: </label>
                                <input type="text" name="dirEmp" id="dirEmp" class="form-control" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="pagCor">Pagina web corporativa: </label>
                                <input type="text" name="pagCor" id="pagCor" class="form-control" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="email">Email: </label>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="pass">Contraseña: </label>
                                <input type="password" name="pass" id="pass" class="form-control" required>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary w-50">Registrar empresa</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
