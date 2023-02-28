<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorEditarA;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use DB;
use Carbon\Carbon;

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

   
    public function update(ValidadorEditarA $request)
    {
        DB::table('users')->where('id', Auth::user()->id)->update([
            "name"=> $request->input('txtNombre'),
            "Ape_pat"=> $request->input('txtApe_pat'),
            "Ape_mat"=> $request->input('txtApe_mat'),
            
            
            "password"=> Hash::make($request->input('txtPassword')),
            
            
            "updated_at"=> Carbon::now()
        ]);
        
        $ConsultaCla= DB::table('tb_clasificacion')->get();
        

        return redirect('auxiliar/muestra')->with('Editado','abc');
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
