<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorUsuarios;
use Illuminate\Support\Facades\Hash;


use DB;
use Carbon\Carbon;

class ControladorUsuarios extends Controller
{
   
    public function index(Request $request)
    {
        $busqueda=$request->busqueda;
       
        $ConsultaDep = DB::table('tb_departamentos')->get();
        $ConsultaRol = DB::table('tb_roles')->get();
        $ConsultaUsu= DB::table('users')->where('name','LIKE','%'.$busqueda.'%')->get();
        foreach ($ConsultaUsu as $usuario) {
           
            $usuario->roles=  DB::table('tb_roles')->where('id_rol', $usuario->id_rol)->first();
            $usuario->departamento=  DB::table('tb_departamentos')->where('id_dep', $usuario->id_dep)->first();
        }
        
        return view('Jefe.mostrarUsuarios',compact('ConsultaUsu','ConsultaDep','ConsultaRol'));
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

  
    public function update(ValidadorUsuarios $request, $id)

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
                "password"=> Hash::make($request->input('txtPassword')),
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
                "password"=> Hash::make($request->input('txtPassword')),
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
}
