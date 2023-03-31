<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEditarAuxiliar extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        DB::table('users')->update([
            "name"=> $request->input('txtNombre'),
            "Ape_pat"=> $request->input('txtApe_pat'),
            "Ape_mat"=> $request->input('txtApe_mat'),
            
            
            "password"=> Hash::make($request->input('txtPassword')),
            
            
            "updated_at"=> Carbon::now()
        ]);
        
        
        

        return redirect('auxiliar/muestra')->with('Actualizado','abc');
    }

   
    public function destroy($id)
    {
        //
    }

    public function muestra()
    {
        $Consultat= DB::table('tb_tclientes')->get();
        $ConsultaDep= DB::table('tb_departamentos')->get();
        $ConsultaCla= DB::table('tb_clasificacion')->get();
        
        foreach ($Consultat as $ticket) {
           
            $ticket->Clasificacion=  DB::table('tb_clasificacion')->where('id_cla', $ticket->id_cla)->first();
            $ticket->Status=  DB::table('tb__status')->where('id_sta', $ticket->id_sta)->first();
           
        }
        return view('Auxiliar.perfilA',compact('ConsultaCla','ConsultaDep','Consultat'));
    }

}
