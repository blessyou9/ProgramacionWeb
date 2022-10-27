<?php

use App\Http\Controllers\ControladorPaginas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/principal', [ControladorPaginas::class, 'Fprincipal'])->name('Nprincipal');
Route::get('/formulario', [ControladorPaginas::class, 'Fformulario'])->name('Nformulario');
Route::get('/tabla', [ControladorPaginas::class, 'Ftabla'])->name('Ntabla');
Route::get('/consulta', [ControladorPaginas::class, 'Fconsulta'])->name('Nconsulta');

//mandar datos->post al form
Route::post('/guardarRecuerdos', [ControladorPaginas::class, 'FprocesarRecuerdos'])->name('Nprocesar');

