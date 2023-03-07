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

        if (DB::table('usuarios')->where([['email', '=', $email],['password', '=', $passwd]])->count() > 0) {
            return to_route('indiceUsuarios');
        } else if (DB::table('empresas')->where([['email', '=', $email], ['password', '=', $passwd]])->count() > 0) {
            // return redirect()->action([EmpresasController::class, 'index'], ['email' => $email]);
            return to_route('indiceEmpresas'); // , ['email' => $email]
        } else {
            return $email . ': ' . $passwd;
            // return to_route('login');
        }
    }
}
