
<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalConsultarT" data-bs-backdrop="static" 
        data-bs-keyboard="false"  aria-labelledby="modalConsultarT" 
            aria-hidden="true">
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
                                  <th scope="col">No.Ticket:</th>
                                  <th scope="col">Autor:</th>
                                  <th scope="col">Dpto.:</th>
                                  <th scope="col">Fecha:</th>
                                  <th scope="col">Clasif.:</th>
                                  <th scope="col">Detalles.:</th>
                                  <th scope="col">Estatus:</th>
                                  <th scope="col">Acciones:</th>
                                </tr>
                              </thead>
                              <tbody>
                                 
                                  <tr>
                                      <th scope="row">1</th>
                                      <td class="text-disabled" > user 1</td>
                                      <td > </td>
                                      <td > </td>
                                      <td > </td>
                                      <td > </td>
                                      <td > </td>
                                      <td>
                                          <a type="button" class="btn btn-outline-light" >
                                          <img src="{{asset('img\trashKn.png')}}" alt="" width="20" height="20">
                                          Cancelar</a>
                                      </td>
                                  </tr>
                                 
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

