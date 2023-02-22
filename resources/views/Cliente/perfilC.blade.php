@extends('plantillaC')
@section('titulo')
    Perfil _C
@stop
@section('contenido')
{{--importamos el modal consultar tickets --}}
@include('modalConsultarT')

{{--importamos el modal agregar --}}
@include('modalAgregarT')
{{--importamos el modal editar --}}
@include('modalEditarPerfilC')



<h2 class="display-1 mt-4 mb-4 fst-italic text-center">Datos de Usuario</h2>
<div class="container col-md-6">
    <div class="row">
        <div class="col-sm-6">
        <div class="card formP">
            <img src="./img/perfil.png" class="card-img-top" alt="...">
            
        </div>

        </div>
        <div class="col-sm-6">
        <div class="card">
          <div class="container formP">
            
          
            <form action="{{route('cliente.mostrar', $consultaId->id_usu)}}">>
                <label class="form-label"> Nombre: </label>
                <input type="text" class="form-control" placeholder="" value="{{$consultaId->Nombre}}" >
                <label class="form-label"> Username: </label>
                <input type="text" class="form-control" placeholder="" value="{{$consultaId->Username}}" >
                <label class="form-label"> Email: </label>
                <input type="email" class="form-control" placeholder="" value="{{$consultaId->Email}}" >
                <label class="form-label"> Password: </label>
                <input type="password" class="form-control" placeholder="" value="{{$consultaId->Password}}">
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
                    <img src="{{asset('img/edPerfil.png')}}" alt="" id="edPerf" 
                        width="60" height="60"></button>
    </div>
<br>    
    <br>
    <div class="accordion mb-5" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
              <a class="dropdown-item" type="button" data-bs-toggle="modal" 
                data-bs-target="#modalConsultarT" data-bs-toggle="tooltip" data-bs-placement="bottom" 
                title="Presiona para consultar los tickets registrados">
                <img src="{{asset('img/lupas.png')}}" alt="" id="soliTic" 
                   class="icon">  Consultar tickets</a>

            </div>
          </div>
        </div>
        
      </div>
      
</div>

        

@stop