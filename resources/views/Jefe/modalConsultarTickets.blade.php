<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalConsultarTickets-{{$consulta->id}}" data-bs-backdrop="static" 
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalConsultarTnv" 
            aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

    {{--header--}}
        <div class="modal-header">
          <h5 class="modal-title text-black" id="staticBackdropLabel">Asignación de Tickets </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" 
          aria-label="Close"></button>
        </div>

    {{--body--}}
        <div class="modal-body" id="modal" id="modalbody">

          <div class="card text-center  mb-2 mt-2 ">

            <div class="card-header fw-bold text-black"> 
               Tickets asignados
            </div>


             {{--TABLA PARA MOSTRAR LOS TICKETS SOLICITADOS--}}

                    <div class="card">
                      <div class="card-body">
                        <div class="container" 
                        style="max-height: calc(100vh - 210px);overflow-y: auto">
                        <table>
                          <tr>
                            <th class="text-black">Status</th>
                          </tr>
                          <tr>
                            
                            <td>
                              {{-- BARRA BUSQUEDA --}}
                              <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
                                
                                <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
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

                          <table class="table modalfon text-light">

                              <thead>
                                <tr>
                                  <th scope="col">ID:</th>
                                  <th scope="col">Dpto.:</th>
                                  <th scope="col">Clasificación: </th>
                                  <th scope="col">Status:</th>
                                  <th scope="col">Comentarios:</th>
                                </tr>
                              </thead>

                              <tbody>
                                
                                @foreach($consultaId as $consultas)
                                @if($consultas->Id == $consulta->id)
                                 
                                  <tr>
                                      <th scope="row">{{$consultas->Id}}</th>
                                      <td >{{$consultas->Dpto}}</td>
                                      <td >{{$consultas->Clasif}}</td>
                                      <td >{{$consultas->estatus}}</td>
                                      <td >{{$consultas->Comentarios_cli}}</td>
                                  </tr>
                                 
                              </tbody>
                              @endif
                              @endforeach
                            </table>
                      </div>
                  </div>
                </div>

            <div class="card-footer fw-bold">
              ㅤ⠀ㅤ
            </div>

          </div>
        </div>

    {{--footer--}}
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-outline-light modalfon">Entendido</button>
        </div>

      </div>
    </div>
  </div>

