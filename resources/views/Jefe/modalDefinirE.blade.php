<!-- Modal -->
<div class="modal fade" id="modalDefinirE" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditarPerfilC" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="modal">
  
        <div class="modal-header text-center">
          <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Definir Encargado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body">
  
          <form class="m-4" method="post" action="{{route('ticket.store')}}">
                
          
  
            <div class="mb-3">
                <label class="form-label"> Selecciona un encargado: </label>
                          <select name="txtRol" id="" class="form-control" style="background: #e9d7f5de" value=" {{ old('txtRol')}}">
                            
                              <option selected disabled="disabled" value="" style="background: #e9d7f5de">Seleccionar:</option>
                     
                            </select>

            <div class="mb-3">
              <label class="form-label"> Observaciones / Comentarios : </label>
              <textarea type="text" class="form-control" name="txtObservaciones" id="inp" value="" ></textarea>
         
          </div>
  
          <div class="mb-3">
            <label class="form-label"> Observaciones del Cliente: </label>
            <textarea type="text" class="form-control" name="txtObservaciones_C" id="inp" value="" ></textarea>
         
        </div>
  

        <div class="modal-footer text-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submint" class="btn btn-primary">Asignar</button>
        </form>
        </div>
      </div>
    </div>
  </div>