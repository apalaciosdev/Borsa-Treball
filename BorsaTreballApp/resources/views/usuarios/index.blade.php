@extends('layouts.master')

@section('content')

    @include('partials.navbar')
    <div class="container">
        {{-- Detalle de empresa --}}
        <div class="row mt-3">
            <div class="col-12 card">
                <div class="card-body">
                    <form  class="row" method="POST" action="{{ url('/user/userUpdate') }}">
                        <input type="hidden" name="lastEmail" value='{{ $usuario->email }}'>
                        @csrf
                        <div class="col-4 mb-3">
                            <label for="nombre" class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value={{ $usuario->nombre }} readonly >
                        </div>
                        <div class="col-6 mb-3">
                            <label for="apellidos" class="form-label">Apellidos </label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos"
                                value={{ $usuario->apellidos }} readonly >
                        </div>
                        <div class="col-2 mb-3">
                            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"
                                value={{ $usuario->fechaNacimiento }} readonly >
                        </div>
                        <div class="col-4 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value={{ $usuario->email }} readonly >
                        </div>
                        
                        <div class="col-6 mb-3">
                            <label for="titulacion" class="form-label">Titulacion</label>
                            <input type="text" class="form-control" id="titulacion" name="titulacion"
                                value={{ $usuario->titulacion }} readonly >
                        </div>
                        <div class="col-2 mb-3">
                            <label for="cochePropio" class="form-label">Coche Propio</label>
                            <select name="cochePropio" id="cochePropio" class="form-control">
                                @if ( $usuario->cochePropio == 0)
                                <option value="1" > Si </option>
                                <option value="0" selected> No </option>
                                
                                @else
                                <option value="1" selected> Si </option>
                                <option value="0"> No </option>
                                
                            @endif
                            </select>
                            
                           
                        </div>
                        
                        <div class="col-12 mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <textarea class="form-control" id="descripcion" name="descripcion"
                                placeholder={{ $usuario->descripcion }} readonly >{{ $usuario->descripcion }} </textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="experienciaLaboral" class="form-label">Experiencia Laboral</label>
                            <textarea class="form-control" id="experienciaLaboral" name="experienciaLaboral"
                                placeholder={{ $usuario->experienciaLaboral }} readonly >{{ $usuario->experienciaLaboral }}</textarea>
                        </div>
                        <div class="col-2 offset-10">
                            <button type="button" id="editarDatos" class="btn btn-warning w-100">Editar datos</button>
                            <button type="submit" class="d-none btn btn-primary w-100">Guardar datos</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

        <div class="card-group col-12 col-md-12" style="margin-top: 50px">
            @foreach ($oferta as $o)
            <div class=" col-12 col-md-4" >
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">{{$o -> nombrePuesto}}</h4>
                        <p class="card-text">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <strong> Nombre de la Empresa :</strong>  {{$o -> nombreEmpresa}}</li>
                                <li class="list-group-item"> <strong> Localidad :</strong> {{$o -> localidadOferta}}</li>
                                <li class="list-group-item"> <strong> Salario  :</strong> {{$o -> salario}}</li>
                                <li class="list-group-item"> <strong> Fecha de Publicacion  :</strong> {{$o -> fechaPublicacion}}</li>
                                <li class="list-group-item"> <strong> Estado de la oferta  : </strong>{{$o -> estadoOferta}}</li>
                                <li class="list-group-item"> <strong> Cantidad de Inscritos :</strong> {{$o -> numeroInscritos}}</li>
                                <a class="btn btn-success w-20" href="{{url('user/oferta/'.$o -> id .'')}}"> Acceder a la Oferta </a>
                            </ul>
                        </p>
                    </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>

@stop
@section('scripts')
    <script type="text/javascript" src={{ asset('js/usuarios.js') }}></script>
@stop