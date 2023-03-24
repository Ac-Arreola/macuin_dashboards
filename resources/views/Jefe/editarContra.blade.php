<!-- Modal -->
<div class="modal fade" id="editarContra-{{$consulta->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editarContra" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="modal">

        <div class="modal-header text-center">
          <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Actualizar Contraseña</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <form class="m-4" method="post" action={{route('usuario.editar',$consulta->id)}}>
                
            @csrf

            {!!method_field('PUT')!!}

            <div class="mb-3">
                <label class="form-label"> Nombre: </label>
                <input type="text" class="form-control" name="txtNombre" id="inp" value="{{$consulta->name}}" readonly onmousedown="return false" >
                <p class="text-info fst-Italic">{{$errors->first('txtNombre')}}</p>
                
            </div>
                
            <div class="mb-3">
                <label class="form-label"> Contraseña: </label>
                <input type="password" class="form-control" name="txtPassword" id="inp">
                <p class="text-info fst-Italic">{{$errors->first('txtPassword')}}</p>
            </div>
  
            <div class="mb-3">
              <label class="form-label"> Confirme Contraseña: </label>
              <input type="password" class="form-control" name="txtConPassword" id="inp">
              <p class="text-info fst-Italic">{{$errors->first('txtConPassword')}}</p>
          </div>
                
        <div class="modal-footer text-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submint" class="btn btn-primary">Actualizar</button>
        </form>
        </div>
      </div>
    </div>
  </div>