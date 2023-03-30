<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorEditarA;
use App\Http\Requests\ValidadorEstatus;
use App\Http\Requests\ValidadorComentariosAux;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

use DB;
use Carbon\Carbon;

class ControladorEditarAuxiliar extends Controller
{
    public function mostrarTnv()
    {
        
        
        $consultaId = DB::table('tb_tclientes')
       ->select('tb_tauxiliar.id_taux as Id', 'tb_tauxiliar.id_usu as IdUSU', 'tb_tauxiliar.Fecha as FECHA','tb_departamentos.Nombre as Dpto', 'tb_clasificacion.Nombre as Clasif', 'tb__status.Nombre as estatus', 'tb__status.id_sta as status','tb_tauxiliar.Comentarios_cli as Comentarios_cli','tb_tclientes.id_tcli as id')
       ->join('tb_tauxiliar','tb_tclientes.id_tcli','=','tb_tauxiliar.id_tcli')
       ->join('tb_departamentos','tb_tclientes.id_dep','=','tb_departamentos.id_dep')
       ->join('tb_clasificacion','tb_tclientes.id_cla','=','tb_clasificacion.id_cla')
       ->join('tb__status','tb_tclientes.id_sta','=','tb__status.id_sta')->where('tb_tauxiliar.id_usu',Auth::user()->id)->where('tb__status.id_sta',2)
       
       ->get();
        return view('Auxiliar.consultarTnvo',compact('consultaId')); 
    }
    public function mostrarTpf(Request $request)
    {
        $busqueda_estatus=$request->busqueda_estatus;
        $busqueda_fecha=$request->busqueda_fecha;
        $busqueda_dpto=$request->busqueda_dpto;
        $reporte ="";

        $consultaId = DB::table('tb_tclientes')
       ->select('tb_tauxiliar.id_taux as Id', 'tb_tauxiliar.id_usu as IdUSU', 'tb_tauxiliar.Comentarios as Comentarioaux', 'tb_tauxiliar.Fecha as FECHA','tb_departamentos.Nombre as Dpto', 'tb_clasificacion.Nombre as Clasif', 'tb__status.Nombre as estatus', 'tb__status.id_sta as status','tb_tauxiliar.Comentarios_cli as Comentarios_cli','tb_tclientes.id_tcli as id')
       ->join('tb_tauxiliar','tb_tclientes.id_tcli','=','tb_tauxiliar.id_tcli')
       ->join('tb_departamentos','tb_tclientes.id_dep','=','tb_departamentos.id_dep')
       ->join('tb_clasificacion','tb_tclientes.id_cla','=','tb_clasificacion.id_cla')
       ->join('tb__status','tb_tclientes.id_sta','=','tb__status.id_sta')->where('tb_tauxiliar.id_usu',Auth::user()->id)
       ->where('tb__status.Nombre','LIKE','%'.$busqueda_estatus.'%')
        ->where('tb_tclientes.Fecha','LIKE','%'.$busqueda_fecha.'%')
        ->where('tb_departamentos.Nombre','LIKE','%'.$busqueda_dpto.'%')
       ->get();
       $consultaStat = DB::table('tb__status')->get();

       if(isset($_GET['reporte'])){
        $pdf = PDF::loadView('Auxiliar.reportesTickets', compact('consultaId'));


      return $pdf->download('Tickets.reporte');

      }else{
        return view('Auxiliar.consultarTpf',compact('consultaId','consultaStat'))->with('busqueda_estatus',$busqueda_estatus)->with('busqueda_fecha', $busqueda_fecha)->with('busqueda_dpto',$busqueda_dpto); 
      }
        
    }
    
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

   
    public function update(ValidadorEditarA $request)
    {
        DB::table('users')->where('id', Auth::user()->id)->update([
            "name"=> $request->input('txtNombre'),
            "Ape_pat"=> $request->input('txtApe_pat'),
            "Ape_mat"=> $request->input('txtApe_mat'),
            "email"=> $request->input('txtEmail'),
            
            
            
            
            
            "updated_at"=> Carbon::now()
        ]);
        
        $ConsultaCla= DB::table('tb_clasificacion')->get();
        

        return redirect('auxiliar/muestra')->with('Editado','abc');
    }




   
      
    public function editar(Request $request, $id)
    {
        DB::table('tb_tclientes')->where('id_tcli', $id)->update([
            "id_sta"=>3,
            "updated_at"=> Carbon::now()

    ]);
    return redirect('auxiliar/ticketsPf')->with('con', 'abc');
    }

    public function editarEstatus(ValidadorEstatus $request, $id)
    {
        DB::table('tb_tclientes')->where('id_tcli', $id)->update([
            "id_sta"=>$request->input('txtEstatus'),
            "updated_at"=> Carbon::now()

    ]);
    return redirect('auxiliar/ticketsPf')->with('estatus', 'abc');
    }

    public function comentario(ValidadorComentariosAux $request, $id)
    {
        DB::table('tb_tauxiliar')->where('id_taux', $id)->update([
            "Comentarios"=>$request->input('txtNuevoComentario'),
            "updated_at"=> Carbon::now()

    ]);
    return redirect('auxiliar/ticketsPf')->with('comentario', 'abc');
    }

   
    public function destroy($id)
    {
        //
    }

    public function muestra()
    {
       
        return view('Auxiliar.perfilA');
    }

}
