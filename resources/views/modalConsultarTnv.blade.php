
<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalConsultarTnv" data-bs-backdrop="static" 
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalConsultarTnv" 
            aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

    {{--header--}}
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Consultar Tickets Nuevos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" 
          aria-label="Close"></button>
        </div>

    {{--body--}}
        <div class="modal-body" id="modalbody">

          <div class="card text-center  mb-2 mt-2 ">

            <div class="card-header fw-bold"> 
                Tickets asignados
            </div>


             {{--TABLA PARA MOSTRAR LOS TICKETS SOLICITADOS--}}

                    <div class="card">
                      <div class="card-body">
                        <div class="container" 
                        style="max-height: calc(100vh - 210px);overflow-y: auto">
                        <table>
                          <th scope="col">
                            <label >Depto. </label>
                            {{-- Barra búsqueda --}}
                            <form class="d-flex float-right" role="search">
                              <input class="form-control me-2" type="search" placeholder="Filtrar" aria-label="Search" 
                              name="filtrar" >
                              <button class="btn btn-light" type="submit"> 
                                <img src="{{asset('img\lupas.png')}}" alt="" width="18" height="18"> 
                              </button>
                            </form>
                          </th>
                          <th>
                            <label for=""> ㅤ⠀ㅤ  ㅤ⠀ㅤ ㅤ⠀ㅤ ㅤ⠀ㅤ</label>
                          </th>
                          <th scope="col">
                            <label >Fecha </label>
                            {{-- Barra búsqueda --}}
                            <form class="d-flex float-right" role="search">
                              <input class="form-control me-2" type="search" placeholder="Filtrar" aria-label="Search" 
                              name="filtrar" >
                              <button class="btn btn-light" type="submit"> 
                                <img src="{{asset('img\lupas.png')}}" alt="" width="18" height="18"> 
                              </button>
                            </form>
                          </th>
                        </table>





                          <table class="table modalfon text-light">
                              <thead>
                                <tr>
                                  <th scope="col">No.Ticket:</th>
                                  <th scope="col">Dpto.:</th>
                                  <th scope="col">Fecha: </th>
                                  <th scope="col">Observaciones:</th>
                                  <th scope="col">Acciones:</th>
                                </tr>
                              </thead>
                              <tbody>
                                 
                                  <tr>
                                      <th scope="row">1</th>
                                      <td > </td>
                                      <td > </td>
                                      <td > </td>
                                      <td>
                                          <a type="button" class="btn btn-outline-light" 
                                          style="background-color: blueviolet">
                                          <img src="{{asset('img\mascota.png')}}" alt="" width="20" height="20">
                                          Realizar</a>
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

