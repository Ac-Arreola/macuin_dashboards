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

  <div class="container mb-4" 
          style="max-height: calc(100vh - 210px);overflow-y: auto">
            
                      
                          {{-- BARRA BUSQUEDA --}}
            <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
                            
                                {{--  PRUEBA ALINEAR     --}}
                                  <div class="container">
                                    <table>
                                      <tr>
                                        <td>
                                            {{-- BARRA BUSQUEDA --}}
                                            <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
                                              <div>
                                                <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md">
                                                  <div class="container" >
                                                    <a type="button" class="btn btn-outline-light mb-4 "  style="background-color:#8c3bb2" data-bs-toggle="" data-bs-target="#" href="{{route('ticket.index')}}" >
                                                      <img  class="mt-2" src="{{asset('img/helpers.png')}}" alt="" id="helpers" width="50" height="50">
                                                      Auxiliares <i class="bi bi-plus-circle"></i>
                                                    </a>
                                                  </div>
                                                  </div>
                                                </div>
                                            </form>
                                            {{--BARRA BUSQUEDA FIN--}}
                                        </td>
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
                                                      <img class="mt-2" src="{{asset('img/reporte.png')}}" alt="" id="searchicon" 
                                                      width="50" height="50"><br> Descargar</button>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                            {{--BARRA BUSQUEDA FIN--}}
                                        </td>
                                        
                                      </tr>
                                    </table>


                                {{--   TERMINA PRUEBA ALINEAR   --}}




                                
                                <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                                  <table class="text-white">
                                      <tr>
                                        <th>Departamento</th>
                                        <th>Estatus</th>
                                        <th>Fecha</th>
                                        <th></th>
                                      </tr>
                                  <tr>
                              </div>
                              <td>
                                <div>
                                  <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md">
                                    <div class="row g-3">

                                      @if(session()->has('Consultat'))
                                      <?php
                              
                                      $busqueda_dpto = session()->get('busqueda_dpto');
                                          
                                      ?>
                                      <input type="text" name ="busqueda_dpto" class="form-control text-center form-control" 
                                      placeholder="Busqueda por nombre" id="in" height="35" value={{$busqueda_dpto}}>
                                      
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
                                      placeholder="Busqueda por nombre" id="in" height="35" value={{$busqueda_estatus}}>
                                      
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
                                      <input type="text" name ="busqueda_dpto" class="form-control text-center form-control" 
                                      placeholder="Busqueda por nombre" id="in" height="35" value={{$busqueda_fecha}}>
                                      
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
                                  
                              
                              {{--BARRA BUSQUEDA FIN--}}
                          </td>
            </form>
                </tr>
              </table>
              

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