
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
              
              
              <form method="post" action="{{route('cliente.store')}}">

                              @csrf
                              <input type="txt_Autor" class="form-control" id="txtAutor" name ="txtNombre" placeholder="" value="{{Auth::user()->id}}" readonly onmousedown="return false">
                              <div class="row mb-3">
                                <label for="inputAutor" class="col-sm-2 col-form-label"> Autor : </label>
                                <div class="col-sm-10">
                                  <input type="txt_Autor" class="form-control" id="" name ="txtAutor" placeholder="" value="{{Auth::user()->name}}" readonly onmousedown="return false">
                                  </div>
                              </div>
                              {{--Departamento--}}
                              <div class="row mb-3">
                                <label for="inputDepa" class="col-sm-2 col-form-label">Dpto. : </label>
                                <div class="col-sm-10">
                                  <select name="txtDepartamento" id="" class="form-control" style="background: #e9d7f5de" value="">
                                    
                                      
                                    <option selected disabled="disabled" value="" style="background: #e9d7f5de">Selecciona Dpto:</option>
                                    
                                    @foreach($ConsultaDep as $departamento)
                                        <option value="{{$departamento->id_dep}}">{{$departamento->Nombre}}</option>
                                    
                                    @endforeach
                                  </select>
                                  
                                </div>
                                <p class="text-primary fst-italic">{{$errors->first('txtDepartamento')}}</p>
                              </div>

                            {{--Fecha--}}
                              <div class="row mb-3">
                                <label for="inputFecha" class="col-sm-2 col-form-label"> Fecha : </label>
                                <div class="col-sm-10">
                                    
                                    <input
                                      id="fechaAdd" type="date" name="txtFecha" class="form-control"/>
                                </div>
                                <p class="text-primary fst-italic">{{$errors->first('txtFecha')}}</p>
                              </div>
                            {{--Clasificación--}}

                            <div class="row mb-3">
                              <label for="inputClasif" class="col-sm-2 col-form-label"> Clasif.: </label>
                                <div class="col-sm-10">
                                  <select name="txtClasificacion" id="" class="form-control" style="background: #e9d7f5de" value="">

                                    <option selected disabled="disabled" value="" style="background: #e9d7f5de">Selecciona clasificación:</option>
                                      
                                      @foreach($ConsultaCla as $clasificacion)
                                          <option value="{{$clasificacion->id_cla}}">{{$clasificacion->Nombre}}</option>
                                      
                                      @endforeach
                                  </select>
                                </div>
                                <p class="text-primary fst-italic">{{$errors->first('txtClasificacion')}}</p>
                            </div>
                              {{--Detalles--}}
                              <div class="row">
                                <label for="inputDetalles" class="col-sm-2 col-form-label"> Detalle </label>
                                <div class="col-sm-10">
                                  <textarea type="txt_Detalles" class="form-control" name ="txtDetalle"id="txtDetalles" 
                                  placeholder="Deja alguna observación." rows="3"></textarea>
                                </div>
                              </div>
                              <input type="txt_Autor" class="form-control" id="txtAutor" name ="txtStatus" placeholder="" value="1" readonly onmousedown="return false">
                              


                              
                              <button type="submint" class="btn btn-outline-light" style="background-color: blueviolet">Solicitar</button>
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

