@extends('plantillaA')
@section('titulo')
    Tickets en proceso o finalizados
@stop
@section('contenido')


  



<div class="container" style="max-height: calc(100vh - 210px);overflow-y: auto">
  <h1 class=" mt-5 mb-5 text-center fw-bold"> <i> <font face="verdana"> Tickets en proceso o finalizados</font></i></h1>

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
                      <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
                        <div>
                          <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md">
                            <div class="row g-3">
                              </div>
                              {{--input departamento --}}
                                <div class="col-8">
                                  <input type="text" name ="busqueda_dpto" class="form-control text-center form-control" 
                                  placeholder="Busqueda por dpto." id="in" height="35">
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
                      </form>
                      {{--BARRA BUSQUEDA FIN--}}
                  </td>
                  <td>
                    {{-- BARRA BUSQUEDA --}}
                    <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
                      
                      <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md">
                        <div class="row g-3 gap-3">
                          </div>
                          {{--input fecha --}}
                            <div class="col-9">
                              <input type="text" name ="busqueda_estatus" class="form-control text-center form-control" 
                              placeholder="Busqueda por status"  id="in" height="35">
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
                  <td>
                      {{-- BARRA BUSQUEDA --}}
                      <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
                      
                          <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                            <div class="row g-3 ">
                              </div>
                              {{--input fecha --}}
                                <div class="col-9">
                                  <input type="date" name ="busqueda_fecha" class="form-control text-center form-control" 
                                  id="in" height="35">
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

              <table class="table modalfon text-light">
                <thead>
                  <tr>
                    <th scope="col">No.Ticket:</th>
                    <th scope="col">Dpto.:</th>
                    <th scope="col">Observaciones:</th>
                    <th scope="col">Estatus:</th>
                    <th scope="col">Fecha:</th>
                    <th scope="col">Reporte:</th>
                  </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <th scope="row">1</th>
                        <td > </td>
                        <td > </td>
                        <td > Completado</td>
                        <td > </td>
                        <td>
                            <a type="button" class="btn btn-outline-light" style="background-color: blueviolet">
                            <img src="{{asset('img\reporte.png')}}" alt="" width="20" height="20">
                            Generar</a>
                        </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td > </td>
                      <td > </td>
                      <td > En proceso</td>
                      <td > </td>
                      <td>
                           <button class="btn btn-outline-light" style="background-color: blueviolet" disabled >
                            <img src="{{asset('img\reporte.png')}}" alt="" width="20" height="20">
                            Generar</button>
                      </td>
                  </tr>
                   
                </tbody>
              </table>

        </div>
      </div>

  


@stop
