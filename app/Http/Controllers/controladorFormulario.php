<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorAutor;
use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class controladorFormulario extends Controller
{

    public function showPrincipalC(){
        return view('Cliente.mainC');
    }
    public function showPrincipalA(){
        return view('Auxiliar.mainA');
    }
    public function showPrincipalJ(){
        return view('Jefe.mainJ');
    }

   

   

}

