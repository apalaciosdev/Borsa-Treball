@extends('layouts.master')

@section('content')

    @include('partials.navbar')
    <div class="container">
        {{-- Detalle de empresa --}}
        <span>
            {{ $empresa }}
        </span>
        <div>
            <p>Nombre de la empresa: </p>
            <p>Direccion de la empresa: </p>
            <p>Localidad: </p>
            <p>Provincia: </p>
            <p>Telefono: </p>
            <p>Pagina web corporativa: </p>
            <p>Email: </p>
            <p>Contraseña: </p>
        </div>
    </div>

@stop
