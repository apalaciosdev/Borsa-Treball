@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p class="text-center">Inicio de sesión</p>
                        <form method="POST" action="{{ url('/login') }}">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group text-center mb-3">
                                <button type="submit" class="btn btn-primary w-50">Login</button>
                            </div>
                            <div class="d-flex align-items-center flex-column">
                                <a class="text-success mb-2" href="{{ url('user/register') }}">Registrar Usuario</a>
                                <a class="text-success" href="{{ url('empresas/register') }}">Registrar Empresa</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
