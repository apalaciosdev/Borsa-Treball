<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresasController extends Controller
{
    public function register()
    {
        return view('empresas.registro');
    }

    public function index()
    {
        // DB::table('empresas')->insert(['nombre' => 'kayla@example.com','direccion' => 'kayla@example.com','localidad' => 'kayla@example.com','provincia' => 'kayla@example.com','telefono' => 123456789,'url' => 'kayla@example.com','email' => 'kayla@example.com','password' => 'kayla@example.com']);
        $empresa = DB::table('empresas')->get();

        return view('empresas.detalle',['empresa' => $empresa]);
    }
}
