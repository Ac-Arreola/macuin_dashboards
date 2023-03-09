<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorFormulario;
use App\Http\Controllers\ControladorDepartamentos;
use App\Http\Controllers\ControladorEditarCliente;
use App\Http\Controllers\ControladorEditarAuxiliar;
use App\Http\Controllers\ControladorUsuarios;
use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorCliente;

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

Route::get('departamento/create', [ControladorDepartamentos::class,'create'])->name('departamento.create')->middleware('auth');
//Store
Route::post('departamento', [ControladorDepartamentos::class,'store'])->name('departamento.store');
Route::get('departamento', [ControladorDepartamentos::class,'index'])->name('departamento.index')->middleware('auth');
//Edit
Route::get('departamento/{id}/edit', [ControladorDepartamentos::class,'edit'])->name('departamento.edit')->middleware('auth');
//Update
Route::put('departamento/{id}', [ControladorDepartamentos::class,'update'])->name('departamento.update');
//show
Route::get('departamento/{id}/show', [ControladorDepartamentos::class,'show'])->name('departamento.show')->middleware('auth');
//Destroy
Route::delete('departamento/{id}', [ControladorDepartamentos::class,'destroy'])->name('departamento.destroy');



//------------------------------Usuarios--------------------------------------
//Create

Route::get('usuario/create', [ControladorUsuarios::class,'create'])->name('usuario.create')->middleware('auth');
//Store
Route::post('usuario', [ControladorUsuarios::class,'store'])->name('usuario.store');
Route::get('usuario', [ControladorUsuarios::class,'index'])->name('usuario.index')->middleware('auth');
//Edit
Route::get('usuario/{id}/edit', [ControladorUsuarios::class,'edit'])->name('usuario.edit')->middleware('auth');
//Update
Route::put('usuario/{id}', [ControladorUsuarios::class,'update'])->name('usuario.update');
//show
Route::get('usuario/{id}/show', [ControladorUsuarios::class,'show'])->name('usuario.show')->middleware('auth');
//Destroy
Route::delete('usuario/{id}', [ControladorUsuarios::class,'destroy'])->name('usuario.destroy');


//RUTAS VISTAS MAIN
 Route::get('/',[ControladorLogin::class,'login'])->name('login');

Route::post('Ingresar', [ControladorLogin::class,'loginVerify'])-> name('inic');






Route::get('pC',[ControladorLogin::class,'showinicio'])->name('pc')->middleware('auth'); 


Route::get('/pA',[controladorFormulario::class,'showPrincipalA'])->name('apodoPrincipal2')->middleware('auth'); 
Route::get('/pJ',[controladorFormulario::class,'showPrincipalJ'])->name('apodoPrincipal3')->middleware('auth'); 

//RUTA LOGIN


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



Route::get('cerrar', [ControladorLogin::class,'serrarsecion'])->name('cerrar');

//------------------ Rutas para el cliente ----------------------------------
Route::get('cliente/muestra', [ControladorEditarCliente::class,'muestra'])->name('cliente.muestra')->middleware('auth');
Route::put('cliente', [ControladorCliente::class,'update'])->name('cliente.update');
Route::post('cliente', [ControladorEditarCliente::class,'store'])->name('cliente.store');
Route::get('cancelar/{id}/edit', [ControladorUsuarios::class,'cancelar'])->name('cancelar.edit')->middleware('auth');
Route::put('cancelar/{id}', [ControladorEditarCliente::class,'update'])->name('cancelar.update');

//------------------ Rutas para auxiliar ----------------------------------

Route::get('auxiliar/muestra', [ControladorEditarCliente::class,'muestra'])->name('auxiliar.muestra')->middleware('auth');
Route::put('auxiliar', [ControladorEditarAuxiliar::class,'update'])->name('auxiliar.update');
Route::get('/tnv', function () {
    return view('Auxiliar.consultarTnvo');
});