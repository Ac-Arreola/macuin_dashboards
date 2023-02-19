
<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalAgregarT" data-bs-backdrop="static" 
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAgregarT" 
            aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

    {{--header--}}
        <div class="modal-header mb-4">
          <h5 class="modal-title" id="staticBackdropLabel">Solicitar Ticket</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

    {{--body--}}
        <div class="modal-body modalfon" id="modalbody">

          <div class="card text-center  mb-4">

            <div class="card-header "> 
              ㅤ⠀ㅤ
            </div>

            <div class="card-body">
              <img src="{{asset('img/addT.png')}}" alt="" class=" mb-3" 
              id="soliTic" width="50" height="50">
              <form>
                {{--Autor--}}
                <div class="row mb-3">
                  <label for="inputAutor" class="col-sm-2 col-form-label"> Autor : </label>
                  <div class="col-sm-10">
                    <input type="txt_Autor" class="form-control" id="txtAutor" placeholder="Usuario1">
                    </div>
                </div>
                {{--Departamento--}}
                <div class="row mb-3">
                  <label for="inputDepa" class="col-sm-2 col-form-label">Dpto. : </label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Selecciona un depa...">
                      <option selected>Compras</option>
                      <option value="2">Contabilidad</option>
                      <option value="3">Logística</option>
                      <option value="4">Producción</option>
                      <option value="5">Ventas</option>
                    </select>
                  </div>
                </div>

              {{--Fecha--}}
                <div class="row mb-3">
                  <label for="inputFecha" class="col-sm-2 col-form-label"> Fecha : </label>
                  <div class="col-sm-10">
    
                      <div class="flex items-center justify-center">
                        <div class="datepicker relative form-floating mb-3 xl:w-96">
                          <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Select a date" />
                          <label for="floatingInput" class="text-gray-700">Select a date</label>
                        </div>
                      </div>

                  </div>
                </div>
              {{--Clasificación--}}
              <div class="row mb-3">
                <label for="inputClasif" class="col-sm-2 col-form-label"> Clasif.: </label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Selecciona un clasif...">
                      <option selected>Falla de office</option>
                      <option value="2">Fallas en la red</option>
                      <option value="3">Errores de software</option>
                      <option value="4">Errores de hardware</option>
                      <option value="5">Mantenimientos preventivos</option>
                    </select>                    

                  </div>
              </div>
                {{--Detalles--}}
                <div class="row">
                  <label for="inputDetalles" class="col-sm-2 col-form-label"> Detalle </label>
                  <div class="col-sm-10">
                    <input type="txt_Detalles" class="form-control" id="txtDetalles" 
                    placeholder="Deja alguna observación." rows="3">
                   </div>
                </div>
                



                <button type="submit" class="btn btn-outline-light" style="background-color: blueviolet">Solicitar</button>
              </form>
               
                
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

