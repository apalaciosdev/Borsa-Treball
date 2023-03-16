<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\EmpresasController;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $email = $request->input('email');
        $passwd = $request->input('password');

        session(['id' => $email]);
   

        if (Usuario::where([['email', '=', $email],['password', '=', $passwd]])->count() > 0) {
            session(['rol' => 'usuario']);
            return to_route('indiceUsuarios');
        } else if (Empresa::where([['email', '=', $email], ['password', '=', $passwd]])->count() > 0) {
            session(['rol' => 'empresa']);
            return to_route('indiceEmpresas');
        } else {
            return to_route('login');
        }
    }


    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
