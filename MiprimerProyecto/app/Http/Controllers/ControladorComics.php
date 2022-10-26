<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorComics extends Controller
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

    public function Fconsulta(Request $req){      
            
        if(request()->filled('txtTitulo') and request()->filled('txtEdicion') and request()->filled('txtDescripcion')){
            echo 'El Comic se ha guardado con exito'."<br></br>";
           
            echo 'Se lleno el titulo:'.request()->input('txtTitulo')."<br>";
            echo 'Se lleno la edición:'.request()->input('txtEdicion')."<br>";
            echo 'Se lleno la edición:'.request()->input('txtDescripcion')."<br>";
        }else{
            return 'Error. No se lleno alguno de los campos requeridos.';
        } 
    }
}