<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\InscripcionesController;

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

// Inicio
// Si no ponemos nada en la url nos manda al controlador 'LoginController' a la funcion index
Route::get('/', [LoginController::class, 'index'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/login', [LoginController::class, 'auth']);


// USUARIO
Route::get('/user', [UsuariosController::class,'index'])->name('indiceUsuarios');

Route::get('/user/register', [UsuariosController::class,'register'])->name('registrarUsuarios');

Route::post('/user/añadirUsuario', [UsuariosController::class,'saveUser'])->name('añadirUsuario');

Route::post('/user/userUpdate', [UsuariosController::class, 'update']);

Route::get('/user/oferta/{id}', [UsuariosController::class,'showOffer'])->name('mostrarOfertaUsu');
// Para incribirte a la oferta
Route::get('/añadirInscripcion/{id}', [InscripcionesController::class,'addInscription'])->name('añadirInscripcion');


// EMPRESA
Route::get('/empresas', [EmpresasController::class,'index'])->name('indiceEmpresas');

Route::get('/empresas/register', [EmpresasController::class,'register'])->name('registrarEmpresas');

Route::post('/empresas/añadirEmpresa', [EmpresasController::class,'añadirEmpresa']);

Route::post('/empresas', [EmpresasController::class, 'modificarEmpresa']);

Route::get('/empresas/oferta/show/{id}', [EmpresasController::class,'showOffer'])->name('mostrarOfertaEmp');

Route::get('/empresas/oferta/create', [EmpresasController::class,'createOffer'])->name('crearOferta');

Route::post('/empresas/oferta/create', [EmpresasController::class,'crearOferta']);

// other 
Route::get('/insertPruebas', [EmpresasController::class, 'insertPruebas']);

