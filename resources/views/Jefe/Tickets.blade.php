@extends('plantillaJ')
@section('titulo')
      

    Tickets

@stop
@section('contenido')




<div class="container mt-5 col-md-10 " >
  
    <h1 class=" mt-4 text-center text-white fw-bold">Tickets</h1>
    
       
    <div class="container">
      <a type="button" class="btn btn-outline-light mb-4"  style="background-color:#8c3bb2" data-bs-toggle="" data-bs-target="#" href="{{route('ticket.index')}}" >
        <img  class="mt-2 mb-2" src="{{asset('img/helpers.png')}}" alt="" id="helpers1" width="50" height="50">
        Auxiliares <i class="bi bi-plus-circle"></i>
      </a>
   </div>
  
      {{--BARRA DE BUSQUEDA--}}
      <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
        <div>
          <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
            <div class="row g-3">
                <div class="col-auto">
                  <input type="text" name ="busqueda" class="form-control text-center form-control" placeholder="Buscar tickets por clasif" aria-describedby="button-addon2" id="in" height="35">
                </div>
                <div class="col-auto">
                  <button class="btn btn-outline-light" style="background-color:#7979F7 " type="submit">
                    <img src="{{asset('img/lupass.png')}}" alt="" id="searchicon" 
                    width="35" height="35"></button>
                </div>
            </div>
          </div>
        </div>
      </form>
    {{--BARRA DE BUSQUEDA FIN--}}

  <table class=" table text-center text-white" id="hey">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Cliente</th>
          <th scope="col">Departamento</th>
          <th scope="col">Clasificación</th>
          <th scope="col">Estatus</th>
          <th scope="col">Descripción cliente</th>
          <th scope="col">Asignar</th>
    
              
        </tr>
      </thead>
      <tbody>
        
        @foreach($Consultat as $consulta)
        <tr>
      <th scope="row">{{$consulta->id_tcli}}</th>
      <td>{{$consulta->Usuario->name}}</td>
      <td>{{$consulta->Departamento->Nombre}}</td>
      <td>{{$consulta->Clasificacion->Nombre}}</td>
      <td>{{$consulta->Status->Nombre}}</td>
      <td>{{$consulta->Comentarios}}</td>
      <td>
        
        <button class="btn btn-outline-light" type="button" data-bs-toggle="modal" id ="b"data-bs-target="#modalDefinirE-{{$consulta->id_tcli}}" style="background-color: blueviolet">
        <img src="{{asset('img\asignar.png')}}" id="opciones"alt="" >Def. encargado
      </button>
      
      
    </td>

        </tr>
   
      </tbody>
      @include('Jefe.modalDefinirE')
      @endforeach
    </table>
    </div>

    
   

    </div>
</div>
 
@stop

 