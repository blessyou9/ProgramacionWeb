<?php

use App\Http\Controllers\ControladorComics;
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


Route::get('/principal', [ControladorComics::class, 'Fprincipal'])->name('Nprincipal');
Route::get('/formulario', [ControladorComics::class, 'Fformulario'])->name('Nformulario');
Route::get('/tabla', [ControladorComics::class, 'Ftabla'])->name('Ntabla');
Route::post('/consulta', [ControladorComics::class, 'Fconsulta'])->name('Nconsulta');

