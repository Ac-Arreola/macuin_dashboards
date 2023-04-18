<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorDefinirAux;
use App\Http\Requests\ValidadorAuxiliaJ;
use App\Http\Requests\ValidadorClienteJ;
use App\Http\Requests\ValidadorContra;
use App\Http\Requests\ValidadorEditarJ;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

use DB;
use Carbon\Carbon;

class controladorTicketsJ extends Controller
{
   
    public function index(Request $request)
    {

        $busqueda=$request->busqueda;
        $busqueda_estatus=$request->busqueda_estatus;
        //$consultaId= DB::table('tb_tauxiliar')->get();
        $ConsultaUsu = DB::table('users')->where('id_rol',2)->where('name','LIKE','%'.$busqueda.'%')->get();
       $consultaId = DB::table('tb_tclientes')
       ->select('tb_tauxiliar.id_taux as Id', 'tb_tauxiliar.id_usu as IdUSU','tb_tauxiliar.Comentarios as Comentarioaux','tb_departamentos.Nombre as Dpto', 'tb_clasificacion.Nombre as Clasif', 'tb__status.Nombre as estatus','tb_tauxiliar.Comentarios_cli as Comentarios_cli')
       ->join('tb_tauxiliar','tb_tclientes.id_tcli','=','tb_tauxiliar.id_tcli')
       ->join('tb_departamentos','tb_tclientes.id_dep','=','tb_departamentos.id_dep')
       ->join('tb_clasificacion','tb_tclientes.id_cla','=','tb_clasificacion.id_cla')
       ->join('tb__status','tb_tclientes.id_sta','=','tb__status.id_sta')
       ->where('tb__status.Nombre','LIKE','%'.$busqueda_estatus.'%')
       ->get();
        
       if(isset($_GET['reporte'])){
        $pdf = PDF::loadView('jefe.reporteAuxiliares', compact('ConsultaUsu'));


      return $pdf->download('Auxiliares.reporte');

      }else{

        return view('Jefe.Tickets_Asignados',compact('ConsultaUsu','consultaId'))->with('busqueda', $busqueda);
      }
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

    public function muestra(Request $request)
    {
       
        $busqueda_estatus=$request->busqueda_estatus;
        $busqueda_fecha=$request->busqueda_fecha;
        $busqueda_dpto=$request->busqueda_dpto;

        $Consultat= DB::table('tb_tclientes')
        ->select('tb_tauxiliar.id_taux as Id', 'tb_tauxiliar.id_usu as IdUSU','tb_tauxiliar.Comentarios as Comentarioaux','tb_departamentos.Nombre as Dpto', 'tb_clasificacion.Nombre as Clasif', 'tb__status.Nombre as estatus','tb_tauxiliar.Comentarios_cli as Comentarios_cli','tb_tclientes.id_tcli as id','tb_tclientes.Fecha as FECHA','tb_tclientes.Comentarios as com','tb_tclientes.Comentarios_aux as comaux')
        ->join('tb_tauxiliar','tb_tclientes.id_tcli','=','tb_tauxiliar.id_tcli')
        ->join('tb_departamentos','tb_tclientes.id_dep','=','tb_departamentos.id_dep')
        ->join('tb_clasificacion','tb_tclientes.id_cla','=','tb_clasificacion.id_cla')
        ->join('tb__status','tb_tclientes.id_sta','=','tb__status.id_sta')
        ->where('tb__status.Nombre','LIKE','%'.$busqueda_estatus.'%')
        ->where('tb_tclientes.Fecha','LIKE','%'.$busqueda_fecha.'%')
        ->where('tb_departamentos.Nombre','LIKE','%'.$busqueda_dpto.'%')
        ->get();

        if(isset($_GET['reporte'])){
            $pdf = PDF::loadView('jefe.reportesTickets', compact('Consultat'));
  
  
          return $pdf->download('Tickets.reporte');

          }else{
        return view('Jefe.TicketsAsig',compact('Consultat'))->with('busqueda_estatus',$busqueda_estatus)->with('busqueda_fecha', $busqueda_fecha)->with('busqueda_dpto',$busqueda_dpto);

          }
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

    
    public function update(ValidadorDefinirAux $request, $id)
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
        return redirect('Tickets_B')->with('con', 'abc');
    }

    
    public function destroy($id)
    {
        //
    }

    public function comentarioaux(ValidadorAuxiliaJ $request, $id)
    {
        DB::table('tb_tauxiliar')->where('id_taux', $id)->update([
            "Comentarios_cli"=>$request->input('txtNuevoComentario'),
            "updated_at"=> Carbon::now()
            
    ]);
    return redirect('Tickets_B')->with('comentarioaux', 'abc');
    }

    public function comentariocli(ValidadorClienteJ $request, $id)
    {
        DB::table('tb_tclientes')->where('id_tcli', $id)->update([
            "Comentarios_aux"=>$request->input('txtNuevoComentario'),
            "updated_at"=> Carbon::now()

    ]);
    return redirect('Tickets_B')->with('comentariocli', 'abc');
    }


    public function editarperfil(ValidadorEditarJ $request)
    {
        
                
        if($request->hasFile('foto')){
            $file = $request->file('foto');
                $destinationPath ='img/featureds/';
                $filename = time() . '-' . $file->getClientOriginalName();
                $uploadSuccess = $request->file('foto')->move($destinationPath, $filename);
               $newPost = $destinationPath . $filename;
        
            }
        DB::table('users')->where('id', Auth::user()->id)->update([
            
                
        
            
            
            "foto"=>$newPost,
            "name"=> $request->input('txtNombre'),
            "Ape_pat"=> $request->input('txtApe_pat'),
            "Ape_mat"=> $request->input('txtApe_mat'),
            "email"=> $request->input('txtEmail'),
            
            
            
            
            
            "updated_at"=> Carbon::now()
        ]);
        
        $ConsultaCla= DB::table('tb_clasificacion')->get();
        

        return redirect('jefe/perfil')->with('Editado','abc');
    
    }
    public function perfil()
    {
       
        return view('Jefe.perfilJ');
    }

}
