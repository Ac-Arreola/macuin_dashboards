@extends('plantillaA')
@section('titulo')
    Tickets en proceso o finalizados
@stop
@section('contenido')

@if(session()->has('con'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Ticket aceptado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('estatus'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Estatus editado',
 'success'  ) </script> "!!}
@endif
  
@if(session()->has('comentario'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Comentario agregado',
 'success'  ) </script> "!!}
@endif
  



<div class="container" style="max-height: calc(100vh - 210px);overflow-y: auto">
  <h1 class=" mt-5 mb-5 text-center fw-bold"> <i> <font face="verdana"> Tickets en proceso o finalizados</font></i></h1>

  <div class="container">
    <table>
      <tr>
        
        <td>
          {{-- BARRA BUSQUEDA --}}
          <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
            
            <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md">
              
                ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
              
            </div>
            
        </form>
        {{--BARRA BUSQUEDA FIN--}}
        </td>
        <td>
            {{-- BARRA BUSQUEDA --}}
            <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
            
              <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                <div class="col-auto">
                <button class="btn btn-outline-light" style="background-color:#561088 " name="reporte" type="submit">
                  <img src="{{asset('img/reporte.png')}}" alt="" id="searchicon" 
                  width="50" height="50"> <br> Descargar</button>
                </div>
              </div>
                
            
            {{--BARRA BUSQUEDA FIN--}}
        </td>
        
      </tr>
    </table>    
  
  
  {{--TABLA PARA MOSTRAR LOS TICKETS EN PROCESO O FINALIZADOS--}}

      
          <div class="container mb-4" 
          style="max-height: calc(100vh - 210px);overflow-y: auto">
          <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
              <table>
                <tr>
                  <th>Departamento</th>
                  <th>Estatus</th>
                  <th>Fecha</th>
                </tr>
                <tr>
                  <td>
                      {{-- BARRA BUSQUEDA --}}
                      <form  method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
                        <div>
                          <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md">
                            <div class="row g-3">
                              @if(session()->has('Consultat'))
                                      <?php
                              
                                      $busqueda_dpto = session()->get('busqueda_dpto');
                                          
                                      ?>
                                      
                                      
                                      @endif
                              </div>
                              {{--input departamento --}}
                                <div class="col-8">
                                  <input type="text" name ="busqueda_dpto" class="form-control text-center form-control" 
                                  placeholder="Busqueda por dpto." id="in" height="35" value={{$busqueda_dpto}}>
                                </div>
                              {{--input departamento fin--}}
                              {{--icono btn busqueda --}}
                                <div class="col-auto">
                                  <button class="btn btn-outline-light" style="background-color:#7979F7 " type="submit">
                                    <img src="{{asset('img/lupass.png')}}" alt="" id="searchicon" 
                                    width="18" height="18"></button>
                                </div>
                              {{--icono btn busqueda fin --}}
                            </div>
                          </div>
                     
                      {{--BARRA BUSQUEDA FIN--}}
                  </td>
                  <td>
                    {{-- BARRA BUSQUEDA --}}
                    
                      
                      <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md">
                        <div class="row g-3 gap-3">
                          @if(session()->has('Consultat'))
                                      <?php
                              
                                      $busqueda_estatus = session()->get('busqueda_estatus');
                                          
                                      ?>
                                      <input type="text" name ="busqueda_dpto" class="form-control text-center form-control" 
                                      placeholder="Busqueda por nombre" id="in" height="35" >
                                      
                                      @endif
                          </div>
                          {{--input fecha --}}
                            <div class="col-9">
                              <input type="text" name ="busqueda_estatus" class="form-control text-center form-control" 
                              placeholder="Busqueda por status"  id="in" height="35" value={{$busqueda_estatus}}>
                            </div>
                            {{--input fecha fin --}}
                            {{--icono btn busqueda fin --}}
                            <div class="col-auto">
                              <button class="btn btn-outline-light" style="background-color:#7979F7 " type="submit">
                                <img src="{{asset('img/lupass.png')}}" alt="" id="searchicon" 
                                width="18" height="18"></button>
                            </div>
                            {{--icono btn busqueda fin --}}
                        </div>
                      
                  
                  {{--BARRA BUSQUEDA FIN--}}
                  </td>
                  <td>
                      {{-- BARRA BUSQUEDA --}}
                      
                      
                          <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                            <div class="row g-3 ">
                              @if(session()->has('busqueda_fecha'))
                                      <?php
                              
                                      $busqueda_fecha = session()->get('busqueda_fecha');
                                          
                                      ?>
                                      
                                      
                                      @endif
                              </div>
                              {{--input fecha --}}
                                <div class="col-9">
                                  <input type="date" name ="busqueda_fecha" class="form-control text-center form-control" 
                                  id="in" height="35" value={{$busqueda_fecha}}>
                                </div>
                                {{--input fecha fin --}}
                                {{--icono btn busqueda fin --}}
                                <div class="col-auto">
                                  <button class="btn btn-outline-light" style="background-color:#7979F7 " type="submit">
                                    <img src="{{asset('img/lupass.png')}}" alt="" id="searchicon" 
                                    width="18" height="18"></button>
                                </div>
                                {{--icono btn busqueda fin --}}
                            </div>
                          
                      </form>
                      {{--BARRA BUSQUEDA FIN--}}
                  </td>
                  
                </tr>
              </table>
              </div>

              <table class="table modalfon text-light text-center">
                <thead>
                  <tr>
                    <th scope="col">No.:</th>
                    <th scope="col">Dpto.:</th>
                    <th scope="col">Clasificación:</th>
                    <th scope="col">Observaciones:</th>
                    <th scope="col">Estatus:</th>
                    <th scope="col">Fecha:</th>
                    <th scope="col">Acciones:</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($consultaId as $consultas)
                  
                    <tr>
                      @if($consultas->status>=3)
                      <th scope="row">{{$consultas->Id}}</th>
                      <td > {{$consultas->Dpto}}</td>
                      <td > {{$consultas->Clasif}}</td>
                      <td >{{$consultas->Comentarios_cli}} </td>
                      <td >{{$consultas->estatus}}</td>  
                      <td >{{$consultas->FECHA}}</td>
                     


                      
                             
                        <td>
                            
                            <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" id ="b" data-bs-target="#modalEditarEstatus-{{$consultas->id}}"style="background-color: blueviolet">
                              <img src="{{asset('img\editar.png')}}" alt="" width="20" height="20">
                              estatus</button>
                              <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" id ="b" data-bs-target="#modalComentario-{{$consultas->id}}"style="background-color: blueviolet">
                                <img src="{{asset('img\blog.png')}}" alt="" width="20" height="20">
                                Comentario</button>
                               
                                @include('Auxiliar.modalEditarEstatus')
                                @include('Auxiliar.modalComentario')
                        </td>
                        @endif
                    </tr>
                    
                 
                  @endforeach
                </tbody>
              </table>

        </div>
      </div>

  
</div>

@stop
