<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller {
  public function login(){
    if(true){  //TODO: Si el usuario no está registrado, entonces retornar la vista de login
      return view('auth.usuarios.login');
    }
    
    else{ //TODO: Si lo está, retornar la vista de la página inicial de usuarios
      return view('auth.usuarios.login');
    }
  }
  
  public function register(){
    return view('auth.usuarios.register');
  }
}
