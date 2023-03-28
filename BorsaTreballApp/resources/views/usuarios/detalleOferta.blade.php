@extends('layouts.master')

@section('content')

    @include('partials.navbar')
    <div class="container"> 
        @foreach ($oferta as $data)
           
        
    <div class="row mt-3">
        <div class="col-12 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 mb-3">
                        <label for="nombre" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $data->nombreEmpresa }}" readonly >
                    </div>
                    <div class="col-4 mb-3">
                        <label for="nombre" class="form-label">Lugar del puesto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $data->nombrePuesto }}" readonly >
                    </div>
                    <div class="col-4 mb-3">
                        <label for="nombre" class="form-label">Localidad</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $data->localidadOferta }}" readonly >
                    </div>
                    <div class="col-3 mb-3">
                        <label for="nombre" class="form-label">Salario</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $data->salario }}" readonly >
                    </div>
                    <div class="col-3 mb-3">
                        <label for="nombre" class="form-label">Fecha de publicación</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $data->fechaPublicacion }}" readonly >
                    </div>
                    
                    <div class="col-3 mb-3">
                        <label for="nombre" class="form-label">Estado de la oferta</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $data->estadoOferta }}" readonly >
                    </div>
                    <div class="col-3 mb-3">
                        <label for="nombre" class="form-label">Número de inscritos</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $data->numeroInscritos }}" readonly >
                    </div>
                    @if ($estaInscrito) 
                    <div class="col-6 mb-3">
                    <button type="button" class="btn btn-danger" ><a href="{{ url('añadirInscripcion/'.$data->id) }}" class="link-light text-decoration-none">Cancelar inscripción</a></button>
                    </div>
            @else
                <div class="col-6 mb-3" >
                <button type="button" class="btn btn-primary"><a href="{{ url('añadirInscripcion/'.$data->id) }}" class="link-light text-decoration-none">Inscribirse</a></button>
                </div>
            @endif
            </div>
        </div>
        </div>
    </div>
    @endforeach
</div> 
@stop