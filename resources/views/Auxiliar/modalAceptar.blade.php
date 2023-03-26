
<!-- Modal -->
{{--Cambiamos el id y el aria-labellely--}}
<div class="modal fade" id="modalAceptar-{{$consultas->id}}" data-bs-backdrop="static" 
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAceptar" 
            aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

    {{--header--}}
        <div class="modal-header mb-4">
          <h5 class="modal-title text-black" id="staticBackdropLabel">¿Estas seguro de aceptar el ticket?</h5>
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
              
              
              <form class="m-4 text-black" method="post" action="{{route('aceptar.editar',$consultas->id)}}">
                
                @csrf
    
                {!!method_field('PUT')!!}

                              @csrf
                              
                              
                              <h4>Clasificación</h4>
                              <h5>{{$consultas->Clasif}}</h5>
                              <h4>Descripción</h4>
                              <h5 >{{$consultas->Comentarios_cli}}</h5>

                              
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