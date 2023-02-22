<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEditarCliente extends Controller
{
   
    public function index()
    {
        
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
        return view('Cliente.perfilC');
    }

    
    public function update(Request $request, $id)
    {
        
    }

    public function muestra($id)
    {
        $consultaId= DB::table('tb_usuarios')->where('id_usu',$id_usu)->first();
        return view('Cliente.perfilC', compact('consultaId'));
    }

    
    public function destroy($id)
    {
        
    }
}
