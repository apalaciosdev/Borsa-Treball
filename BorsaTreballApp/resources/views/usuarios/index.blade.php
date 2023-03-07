@extends('layouts.master')

@section('content')

    @include('partials.navbar')
    <div class="container">
        {{-- Detalle de empresa --}}
        <span>
            @foreach ($usuario as $u)
            <p>Id : {{ $u->id }} </p>
            <p>Nombre : {{ $u->nombre }} </p>
            <p>Apellidos : {{ $u->apellidos }} </p>
            <p>Descripcion : {{ $u->descripcion }} </p>
            <p>Email : {{ $u->email }} </p>
            <p>Password : {{ $u->password }} </p>
            <p>Fecha de Nacimiento : {{ $u->fechaNacimiento }} </p>
            <p>Titulacion : {{ $u->titulacion }} </p>
            <p>Coche Propio : {{ $u->cochePropio }} </p>
            <p>Experiencia Laboral : {{ $u->experienciaLaboral }} </p>
            @endforeach
            @foreach ($oferta as $o)
            <p>{{$o}}</p>
            @endforeach
        </span>
        <div>
            
        </div>
    </div>

@stop