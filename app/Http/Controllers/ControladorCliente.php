<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorEditarC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use DB;
use Carbon\Carbon;

class ControladorCliente extends Controller
{
    
    public function index()
    {
        $ConsultaCla= DB::table('tb_clasificacion')->get();
        

        return view('Cliente.perfilC',compact('ConsultaCla'));
    }

    public function ver()
    {
        $ConsultaCla= DB::table('tb_clasificacion')->get();
        

        return view('Cliente.modalAgregarT',compact('ConsultaCla'));
    }



    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        
    }

    //Edita su propio perfil (cliente)
    public function update(ValidadorEditarC $request)
    {
        DB::table('users')->where('id', Auth::user()->id)->update([
            "name"=> $request->input('txtNombre'),
            "Ape_pat"=> $request->input('txtApe_pat'),
            "Ape_mat"=> $request->input('txtApe_mat'),
            "email"=> $request->input('txtEmail'),

            "updated_at"=> Carbon::now()
        ]);
        
        $ConsultaCla= DB::table('tb_clasificacion')->get();
        

        return redirect('cliente/muestra')->with('Actualizado','abc');
    }

    
    public function destroy($id)
    {
        
    }
}
