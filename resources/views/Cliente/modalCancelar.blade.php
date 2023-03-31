<!-- Modal -->
<div class="modal fade" id="modalCancelar-{{$consulta->id_tcli}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCancelar" aria-hidden="true">

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