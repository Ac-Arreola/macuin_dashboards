<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorFormulario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Rutas individuales para controlador    
Route::get('/p',[controladorFormulario::class,'showPrincipal'])->name('apodoPrincipal'); 




//------------------------------Usuarios--------------------------------------
//Create

Route::get('usuario/create', [ControladorDepartamentos::class,'create'])->name('usuario.create');
//Store
Route::post('usuario', [ControladorDepartamentos::class,'store'])->name('usuario.store');
Route::get('usuario', [ControladorDepartamentos::class,'index'])->name('usuario.index');
//Edit
Route::get('usuario/{id}/edit', [ControladorDepartamentos::class,'edit'])->name('usuario.edit');
//Update
Route::put('usuario/{id}', [ControladorDepartamentos::class,'update'])->name('usuario.update');
//show
Route::get('usuario/{id}/show', [ControladorDepartamentos::class,'show'])->name('usuario.show');
//Destroy
Route::delete('usuario/{id}', [ControladorDepartamentos::class,'destroy'])->name('usuario.destroy');