<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorAutor;
use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class controladorFormulario extends Controller
{

    public function showPrincipalC(){
        return view('mainC');
    }
    public function showPrincipalA(){
        return view('mainA');
    }
    public function showPrincipalJ(){
        return view('mainJ');
    }

   

   

}

