@extends('plantillaJ')
@section('titulo')
      

    Tickets

@stop
@section('contenido')
@if(session()->has('con'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Ticket Asignado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('comentariocli'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Comentario enviado al cliente',
 'success'  ) </script> "!!}
@endif

@if(session()->has('comentarioaux'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Comentario enviado al auxiliar',
 'success'  ) </script> "!!}
@endif



<div class="container mt-5 col-md-10 " >
  
    <h1 class=" mt-4 text-center text-white fw-bold">Tickets</h1>
    
       
    <div class="container">
      <a type="button" class="btn btn-outline-light mb-4"  style="background-color:#8c3bb2" data-bs-toggle="" data-bs-target="#" href="{{route('ticket.index')}}" >
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
         
          <th scope="col">Departamento</th>
          <th scope="col">Clasificación</th>
          <th scope="col">Estatus</th>
          <th scope="col">Comentarios cliente</th>
          <th scope="col">Comentarios auxiliar</th>
          <th scope="col">Fecha</th>

          

          <th scope="col">Acciones</th>
    
              
        </tr>
      </thead>
      <tbody>
        
        @foreach($Consultat as $consultaaa)
        <tr>
      <th scope="row">{{$consultaaa->id}}</th>
      
      <td>{{$consultaaa->Dpto}}</td>
      <td>{{$consultaaa->Clasif}}</td>
      <td>{{$consultaaa->estatus}}</td>
      <td>{{$consultaaa->com}}</td>
      <td>{{$consultaaa->Comentarioaux}}</td>
      <td>{{$consultaaa->FECHA}}</td>
      <td>
        
        
            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" id ="b" data-bs-target="#modalComentarioCli-{{$consultaaa->id}}"style="background-color: blueviolet">
              <img src="{{asset('img\blog.png')}}" alt="" width="20" height="20">
              Comentario cli</button>
              <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" id ="b" data-bs-target="#modalComentarioAux-{{$consultaaa->id}}"style="background-color: blueviolet">
                <img src="{{asset('img\blog.png')}}" alt="" width="20" height="20">
                Comentario aux</button>
              <a type="button" class="btn btn-outline-light" style="background-color: blueviolet">
                <img src="{{asset('img\reporte.png')}}" alt="" width="20" height="20">
                reporte</a>
              
                @include('Jefe.modalComentarioCli')
                @include('Jefe.modalComentarioAux')
    </td>
      
        </tr>
   
      </tbody>
    
      @endforeach
    </table>
    </div>

    
   

    </div>
</div>
 
@stop