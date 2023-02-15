<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorAutor;
use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class controladorFormulario extends Controller
{
    public function procesarFormulario(validadorFormulario $req){
        
        return redirect('registrar')
        ->with('confirmación','Llegó correctamente')
        ->with('titulo',$req->txtTitulo);

    }

    public function procesarAutor(validadorAutor $req){
        
        return redirect('registrarAutor')
        ->with('confirmación','Llegó correctamente')
        ->with('titulo',$req->txtTitulo);

    }


    public function showPrincipal(){
        return view('plantilla');
    }

    public function showRegistrar(){
        
        return view('registrar');
        
    }

    public function showRegistrarAutor(){
        
        return view('registrarAutor');
        
    }

   

}

