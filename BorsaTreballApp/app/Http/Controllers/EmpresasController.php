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
        // Si no hay sesión iniciada, nos envía al login
        if (session('id') == NULL) {
            return to_route('login');
        }

        // Recogemos la empresa que ha iniciado la sesión y las ofertas que tiene
        // y las pasamos como parámetro
        $empresa = Empresa::where('email', '=', session('id'))->first();
        $ofertas = Oferta::where('nombreEmpresa', '=', $empresa->nombre)->get();
        return view('empresas.index', ['empresa' => $empresa, 'ofertas' => $ofertas]);
    }

    public function createOffer()
    {
        // Si no hay sesión iniciada, nos envía al login
        if (session('id') == NULL) {
            return to_route('login');
        }

        // Recogemos las empresa que crea la oferta y la pasamos como parámetro
        $nombreEmp = Empresa::select('nombre')->where('email', '=', session('id'))->first();
        return view('empresas.createOffer', ['nombreEmp' => $nombreEmp]);
    }

    public function showOffer($id)
    {
        // Recogemos la oferta seleccionada y la pasamos como parámetro
        $oferta = Oferta::where('id', '=', $id)->first();
        return view('empresas.show', ['oferta' => $oferta]);
    }

    public function añadirEmpresa(Request $request)
    {
        try {
            // Usando el modelo creamos un nuevo registro de Empresa
            $empresa = new Empresa;

            // Asignamos los valores a cada campo del registro
            $empresa->nombre = $request->get('nomEmp');
            $empresa->direccion = $request->get('dirEmp');
            $empresa->localidad = $request->get('localidad');
            $empresa->provincia = $request->get('provincia');
            $empresa->telefono = $request->get('telf');
            $empresa->url = $request->get('pagCor');
            $empresa->email = $request->get('email');
            $empresa->password = $request->get('pass');

            //Guardamos los cambios
            $empresa->save();
        } catch (\Exception $e) {
            echo "Error<br>";
            echo $e->getMessage();
        }
    }

    public function modificarEmpresa(Request $request)
    {
        try {
            // Recogemos todos los campos del formulario excepto los especificados
            $data = $request->except('_token', 'lastEmail');

            // Por cada campo que se haya modificado se añade a un array así evitamos hacer
            // updates enteros para reducir la carga de servidor
            $array = [];
            foreach ($data as $key => $value) {
                if (trim($value) != '') {
                    $array[$key] = trim($value);
                }
            }

            // Una vez sabemos los campos cambiados, modificamos el registro de la empresa
            Empresa::where('email', $request->get('lastEmail'))->update($array);

            // Si la empresa ha cambiado su email, modificamos la sesión para que concuerde
            if (trim($request->get('email')) != '') {
                session(['id' => trim($request->get('email'))]);
            }

            // Redirigimos al índice de las empresas también
            return to_route('indiceEmpresas');
        } catch (\Exception $e) {
            echo "Error<br>";
            echo $e->getMessage();
        }
    }

    public function crearOferta(Request $request)
    {
        try {
            // Usamos el modelo para crear un nuevo registro
            $oferta = new Oferta;

            // Asignamos todos los valores a los campos del registro
            $oferta->nombreEmpresa = $request->get('nomEmp');
            $oferta->nombrePuesto = $request->get('nomPue');
            $oferta->localidadOferta = $request->get('localidad');
            $oferta->descripcion = $request->get('descr');
            $oferta->salario = $request->get('salario');

            //Guardamos el registro
            $oferta->save();
        } catch (\Exception $e) {
            echo "Error<br>";
            echo $e->getMessage();
        }
    }
}
