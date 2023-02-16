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
Route::get('/pC',[controladorFormulario::class,'showPrincipalC'])->name('apodoPrincipal1'); 
Route::get('/pA',[controladorFormulario::class,'showPrincipalA'])->name('apodoPrincipal2'); 
Route::get('/pJ',[controladorFormulario::class,'showPrincipalJ'])->name('apodoPrincipal3'); 