<?php

namespace App\Http\Controllers;

use App\Models\Empresa;

class EmpresasController extends Controller
{
    public function register()
    {
        return view('empresas.register');
    }

    public function index()
    {   
        $empresa = Empresa::where('email', '=', session('id'))->first();
        return view('empresas.index', ['empresa' => $empresa]);
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
        $empresa = new Empresa;
        
        $empresa->nombre = 'Kayla';
        $empresa->direccion = 'dirección';
        $empresa->localidad = 'localidad';
        $empresa->provincia = 'provincia';
        $empresa->telefono = 612345678;
        $empresa->url = 'http.//www.url.com';
        $empresa->email = 'empresa2@example.com';
        $empresa->password = 'empresa2';

        $empresa->save();

        return to_route('login');
    }
}
