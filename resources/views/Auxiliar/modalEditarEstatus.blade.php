
<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalEditarEstatus-{{$consultas->id}}" data-bs-backdrop="static" 
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditarEstatus" 
        aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">

{{--header--}}
    <div class="modal-header mb-4">
      <h5 class="modal-title text-black" id="staticBackdropLabel">Cambio de estatus</h5>
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
          
          
          <form class="m-4 text-black" method="post" action="{{route('estatus.editar',$consultas->id)}}">
            
            @csrf

            {!!method_field('PUT')!!}

                          @csrf
                          
                          <h5>{{$consultas->Clasif}}</h5>
                          
                          <div class="row mb-3">
                            <label class="form-label"> Estatus actual : </label>
                            
                              <input type="txt_Autor" class="form-control" id="" name ="txtAutor" placeholder="" value="{{$consultas->estatus}}" readonly onmousedown="return false">
                              
                          </div>
                          <div class="mb-3">
                            <label class="form-label"> Editar estatus: </label>
                                      <select name="txtEstatus" id="" class="form-control" style="background: #e9d7f5de" value="" >
                                        
                                          
                                          <option selected disabled="disabled" value="" style="background: #e9d7f5de">Selecciona Estatus:</option>
                                          
                                         @foreach($consultaStat as $esta)
                                         @if($esta->id_sta>2 && $esta->id_sta<6)
                                         
                                              <option value="{{$esta->id_sta}}">{{$esta->Nombre}}</option>
                                              
                                          @endif
                                         @endforeach
                                        </select>
                          </div>

                          
                          <button type="submint" class="btn btn-outline-light" style="background-color: blueviolet">Aceptar</button>

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
   
    </div>

  </div>
</div>
</div>