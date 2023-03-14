@extends('layouts.master')

@section('content')

    @include('partials.navbar')
    <div class="container">
        Detalle de oferta 
        @foreach ($oferta as $data)
            <p>Empresa: {{ $data->nombreEmpresa }} </p>
            <p>Lugar del puesto: {{ $data->nombrePuesto }} </p>
            <p>Localidad: {{ $data->localidadOferta }} </p>
            <p>Salario: {{ $data->salario }} </p>
            <p>Fecha de publicación: {{ $data->fechaPublicacion }} </p>
            <p>Estado de la oferta: {{ $data->estadoOferta }} </p>
            <p>Número de inscrios: {{ $data->numeroInscritos }} </p>

            @if ($estaInscrito) 
                <button type="button" class="btn btn-danger"><a href="{{ url('añadirInscripcion/'.$data->id) }}">Cancelar inscripción</a></button>
            @else
                <button type="button" class="btn btn-primary"><a href="{{ url('añadirInscripcion/'.$data->id) }}">Inscribirse</a></button>
            @endif
        @endforeach
    </div>  

@stop