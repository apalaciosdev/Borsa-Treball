@extends('layouts.master')

@section('content')
    @include('partials.navbar')
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 card mt-2">
                <div class="card-body">
                    <div class="">
                        <h2 class="card-title">{{ $usuario->nombre }} {{ $usuario->apellidos }}</h2>
                    </div>
                    <h5 class="text-muted card-subtitle">{{ $usuario->email }}</h5>
                    <p class="card-text">
                        Fecha de nacimiento: {{ $usuario->fechaNacimiento }}<br>
                        Coche propio: @if ($usuario->cochePropio == 0)
                            No dispone
                        @else
                            Disponible
                        @endif<br>
                        <br>Descripcion:<br>{{ $usuario->descripcion }}<br>
                        <br>Titulacion: <br>{{ $usuario->titulacion }}<br>
                        <br>Experiencia laboral: <br>{{ $usuario->experienciaLaboral }}<br>
                    </p>
                    {{-- <a href="{{ route('mostrarOfertaEmp', $oferta->id) }}" class="text-decoration-none">Editar oferta <i class="bi bi-arrow-right-circle"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
@stop
