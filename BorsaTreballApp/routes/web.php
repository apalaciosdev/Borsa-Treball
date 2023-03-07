<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\EmpresasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login');
// Route::get('/', [UsuariosController::class,'login'])->name('paginaPrincipal');

Route::post('/login', [LoginController::class, 'auth']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('user/register', function () {
//     return view('auth.usuario.register');
// });
Route::get('/user/register', [UsuariosController::class,'register'])->name('registrarUsuarios');
Route::post('/user/añadirUsuario', [UsuariosController::class,'saveUser'])->name('añadirUsuario');

// Route::get('empresa/register', function () {
//     return view('welcome');
// });
Route::get('/empresas/register', [EmpresasController::class,'register'])->name('registrarEmpresas');
Route::post('/empresas/añadirEmpresa', [EmpresasController::class,'añadirEmpresa']);

// Route::get('/user', function () {
//     return view('auth.usuario.login');
// });
Route::get('/user', [UsuariosController::class,'index'])->name('indiceUsuarios');

// Route::get('/user/oferta/{id}', function () {
//     return view('welcome');
// });
Route::get('/user/oferta/{id}', [UsuariosController::class,'showOffer'])->name('mostrarOfertaUsu');

// Route::get('/empresa', function () {
//     return view('welcome');
// });
Route::get('/empresas', [EmpresasController::class,'index'])->name('indiceEmpresas');


// Route::get('/empresa/oferta/create', function () {
//     return view('welcome');
// });
Route::get('/empresas/oferta/create', [EmpresasController::class,'createOffer'])->name('crearOferta');
Route::post('/empresas/oferta/create', [EmpresasController::class,'crearOferta']);

// Route::get('/empresa/oferta/{id}', function () {
//     return view('welcome');
// });
Route::get('/empresa/oferta/{id}', [EmpresasController::class,'showOffer'])->name('mostrarOfertaEmp');

Route::get('/insertPruebas', [EmpresasController::class, 'insertPruebas']);