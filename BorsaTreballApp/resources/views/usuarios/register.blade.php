@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Registro</h4>
                        <form method="POST" action="{{ url('/user/añadirUsuario') }}" class="row">
                            @csrf
                            <div class="col-5 mb-2">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="col-7 mb-2">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                            </div>
                            <div class="col-8 mb-2">
                                <label for="password">Password </label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="col-4 mb-2">
                                <label for="fechaNacimiento">Fecha de nacimiento</label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control"
                                    required>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="descripcion">Descripción</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="col-9 mb-2">
                                <label for="titulacion">Titulación </label>
                                <input type="text" name="titulacion" id="titulacion" class="form-control" required>
                            </div>
                            <div class="col-3 mb-2">
                                <label for="cochePropio">Coche propio </label>
                                <select name="cochePropio" id="cochePropio" class="form-control">
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="experienciaLaboral">Experiencia Laboral</label>
                                <textarea name="experienciaLaboral" id="experienciaLaboral" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary w-50">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop