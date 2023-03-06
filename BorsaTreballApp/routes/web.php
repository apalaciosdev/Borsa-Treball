<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('user/register', function () {
    return view('welcome');
});

Route::get('empresa/register', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('auth.usuario.login');
});

Route::get('/user/oferta/{id}', function () {
    return view('welcome');
});

Route::get('/empresa', function () {
    return view('welcome');
});

Route::get('/empresa/oferta/create', function () {
    return view('welcome');
});

Route::get('/empresa/oferta/{id}', function () {
    return view('welcome');
});

