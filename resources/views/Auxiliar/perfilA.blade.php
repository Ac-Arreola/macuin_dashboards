@extends('plantillaA')
@section('titulo')
    Perfil _A
@stop



@section('contenido')
{{--importamos el modal consultar tickets nuevos
@include('Auxiliar.modalConsultarTnv')--}}

{{--importamos el modal modal consultar tickets en proceso
@include('Auxiliar.modalConsultarTpf') --}}



@if(session()->has('Editado'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Perfil Actualizado',
 'success'  ) </script> "!!}
@endif



<h2 class="display-1 mt-4 mb-4 fst-italic text-center text-black">Datos de Usuario</h2>
<div class="container col-md-6">
    <div class="row">
        <div class="col-sm-6">
        <div class="card">
            <img src={{asset('img/perfil.png')}} class="card-img-top" alt="...">
            
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
                    data-bs-target="#modalEditarPerfilA" data-bs-toggle="tooltip" 
                    data-bs-placement="bottom" 
                    title="Presiona para editar los datos de tu perfil"
                    class="btn btn-outline-light btnfon">ACTUALIZAR DATOS
                    <img src="{{asset('img/edPerfil.png')}}" alt="" id="#modalEditarPerfilA" 
                        width="60" height="60"></button>
                        
    </div>
    <br>
    <br>
    <div class="accordion mb-5" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header " id="headingOne">
            <button class="accordion-button text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              TICKETS
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <a class="dropdown-item" type="button" {{--data-bs-toggle="modal" 
              data-bs-target="#modalConsultarTnv"--}} data-bs-toggle="tooltip" data-bs-placement="bottom" 
              title="Presiona para consultar los tickets asignados" href={{route('auxiliar.mostrarTnv')}}>
                 <img src="{{asset('img/recibo.png')}}"  alt="" id="soliTnV"
                 class="icon">  Tickets Nuevos  </a>
              
                 <br>

              <a class="dropdown-item" type="button" {{--data-bs-toggle="modal" 
              data-bs-target="#modalConsultarTpf"--}} data-bs-toggle="tooltip" data-bs-placement="bottom" 
              title="Presiona para consultar los tickets en proceso o culminados" href={{route('auxiliar.mostrarTpf')}}>
              <img src="{{asset('img/progreso.png')}}"   alt="" id="soliTpF"
                 class="icon"> Tickets en proceso o culminados </a>
            </div>
          </div>
        </div>
        
      </div>
      @include('Auxiliar.modalEditarPerfilA')
</div>
</div>

@stop