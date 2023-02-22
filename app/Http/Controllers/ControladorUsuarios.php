<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorUsuarios;

use DB;
use Carbon\Carbon;

class ControladorUsuarios extends Controller
{
   
    public function index()
    {
        $ConsultaDep = DB::table('tb_departamentos')->get();
        $ConsultaRol = DB::table('tb_roles')->get();
        $ConsultaUsu= DB::table('tb_usuarios')->get();
        
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
        if($departamento ==1){
           if($rol==1){
            DB::table('tb_usuarios')->insert([
                "Nombre"=> $request->input('txtNombre'),
                "Ape_pat"=> $request->input('txtApe_pat'),
                "Ape_mat"=> $request->input('txtApe_mat'),
                "Username"=> $request->input('txtUsername'),
                "Email"=> $request->input('txtEmail'),
                "Password"=> $request->input('txtPassword'),
                "id_dep"=> $request->input('txtDepartamento'),
                "id_rol"=> $request->input('txtRol'),
                "created_at"=> Carbon::now(),
                "updated_at"=> Carbon::now()
            ]);
            $nom = $request->input('txtNombre');
    
            return redirect('usuario')->with('confirmacion','abc')->with('txtNombre', $nom);

           }if($rol==2){
            DB::table('tb_usuarios')->insert([
                "Nombre"=> $request->input('txtNombre'),
                "Ape_pat"=> $request->input('txtApe_pat'),
                "Ape_mat"=> $request->input('txtApe_mat'),
                "Username"=> $request->input('txtUsername'),
                "Email"=> $request->input('txtEmail'),
                "Password"=> $request->input('txtPassword'),
                "id_dep"=> $request->input('txtDepartamento'),
                "id_rol"=> $request->input('txtRol'),
                "created_at"=> Carbon::now(),
                "updated_at"=> Carbon::now()
            ]);
            $nom = $request->input('txtNombre');
    
            return redirect('usuario')->with('confirmacion','abc')->with('txtNombre', $nom);

            
            
        }
        if($rol =="3"){

        
        DB::table('tb_usuarios')->insert([
            "Nombre"=> $request->input('txtNombre'),
            "Ape_pat"=> $request->input('txtApe_pat'),
            "Ape_mat"=> $request->input('txtApe_mat'),
            "Username"=> $request->input('txtUsername'),
            "Email"=> $request->input('txtEmail'),
            "Password"=> $request->input('txtPassword'),
            "id_dep"=> $request->input('txtDepartamento'),
            "id_rol"=> $request->input('txtRol'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtNombre');

        return redirect('usuario')->with('confirmacion','abc')->with('txtNombre', $nom);
        }
    }else{
        return redirect('usuario')->with('error','abc');
    }
        
    }

    
    public function show($id)
    {
        $consultaId= DB::table('tb_usuarios')->where('id_usu',$id)->first();
        return view('Jefe.eliminarUsuario', compact('consultaId'));
    }

    
    public function edit($id)
    {
        $consultaId= DB::table('tb_usuarios')->where('id_usu',$id)->first();
        $ConsultaRol = DB::table('tb_roles')->get();
        $ConsultaDep= DB::table('tb_departamentos')->get();    


        return view('Jefe.editarUsuario', compact('consultaId','ConsultaRol','ConsultaDep'));
    }

  
    public function update(ValidadorUsuarios $request, $id)

    {
        $rol = $request->txtRol;
        $departamento = $request->txtDepartamento;
        if($departamento ==1){
           if($rol==1){
        DB::table('tb_usuarios')->where('id_usu', $id)->update([
            "Nombre"=> $request->input('txtNombre'),
            "Ape_pat"=> $request->input('txtApe_pat'),
            "Ape_mat"=> $request->input('txtApe_mat'),
            "Username"=> $request->input('txtUsername'),
            "Email"=> $request->input('txtEmail'),
            "Password"=> $request->input('txtPassword'),
            "id_dep"=> $request->input('txtDepartamento'),
            "id_rol"=> $request->input('txtRol'),

            "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtNombre');
        
        return redirect('usuario')->with('Actualizado','abc', $nom);
    }if($rol==2){
        DB::table('tb_usuarios')->where('id_usu', $id)->update([
            "Nombre"=> $request->input('txtNombre'),
            "Ape_pat"=> $request->input('txtApe_pat'),
            "Ape_mat"=> $request->input('txtApe_mat'),
            "Username"=> $request->input('txtUsername'),
            "Email"=> $request->input('txtEmail'),
            "Password"=> $request->input('txtPassword'),
            "id_dep"=> $request->input('txtDepartamento'),
            "id_rol"=> $request->input('txtRol'),

            "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtNombre');
        
        return redirect('usuario')->with('Actualizado','abc', $nom);
        
    }if($rol =="3"){
        DB::table('tb_usuarios')->where('id_usu', $id)->update([
            "Nombre"=> $request->input('txtNombre'),
            "Ape_pat"=> $request->input('txtApe_pat'),
            "Ape_mat"=> $request->input('txtApe_mat'),
            "Username"=> $request->input('txtUsername'),
            "Email"=> $request->input('txtEmail'),
            "Password"=> $request->input('txtPassword'),
            "id_dep"=> $request->input('txtDepartamento'),
            "id_rol"=> $request->input('txtRol'),

            "updated_at"=> Carbon::now()
        ]);
        $nom = $request->input('txtNombre');
        
        return redirect('usuario')->with('Actualizado','abc', $nom);

        }
    }else{
            
        return redirect('usuario')->with('errorr','abc');
    }

    }

    public function destroy($id)
    {
        DB::table('tb_usuarios')->where('id_usu', $id)->delete();
        return redirect('usuario')->with('Eliminado','abc');
    }
}
