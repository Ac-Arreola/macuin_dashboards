@extends('plantillaC')
@section('titulo')
    Perfil _C
@stop
@section('contenido')


{{--importamos el modal agregar --}}
@include('Cliente.modalAgregarT')
{{--importamos el modal editar --}}


@if(session()->has('Actualizado'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Perfil Actualizado',
 'success'  ) </script> "!!}
@endif






<h2 class="display-1 mt-4 mb-4 fst-italic text-center text-black">Datos de Usuario</h2>
<div class="container col-md-6">
    <div class="row">
        <div class="col-sm-6">
        <div class="card formP">
          <img src={{asset(Auth::user()->foto)}} class="card-img-top" alt="..." width="300" height="369">
            
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
                    data-bs-target="#modalEditarPerfilC" data-bs-toggle="tooltip" 
                    data-bs-placement="bottom" 
                    title="Presiona para editar los datos de tu perfil"
                    class="btn btn-outline-light btnfon">ACTUALIZAR DATOS
                    <img src="{{asset('img/edPerfil.png')}}" alt="" id="#modalEditarPerfilC" 
                        width="60" height="60"></button>
    </div>
<br>    
    <br>
    <div class="accordion mb-5" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              TICKETS
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="dropdown-item" type="button" data-bs-toggle="modal" 
              data-bs-target="#modalAgregarT" data-bs-toggle="tooltip" data-bs-placement="bottom" 
              title="Presiona para solicitar un ticket">
                 <img src="{{asset('img/pestana.png')}}" alt="" id="soliTic" class="icon">  Solicitar ticket  </a>
              <br>
              <a class="dropdown-item" type="button"  
                href={{route('cliente.index')}} data-bs-toggle="tooltip" data-bs-placement="bottom" 
                title="Presiona para consultar los tickets registrados">
                <img src="{{asset('img/lupas.png')}}" alt="" id="soliTic" 
                   class="icon">  Consultar tickets</a>

            </div>
          </div>
        </div>
       
      </div>
      
</div>
@include('Cliente.modalEditarPerfilC')
</div>


@stop
