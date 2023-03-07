<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresasController extends Controller
{
    public function register()
    {
        return view('empresas.register');
    }

    public function index()
    {
        // DB::table('empresas')->insert(['nombre' => 'kayla@example.com','direccion' => 'kayla@example.com','localidad' => 'kayla@example.com','provincia' => 'kayla@example.com','telefono' => 123456789,'url' => 'kayla@example.com','email' => 'kayla@example.com','password' => 'kayla@example.com']);
        // $empresa = DB::table('empresas')->get()->where('email', '=', $email);
        return "Índice de las empresas";
        // return view('empresas.detalle', ['empresa' => $empresa]);
    }

    public function createOffer()
    {
        return view('empresas.create');
    }

    public function showOffer($id)
    {
        return view('empresas.show', ['id' => $id]);
    }

    public function insertPruebas() {
        // DB::table('empresas')->insert(['nombre' => 'Kayla','direccion' => 'dirección','localidad' => 'localidad','provincia' => 'provincia','telefono' => 612345678,'url' => 'url.com','email' => 'hola','password' => 'hola']);
        // DB::table('usuarios')->insert(['nombre' => 'Kayle','apellidos' => 'apellidos','descripcion' => 'descripcion','email' => 'mundo','password' => 'mundo', 'fechaNacimiento' => '1992-01-26', 'titulacion' => 'titulacion', 'cochePropio' => 1, 'experienciaLaboral' => 'experiencia laboral']);
    }
}
