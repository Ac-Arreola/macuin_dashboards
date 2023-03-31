@extends('plantillaJ')
@section('titulo')
      

    Tickets

@stop
@section('contenido')




@if(session()->has('Editado'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Perfil Actualizado',
 'success'  ) </script> "!!}
@endif





<h2 class="display-1 mt-4 mb-4 fst-italic text-center">Datos de Usuario</h2>
<div class="container col-md-6">
    <div class="row">
        <div class="col-sm-6">
        <div class="card formP">
          <img src={{asset(Auth::user()->foto)}} class="card-img-top" alt="...">
            
        </div>

        </div>
        <div class="col-sm-6">
        <div class="card">
          <div class="container formP">
            
          
            <form action="">
                <label class="form-label"> Nombre: </label>
                <input type="text" class="form-control" placeholder="" value="{{Auth::user()->name}}" readonly onmousedown="return false">
                <label class="form-label"> Apellido paterno </label>
                <input type="text" class="form-control" placeholder="" value="{{Auth::user()->Ape_pat}}" readonly onmousedown="return false">
                <label class="form-label"> Apellido materno </label>
                <input type="text" class="form-control" placeholder="" value="{{Auth::user()->Ape_mat}}" readonly onmousedown="return false">
                <label class="form-label"> Email: </label>
                <input type="email" class="form-control" placeholder="" value="{{Auth::user()->email}}" readonly onmousedown="return false">
                
            </form>
          </div>
        </div>
        </div>
    </div>
    <br>
    <div class="container col-md-5 text-center">
        
      <button data-bs-toggle="modal" 
                    data-bs-target="#modalEditarPerfilJ" data-bs-toggle="tooltip" 
                    data-bs-placement="bottom" 
                    title="Presiona para editar los datos de tu perfil"
                    class="btn btn-outline-light btnfon">ACTUALIZAR DATOS
                    <img src="{{asset('img/edPerfil.png')}}" alt="" id="#modalEditarPerfilJ" 
                        width="60" height="60"></button>
                       

   
      </div>
      
</div>
<br>

</div>

@include('Jefe.modalEditarPerfilJ')
</div>
@stop
