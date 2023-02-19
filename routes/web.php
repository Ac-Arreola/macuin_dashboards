<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorFormulario;
use App\Http\Controllers\ControladorDepartamentos;
use App\Http\Controllers\ControladorEditarCliente;
use App\Http\Controllers\ControladorEditarAuxiliar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/

//RUTAS DEPARTAMENTOS 
//------------------------------Departamentos--------------------------------------
//Create

Route::get('departamento/create', [ControladorDepartamentos::class,'create'])->name('departamento.create');
//Store
Route::post('departamento', [ControladorDepartamentos::class,'store'])->name('departamento.store');
Route::get('departamento', [ControladorDepartamentos::class,'index'])->name('departamento.index');
//Edit
Route::get('departamento/{id}/edit', [ControladorDepartamentos::class,'edit'])->name('departamento.edit');
//Update
Route::put('departamento/{id}', [ControladorDepartamentos::class,'update'])->name('departamento.update');
//show
Route::get('departamento/{id}/show', [ControladorDepartamentos::class,'show'])->name('departamento.show');
//Destroy
Route::delete('departamento/{id}', [ControladorDepartamentos::class,'destroy'])->name('departamento.destroy');



//------------------------------Usuarios--------------------------------------
//Create

Route::get('usuario/create', [ControladorUsuarios::class,'create'])->name('usuario.create');
//Store
Route::post('usuario', [ControladorUsuarios::class,'store'])->name('usuario.store');
Route::get('usuario', [ControladorUsuarios::class,'index'])->name('usuario.index');
//Edit
Route::get('usuario/{id}/edit', [ControladorUsuarios::class,'edit'])->name('usuario.edit');
//Update
Route::put('usuario/{id}', [ControladorUsuarios::class,'update'])->name('usuario.update');
//show
Route::get('usuario/{id}/show', [ControladorUsuarios::class,'show'])->name('usuario.show');
//Destroy
Route::delete('usuario/{id}', [ControladorUsuarios::class,'destroy'])->name('usuario.destroy');


//RUTAS VISTAS MAIN

//Rutas individuales para controlador  
Route::get('/pC',[controladorFormulario::class,'showPrincipalC'])->name('apodoPrincipal1'); 
Route::get('/pA',[controladorFormulario::class,'showPrincipalA'])->name('apodoPrincipal2'); 
Route::get('/pJ',[controladorFormulario::class,'showPrincipalJ'])->name('apodoPrincipal3'); 

//RUTA LOGIN
Route::get('/', function () {
    return view('login');
});

//RUTAS PARA PERFILES
/*Route::get('Cliente.perfilC/{id}/edit', [ControladorEditarCliente::class,'edit'])->name('apodocliente.edit');
Route::get('Auxiliar.perfilA/{id}/edit', [ControladorEditarAuxiliar::class,'edit'])->name('apodoauxiliar.edit');*/
Route::get('/perfilC', function () {
    return view('Cliente.perfilC');
});
Route::get('/perfilA', function () {
    return view('Auxiliar.perfilA');
});

Route::get('/modalTnv', function () {
    return view('modalConsultarTnv');
});
Route::get('/modalTpf', function () {
    return view('modalConsultarTpf');
});
