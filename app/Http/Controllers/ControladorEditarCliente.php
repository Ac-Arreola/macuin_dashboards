<?php

namespace App\Http\Controllers;
use App\Http\Requests\ValidadorSolicitudT;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;


class ControladorEditarCliente extends Controller
{
   
    public function index(Request $request)
    {
        $busqueda=$request->busqueda;
        $Consultat= DB::table('tb_tclientes')->where('id_usu',Auth::user()->id)->join('tb_clasificacion' , 'tb_tclientes.id_cla','tb_clasificacion.id_cla')->where('tb_clasificacion.Nombre','LIKE','%'.$busqueda.'%')->get();
        
        
        
        foreach ($Consultat as $ticket) {
           
            $ticket->Clasificacion=  DB::table('tb_clasificacion')->where('id_cla', $ticket->id_cla)->first();
            $ticket->Status=  DB::table('tb__status')->where('id_sta', $ticket->id_sta)->first();
           
           
        }
        return view('Cliente.mostrarTickets',compact('Consultat'));
    }

    
    public function create()
    {
        return view('Cliente.modalAgregarT');
    }

    
    public function store(ValidadorSolicitudT $request)
    {
        DB::table('tb_tclientes')->insert([
            "id_usu"=> $request->input('txtNombre'),
            "id_cla"=> $request->input('txtClasificacion'),
            "Comentarios"=> $request->input('txtDetalle'),
            "Fecha"=> $request->input('txtFecha'),
            "id_sta"=> $request->input('txtStatus'),
            
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()

        ]);
        $nom = $request->input('txtNombre');

        return redirect('cliente')->with('confirmacion','abc')->with('txtNombre', $nom);
    }

   
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        foreach ($Consultat as $ticket) {
           
            $ticket->Clasificacion=  DB::table('tb_clasificacion')->where('id_cla', $ticket->id_cla)->first();
            $ticket->Status=  DB::table('tb__status')->where('id_sta', $ticket->id_sta)->first();
           
        }
       
        return view('Cliente.perfilC',compact('Consultat'));
    }

    public function cancelar($id)
    {
        foreach ($Consultat as $ticket) {
           
            $ticket->Clasificacion=  DB::table('tb_clasificacion')->where('id_cla', $ticket->id_cla)->first();
            $ticket->Status=  DB::table('tb__status')->where('id_sta', $ticket->id_sta)->first();
           
        }
        return view('Cliente.modalCancelar',compact('Consultat'));
    }


    
    
    public function update(Request $request, $id)
    {
        DB::table('tb_tclientes')->where('id_tcli', $id)->update([
            "id_sta"=> $request->input('txtStatus'),
            
            
            
            "updated_at"=> Carbon::now()
        ]);
        
        
        

        return redirect('cliente')->with('Cancelado','abc');
    }

    public function muestra()
    {
        $Consultat= DB::table('tb_tclientes')->where('id_usu',Auth::user()->id)->get();
        $ConsultaDep= DB::table('tb_departamentos')->get();
        $ConsultaCla= DB::table('tb_clasificacion')->get();
        
        foreach ($Consultat as $ticket) {
           
            $ticket->Clasificacion=  DB::table('tb_clasificacion')->where('id_cla', $ticket->id_cla)->first();
            $ticket->Status=  DB::table('tb__status')->where('id_sta', $ticket->id_sta)->first();
           
        }
        return view('Cliente.perfilC',compact('ConsultaCla','ConsultaDep','Consultat'));
    }

    
    public function destroy($id)
    {
        
    }
}
