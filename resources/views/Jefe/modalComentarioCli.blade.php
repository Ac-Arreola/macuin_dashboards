
<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalComentarioCli-{{$consultaaa->id}}" data-bs-backdrop="static" 
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalComentarioCli" 
        aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">

{{--header--}}
    <div class="modal-header mb-4">
      <h5 class="modal-title text-black" id="staticBackdropLabel">Nuevo comentario</h5>
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
          
          
          <form class="m-4 text-black" method="post" action="{{route('comentario.cliente',$consultaaa->id)}}">
            
            @csrf

            {!!method_field('PUT')!!}

                          @csrf
                          
                          <h5>{{$consultaaa->Clasif}}</h5>
                          
                          <div class="row mb-3">
                            <label class="form-label"> Comentario Cliente : </label>
                            
                              <textarea type="txt_Autor" class="form-control" id="" name ="txtComentariojefe" placeholder=""  readonly onmousedown="return false">{{$consultaaa->com}}</textarea>
                              
                          </div>
                          <div class="row mb-3">
                            <label class="form-label"> Tu comentario anterior : </label>
                            
                              <textarea type="txt_Autor" class="form-control" id="" name ="txtComentarioanterior" placeholder=""  readonly onmousedown="return false">{{$consultaaa->comaux}}</textarea>
                              
                          </div>

                          <div class="row mb-3">
                            <label class="form-label"> Nuevo comentario: </label>
                            
                              <textarea type="txt_Autor" class="form-control" id="" name ="txtNuevoComentario" placeholder="" ></textarea>
                              
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