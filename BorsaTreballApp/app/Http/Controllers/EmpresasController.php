<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Oferta;
use Illuminate\Http\Request;

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
        $nombreEmp = Empresa::select('nombre')->where('email', '=', session('id'))->first();
        return view('empresas.createOffer', ['nombreEmp' => $nombreEmp]);
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

    public function añadirEmpresa(Request $request)
    {
        try {
            $empresa = new Empresa;
            $empresa->nombre = $request->get('nomEmp');
            $empresa->direccion = $request->get('dirEmp');
            $empresa->localidad = $request->get('localidad');
            $empresa->provincia = $request->get('provincia');
            $empresa->telefono = $request->get('telf');
            $empresa->url = $request->get('pagCor');
            $empresa->email = $request->get('email');
            $empresa->password = $request->get('pass');
    
            $empresa->save(); //Guardamos los cambios
        } catch (\Exception $e) {
            echo "Error<br>";
            echo $e->getMessage();   // insert query
        }

        // Usuario::create($request->all());
        // return view('usuarios.register');
    }

    public function crearOferta(Request $request)
    {
        try {
            $oferta = new Oferta;
            $oferta->nombreEmpresa = $request->get('nomEmp');
            $oferta->nombrePuesto = $request->get('nomPue');
            $oferta->localidadOferta = $request->get('localidad');
            $oferta->descripcion = $request->get('descr');
            $oferta->salario = $request->get('salario');
    
            $oferta->save(); //Guardamos los cambios
        } catch (\Exception $e) {
            echo "Error<br>";
            echo $e->getMessage();   // insert query
        }

        // Usuario::create($request->all());
        // return view('usuarios.register');
    }
}
