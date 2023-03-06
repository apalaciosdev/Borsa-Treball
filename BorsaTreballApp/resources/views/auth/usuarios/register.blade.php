@extends('layouts.master')

@section('content')
  
<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Nuevo Usuario
          </div>
          <div class="card-body" style="padding:30px">
 
             {{-- TODO: Abrir el formulario e indicar el método POST --}}
 
             {{-- TODO: Protección contra CSRF --}}
 
             <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
             </div>
 
             <div class="form-group">
                {{-- TODO: Completa el input para el año --}}
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control">
             </div>
 
            <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
             </div>
 
             <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
             </div>

             
             <div class="form-group">
                {{-- TODO: Completa el input para el año --}}
                <label for="fechaNacimiento">Fecha de nacimiento</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
             </div>

             <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
                <label for="titulacion">Titulacion </label>
                <input type="text" name="titulacion" id="titulacion" class="form-control">
             </div>
 
             <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
                <label for="coche">Coche Propio </label>
                <select name="coche" id="coche" class="form-control">
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
             </div>

             
             <div class="form-group">
                <label for="experiencia">Experiencia Laboral</label>
                <textarea name="experiencia" id="experiencia" class="form-control" rows="3"></textarea>
             </div>
             <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
                <label for="pass">Password </label>
                <input type="password" name="pass" id="pass" class="form-control">
             </div>
             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Crear Nuevo Usuario
                </button>
             </div>

 
             {{-- TODO: Cerrar formulario --}}
 
          </div>
       </div>
    </div>
 </div>

@stop