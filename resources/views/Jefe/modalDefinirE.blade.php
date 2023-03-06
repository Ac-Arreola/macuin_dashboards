<!-- Modal -->
<div class="modal fade" id="modalDefinirE-{{$consulta->id_tcli}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditarPerfilC" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="modal">
  
        <div class="modal-header text-center">
          <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Definir Encargado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body">

          <div class="card text-center  mb-4">
            <div class="card-header "> 
              ㅤ⠀ㅤ
            </div>

          <div class="card-body">
            
  
          <form class="m-4" method="POST" action="{{route('ticket.update',$consulta->id_tcli)}}">
                
            @csrf
  
            <div class="mb-3">
                <label class="form-label"> Selecciona un encargado: </label>
                <select name="txtAuxiliar" id="" class="form-control" style="background: #e9d7f5de" value=" {{ old('txtAuxiliar')}}">
                            
                              
                  <option selected disabled="disabled" value="" style="background: #e9d7f5de">Selecciona :</option>
                  
                  @foreach($ConsultaUsu as $cliente)
                      <option value="{{$cliente->id}}">{{$cliente->name}}</option>
                  
                  @endforeach
                 </select>
                 <p class="text-info fst-Italic">{{$errors->first('txtAuxiliar')}}</p>

            </div>
            <div class="mb-3">
              <label class="form-label"> Fecha de asignación: </label>
              
                  
                  <input
                    id="" type="date" name="txtFecha" value=" {{ old('txtFecha')}}"class="form-control"/>
              
              <p class="text-primary fst-italic">{{$errors->first('txtFecha')}}</p>
           
            </div>

            <div class="mb-3">
              <label class="form-label"> Observaciones del Cliente: </label>
              <textarea type="text" class="form-control" name="txtObservaciones_C" id="inp" readonly onmousedown="return false">{{$consulta->Comentarios}}</textarea>
                      
          </div>

            <div class="mb-3">
              <label class="form-label"> Observaciones / Comentarios : </label>
              <textarea type="text" class="form-control" name="txtObservaciones" id="inp" value="" ></textarea>
              
         
          </div>
  
          
        <input type="txt_Autor" class="form-control" id="txtAutor" name ="txttcli" placeholder="" value="{{$consulta->id_tcli}}" readonly onmousedown="return false">
        <button type="submint" class="btn btn-outline-light" style="background-color: blueviolet">Asignar</button>

      </form>
           </div>

            <div class="card-footer fw-bold">
              ㅤ⠀ㅤ
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         
        
        </div>
      </div>
    </div>
  </div>