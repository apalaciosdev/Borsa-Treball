<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
  public function login()
  {
    if (true) {  //TODO: Si el usuario no está registrado, entonces retornar la vista de login
      return view('auth.usuarios.login');
    } else { //TODO: Si lo está, retornar la vista de la página inicial de usuarios
      return view('auth.usuarios.login');
    }
  }

  public function register()
  {
    return view('usuarios.register');
  }

  public function index()
  {
    return "Índice de usuarios";
  }

  public function saveUser(Request $request)
  {
    try{
      $usuario = new Usuario([
        'nombre' => $request->get('nombre'),
        'apellidos' => $request->get('apellidos'),
        'descripcion' => $request->get('descripcion'),
        'email' => $request->get('email'),
        'password' => $request->get('password'),
        'fechaNacimiento' => $request->get('fechaNacimiento'),
        'titulacion' => $request->get('titulacion'),
        'cochePropio' => $request->get('cochePropio'),
        'experienciaLaboral' => $request->get('experienciaLaboral')
      ]);
      $usuario->save();
      
      session(['id' => $usuario->email]);
      session(['rol' => 'usuario']);

      return to_route('indiceUsuarios');
    }
    catch(\Exception $e){
      return to_route('login'); //TODO: decidir a donde retorna en caso que haya error al guardar el usuario
      // return response()->json(['message' => $e->getMessage(), 500]); 
    }
  }
}
