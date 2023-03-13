@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="offset-md-3 col-md-6">
                <div class="card">
                    {{-- <div class="card-header text-center">
                    Inicio de sessión
                </div> --}}
                    <div class="card-body">
                        <p class="text-center">Inicio de sessión</p>
                        <form method="POST" action="{{ url('/login') }}">
                            @csrf

                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>

                            <div class="form-group mb-2">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary w-25">Login</button>
                                <a class="btn btn-success w-25" href="{{ url('user/register') }}">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
