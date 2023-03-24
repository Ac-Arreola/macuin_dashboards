<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorFormulario;
use App\Http\Controllers\ControladorDepartamentos;
use App\Http\Controllers\ControladorEditarCliente;
use App\Http\Controllers\ControladorEditarAuxiliar;
use App\Http\Controllers\ControladorUsuarios;
use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorCliente;
use App\Http\Controllers\controladorTicketsJ;

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
//reporte
Route::get('departamento/reporte', [ControladorDepartamentos::class,'reporte'])->name('departamento.reporte')->middleware('auth');


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

Route::put('usu/{id}', [ControladorUsuarios::class,'editar'])->name('usuario.editar');
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
Route::get('/Tickets', function () {
    return view('Jefe.Tickets');
}); 
 



Route::get('cerrar', [ControladorLogin::class,'serrarsecion'])->name('cerrar');

//------------------ Rutas para el cliente ----------------------------------
Route::get('cliente/muestra', [ControladorEditarCliente::class,'muestra'])->name('cliente.muestra')->middleware('auth');
Route::put('cliente', [ControladorCliente::class,'update'])->name('cliente.update');
Route::post('cliente', [ControladorEditarCliente::class,'store'])->name('cliente.store');
Route::get('cancelar/{id}/edit', [ControladorUsuarios::class,'cancelar'])->name('cancelar.edit')->middleware('auth');
Route::put('cancelar/{id}', [ControladorEditarCliente::class,'update'])->name('cancelar.update');
Route::get('cliente', [ControladorEditarCliente::class,'index'])->name('cliente.index')->middleware('auth');
Route::put('comentariocli/{id}', [ControladorEditarCliente::class,'comentario'])->name('comentarios.clientes');

//------------------ Rutas para auxiliar ----------------------------------

Route::get('auxiliar/muestra', [ControladorEditarAuxiliar::class,'muestra'])->name('auxiliar.muestra')->middleware('auth');
Route::put('auxiliar', [ControladorEditarAuxiliar::class,'update'])->name('auxiliar.update')->middleware('auth');
Route::get('auxiliar/ticketsNv', [ControladorEditarAuxiliar::class,'mostrarTnv'])->name('auxiliar.mostrarTnv')->middleware('auth');
Route::get('auxiliar/ticketsPf', [ControladorEditarAuxiliar::class,'mostrarTpf'])->name('auxiliar.mostrarTpf')->middleware('auth');
Route::put('aceptar/{id}', [ControladorEditarAuxiliar::class,'editar'])->name('aceptar.editar');
Route::put('editar/{id}', [ControladorEditarAuxiliar::class,'editarEstatus'])->name('estatus.editar');
Route::put('comentario/{id}', [ControladorEditarAuxiliar::class,'comentario'])->name('comentario.editar');
//--------------------Ruta Ticket jefe----------------------------------------
Route::get('Tickets', [controladorTicketsJ::class,'mostrar'])->name('ticket.mostrar')->middleware('auth');
Route::get('Tickets_A', [controladorTicketsJ::class,'index'])->name('ticket.index');
Route::get('Tickets_B', [controladorTicketsJ::class,'muestra'])->name('ticket.muestra')->middleware('auth');

Route::get('Tickets{id}/edit', [controladorTicketsJ::class,'edit'])->name('ticket.edit')->middleware('auth');
Route::post('usuario/{id}', [controladorTicketsJ::class,'update'])->name('ticket.update');

Route::get('Tickets{id}/ticket', [controladorTicketsJ::class,'ticket'])->name('ticket.ticket')->middleware('auth');

Route::put('comentario_cli/{id}', [controladorTicketsJ::class,'comentariocli'])->name('comentario.cliente');
Route::put('comentario_aux/{id}', [controladorTicketsJ::class,'comentarioaux'])->name('comentario.auxiliar');