<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorDefinirAux;
use DB;
use Carbon\Carbon;

class controladorTicketsJ extends Controller
{
   
    public function index(Request $request)
    {
        $busqueda=$request->busqueda;
        //$consultaId= DB::table('tb_tauxiliar')->get();
        $ConsultaUsu = DB::table('users')->where('id_rol',2)->where('name','LIKE','%'.$busqueda.'%')->get();
       $consultaId = DB::table('tb_tclientes')
       ->select('tb_tauxiliar.id_taux as Id', 'tb_departamentos.Nombre as Dpto', 'tb_clasificacion.Nombre as Clasif', 'tb__status.Nombre as Status','tb_tauxiliar.Comentarios_cli as Comentarios_cli')
       ->join('tb_tauxiliar','tb_tclientes.id_tcli','=','tb_tauxiliar.id_tcli')
       ->join('tb_departamentos','tb_tclientes.id_dep','=','tb_departamentos.id_dep')
       ->join('tb_clasificacion','tb_tclientes.id_cla','=','tb_clasificacion.id_cla')
       ->join('tb__status','tb_tclientes.id_sta','=','tb__status.id_sta')
       ->get();
    

        return view('Jefe.Tickets_Asignados',compact('ConsultaUsu','consultaId'));
    }

    public function mostrar(Request $request)
    {
        $ConsultaUsu = DB::table('users')->where('id_rol',2)->get();
        $busqueda=$request->busqueda;
        $Consultat= DB::table('tb_tclientes')->where('id_sta',1)->join('tb_clasificacion' , 'tb_tclientes.id_cla','tb_clasificacion.id_cla')->join('tb_departamentos','tb_tclientes.id_dep','tb_departamentos.id_dep')->where('tb_clasificacion.Nombre','LIKE','%'.$busqueda.'%')->get();
        
        
        
        foreach ($Consultat as $ticket) {
           
            $ticket->Departamento=  DB::table('tb_departamentos')->where('id_dep', $ticket->id_dep)->first();
            $ticket->Clasificacion=  DB::table('tb_clasificacion')->where('id_cla', $ticket->id_cla)->first();
            $ticket->Status=  DB::table('tb__status')->where('id_sta', $ticket->id_sta)->first();
            $ticket->Usuario=  DB::table('users')->where('id', $ticket->id_usu)->first();
           
        }
        return view('Jefe.Tickets',compact('Consultat','ConsultaUsu'));
    }

    public function ticket($id)
    {
        
        $consultaId= DB::table('tb_tauxiliar')->where('id_aux',$id)->first();
       
        
        return view('Jefe.modalConsultarTickets', compact('consultaId'));
    }
   
   
    public function create()
    {
        //
    }


    public function store(ValidadorDefinirAux $request)
    {
        
    }

   
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $ConsultaUsu = DB::table('users')->where('id_rol',2)->get();
        $consultaId= DB::table('tb_tclientes')->where('id_tcli',$id)->first();
       
        
        return view('Jefe.modalDefinirE', compact('consultaId','ConsultaUsu'));
    }

    
    public function update(Request $request, $id)
    {
        DB::table('tb_tauxiliar')->insert([
            "id_usu"=> $request->input('txtAuxiliar'),
            "id_tcli"=> $request->input('txttcli'),
            "Comentarios_cli"=> $request->input('txtObservaciones'),
            "Fecha"=> $request->input('txtFecha'),


            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
            DB::table('tb_tclientes')->where('id_tcli', $id)->update([
                "id_sta"=>2,
                "updated_at"=> Carbon::now()

        ]);
        return redirect('Tickets_A')->with('con', 'abc');
    }

    
    public function destroy($id)
    {
        //
    }
}
