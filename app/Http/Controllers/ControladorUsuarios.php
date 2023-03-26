<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorUsuarios;
use App\Http\Requests\ValidadorEditarUsuario;
use App\Http\Requests\ValidadorContra;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;


use DB;
use Carbon\Carbon;

class ControladorUsuarios extends Controller
{
   
    public function index(Request $request)
    {
        $busqueda_nombre=$request->busqueda_nombre;
        $busqueda_rol=$request->busqueda_rol;
        $reporte ="";
       
        $ConsultaDep = DB::table('tb_departamentos')->get();
        $ConsultaRol = DB::table('tb_roles')->get();
        $ConsultaUsu= DB::table('users')->select('users.id as id','users.name as name','users.Ape_pat as Ape_pat','users.Ape_mat as Ape_mat','users.email as email','tb_departamentos.id_dep as id_dep','tb_roles.id_rol as id_rol ','tb_roles.Nombre as Roles','tb_departamentos.Nombre as Departamentos','users.id_rol as Rol ','users.id_dep as dep ' ,DB::raw('CONCAT(name ," ",Ape_pat," " ,Ape_mat) as nombre'))
        ->join('tb_roles','users.id_rol','=','tb_roles.id_rol')
        ->join('tb_departamentos','users.id_dep','=','tb_departamentos.id_dep')
        ->where('users.name','LIKE','%'.$busqueda_nombre.'%')
        ->where('tb_roles.Nombre','LIKE','%'.$busqueda_rol.'%')->get();

        if(isset($_GET['reporte'])){
            $pdf = PDF::loadView('jefe.reporteUsuarios', compact('ConsultaUsu'));
  
  
          return $pdf->download('Usuarios.reporte');

          }else{
        
        
        return view('Jefe.mostrarUsuarios',compact('ConsultaUsu','ConsultaDep','ConsultaRol'))->with('busqueda_nombre',$busqueda_nombre)->with('busqueda_rol',$busqueda_rol);
          }
    }


    
    public function create()
    {
        
        return view('Jefe.agregarUsuario');
    }

    
    public function store(ValidadorUsuarios $request)
    
    {
        $rol = $request->txtRol;
        $departamento = $request->txtDepartamento;
        if($rol<=2){
           if($departamento ==1){
            DB::table('users')->insert([
                "name"=> $request->input('txtNombre'),
                "Ape_pat"=> $request->input('txtApe_pat'),
                "Ape_mat"=> $request->input('txtApe_mat'),
                
                "email"=> $request->input('txtEmail'),
                "password"=> Hash::make($request->input('txtPassword')),
                "id_dep"=> $request->input('txtDepartamento'),
                "id_rol"=> $request->input('txtRol'),
                "created_at"=> Carbon::now(),
                "updated_at"=> Carbon::now()
            ]);
            $nom = $request->input('txtNombre');
    
            return redirect('usuario')->with('confirmacion','abc')->with('txtNombre', $nom);
        }else{

            return redirect('usuario')->with('error','abc');
            
        }

           
    }else{
        
            DB::table('users')->insert([
                "name"=> $request->input('txtNombre'),
                "Ape_pat"=> $request->input('txtApe_pat'),
                "Ape_mat"=> $request->input('txtApe_mat'),
                
                "email"=> $request->input('txtEmail'),
                "password"=> Hash::make($request->input('txtPassword')),
                "id_dep"=> $request->input('txtDepartamento'),
                "id_rol"=> $request->input('txtRol'),
                "created_at"=> Carbon::now(),
                "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtNombre');

        return redirect('usuario')->with('confirmacion','abc')->with('txtNombre', $nom);
        
    }
        
    
            
}

    
    public function show($id)
    {
        $consultaId= DB::table('tb_usuarios')->where('id_usu',$id)->first();
        return view('Jefe.eliminarUsuario', compact('consultaId'));
    }

    
    public function edit($id)
    {
        $consultaId= DB::table('users')->where('id',$id)->first();
        $ConsultaRol = DB::table('tb_roles')->get();
        $ConsultaDep= DB::table('tb_departamentos')->get();    


        return view('Jefe.editarUsuario', compact('consultaId','ConsultaRol','ConsultaDep'));
    }

  
    public function update(ValidadorEditarUsuario $request, $id)

    {
        
        $rol = $request->txtRol;
        $departamento = $request->txtDepartamento;
        if($rol<=2){
           if($departamento ==1){
            DB::table('users')->where('id', $id)->update([
                "name"=> $request->input('txtNombre'),
                "Ape_pat"=> $request->input('txtApe_pat'),
                "Ape_mat"=> $request->input('txtApe_mat'),
               
                "email"=> $request->input('txtEmail'),
                
                "id_dep"=> $request->input('txtDepartamento'),
                "id_rol"=> $request->input('txtRol'),
                
                "updated_at"=> Carbon::now()
            ]);
            $nom = $request->input('txtNombre');
    
            return redirect('usuario')->with('Actualizado','abc')->with('txtNombre', $nom);
        }else{

            return redirect('usuario')->with('errorr','abc');
            
        }

           
    }else{
        
        DB::table('users')->where('id', $id)->update([
                "name"=> $request->input('txtNombre'),
                "Ape_pat"=> $request->input('txtApe_pat'),
                "Ape_mat"=> $request->input('txtApe_mat'),
                
                "email"=> $request->input('txtEmail'),
                
                "id_dep"=> $request->input('txtDepartamento'),
                "id_rol"=> $request->input('txtRol'),
                
                "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtNombre');

        return redirect('usuario')->with('confirmacion','abc')->with('txtNombre', $nom);
        
    }
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('usuario')->with('Eliminado','abc');
    }

    public function editar(ValidadorContra $request, $id){
        DB::table('users')->where('id', $id)->update([
            "password"=> Hash::make($request->input('txtPassword')),
            
            
            "updated_at"=> Carbon::now()
        ]);
        return redirect('usuario')->with('contrasena','abc');
    }
}
