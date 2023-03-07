<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\EmpresasController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        if (DB::table('usuarios')->where([['email', '=', $email],['password', '=', $passwd]])->count() > 0) {
            session(['rol' => 'usuario']);
            return to_route('indiceUsuarios');
        } else if (DB::table('empresas')->where([['email', '=', $email], ['password', '=', $passwd]])->count() > 0) {
            session(['rol' => 'empresa']);
            return to_route('indiceEmpresas');
        } else {
            return $email . ': ' . $passwd;
            // return to_route('login');
        }
    }
}
