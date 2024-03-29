<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorDepartamentos;
use Barryvdh\DomPDF\Facade\Pdf;

use DB;
use Carbon\Carbon;

class ControladorDepartamentos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda=$request->input('busqueda');
        $buscar = "";
        $reporte ="";
        
       
        

        $ConsultaDep= DB::table('tb_departamentos')->where('Nombre','LIKE','%'.$busqueda.'%')->get();
        
        if(isset($_GET['reporte'])){
            $pdf = PDF::loadView('jefe.reporteDepartamentos', compact('ConsultaDep'));
  
  
          return $pdf->download('departamento.reporte');

          }else{
            return view('Jefe.mostrarDepartamentos',compact('ConsultaDep'))->with('busqueda',$busqueda);

          }
      

       
        
    } 

   
   
    public function create()
    {
        return view('Jefe.agregarDepartamento');
    }

    
    public function store(ValidadorDepartamentos $request)
    {
        DB::table('tb_departamentos')->insert([
            "Nombre"=> $request->input('txtNombre'),
            "Descripcion"=> $request->input('txtDescripcion'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()

        ]);
        $nom = $request->input('txtNombre');

        return redirect('departamento')->with('confirmacion','abc')->with('txtNombre', $nom);
    }

   
    public function show($id)
    {
        $consultaId= DB::table('tb_departamentos')->where('id_dep',$id)->first();
        return view('eliminarDepartamento', compact('consultaId'));
    }

    
    public function edit($id)
    {
        $consultaId= DB::table('tb_departamentos')->where('id_dep',$id)->first();
        return view('editarDepartamento', compact('consultaId'));
    }
    

    public function update(ValidadorDepartamentos $request, $id)
    {
        DB::table('tb_departamentos')->where('id_dep', $id)->update([
            "Nombre"=> $request->input('txtNombre'),
            "Descripcion"=> $request->input('txtDescripcion'),
            "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtNombre');
        return redirect('departamento')->with('Actualizado','abc')->with('txtNombre', $nom);
    }

    
    public function destroy($id)
    {
        DB::table('tb_departamentos')->where('id_dep', $id)->delete();
            return redirect('departamento')->with('Eliminado','abc');
    }
}