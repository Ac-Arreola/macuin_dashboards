<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLogin;
use Illuminate\Support\Facades\Auth;

use DB;
use Carbon\Carbon;

class ControladorLogin extends Controller
{


        
   public function login(){
    return view('login');
   }
    
    public function loginVerify(ValidadorLogin $request)
    {
       
            $credenciales = $request->only('email','password');
            if(Auth::attempt($credenciales)){
                $request->session()->regenerate();

                if((Auth::user()->id_rol)==1){
                  return view('Jefe.mainJ');

                  }if((Auth::user()->id_rol)==2){
                    return view('Auxiliar.mainA');

                    }if((Auth::user()->id_rol)==3){
                    return view('Cliente.mainC');
                    }
                    
                }else{

             
             return view('login');
            }

    
  }

    public function showinicio(){ 
        return view ('Cliente.mainC');
      }

      public function serrarsecion(){ 
        Auth::logout();
        return view ('login');
      }
  
    
}
