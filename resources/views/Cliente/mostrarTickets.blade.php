@extends('plantillaC')
@section('titulo')
    Perfil _C
@stop
@section('contenido')

@if(session()->has('confirmacion'))

{!! " <script> Swal.fire(

 'Correcto!',
 'Solicitud generada',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Cancelado'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Ticket cancelado',
 'success'  ) </script> "!!}
@endif


<div class="container" style="max-height: calc(100vh - 210px);overflow-y: auto">
  <h1 class=" mt-4 text-center text-white fw-bold">Tickets Solicitados</h1>
  <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
    <div>
      <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
        <div class="row g-3">
            <div class="col-auto">
              <input type="text" name ="busqueda" class="form-control text-center form-control" placeholder="Buscar tickets" aria-describedby="button-addon2" id="in" height="35">
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
  <br>
    <table class="table modalfon text-light">
        <thead>
          <tr>
            <th scope="col">No.:</th>
            <th scope="col">Fecha:</th>
            <th scope="col">Clasif.:</th>
            <th scope="col">Detalles.:</th>
            <th scope="col">Estatus:</th>
            <th scope="col">Acciones:</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Consultat as $consulta)
            <tr>
                <th scope="row">{{$consulta->id_tcli}}</th>
                
                <td > {{$consulta->Fecha}}</td>
                <td > {{$consulta->Clasificacion->Nombre}}</td>
                <td > {{$consulta->Comentarios}}</td>
                <td >{{$consulta->Status->Nombre}} </td>
                
                <td>
                @if($consulta->id_sta == 1)
                <button class="btn btn-outline-light" data-bs-toggle="modal" id ="b"data-bs-target="#modalCancelar-{{$consulta->id_tcli}}">
                    <img src="{{asset('img\trashKn.png')}}" alt="" width="20" height="20">
                    Cancelar</button>
                        @endif
                    
                </td>
                @include('Cliente.modalCancelar')
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@stop
