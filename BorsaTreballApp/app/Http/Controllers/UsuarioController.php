<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller {
  public function auth(){
    return view('auth.usuarios.login');
  }
}
