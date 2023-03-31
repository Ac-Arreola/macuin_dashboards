
<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalConsultarT" aria-hidden="true" aria-labelledby="modalConsultarT" tabindex="-1">

    <div class="modal-dialog modal-lg">
      <div class="modal-content">

    {{--header--}}
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Consultar Tickets</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" 
          aria-label="Close"></button>
        </div>

    {{--body--}}
        <div class="modal-body" id="modalbody">

          <div class="card text-center  mb-2 mt-2 ">

            <div class="card-header fw-bold"> 
                Tickets registrados
            </div>


             {{--TABLA PARA MOSTRAR LOS TICKETS SOLICITADOS--}}

                    <div class="card">
                      <div class="card-body">
                        <div class="container" style="max-height: calc(100vh - 210px);overflow-y: auto">
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
                                      <button class="btn btn-outline-light" data-bs-target="#modalCancelar" data-bs-toggle="modal">
                                          <img src="{{asset('img\trashKn.png')}}" alt="" width="20" height="20">
                                          Cancelar</button>
                                              @endif
                                          
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
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




<!-- Modal -->
<div class="modal fade" id="modalCancelar" aria-hidden="true" aria-labelledby="modalCancelar" tabindex="-1">

  <div class="modal-dialog">
    <div class="modal-content" id="modal">

      <div class="modal-header text-center">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Seguro que deseas Cancelar?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form class="m-4" method="post" action="{{route('cancelar.update',$consulta->id_tcli)}}">
              
          @csrf

          {!!method_field('PUT')!!}

          <h5 class="card-title">{{$consulta->Clasificacion->Nombre}}</h5>
          <input  id="txtid" name ="txtStatus" placeholder="" value="6" readonly onmousedown="return false">
                            


                            
                          
             
      </div>  
      

      <div class="modal-footer text-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submint" class="btn btn-primary">Cancelar ticket</button>
      </form>
      </div>
    </div>
  </div>
</div>