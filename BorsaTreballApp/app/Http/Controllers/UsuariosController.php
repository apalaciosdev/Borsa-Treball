<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Oferta;


class UsuariosController extends Controller
{
  public function register()
  {
    return view('usuarios.register');
  }

  public function index()
  {
    $usuario = Usuario::where('email','=', session('id'))->first();
    $oferta = Oferta::all();
    return view('usuarios.index',['usuario'=>$usuario, 'oferta' => $oferta]);
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
