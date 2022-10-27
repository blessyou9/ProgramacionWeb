<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorForm1;

class ControladorPaginas extends Controller
{
    function Fprincipal(){
        return view('principal');
    }

    function Fformulario(){
        return view('formulario');
    }

    function Ftabla(){
        return view('tabla');
    }
    
    function Fconsulta(){
        return view('consulta');
    }

    public function FprocesarRecuerdos(validadorForm1 $req){
        //return $req->all();
        return redirect('/formulario')->with('confirmacion', 'Tu recuerdo llego al controlador');
    }
}
