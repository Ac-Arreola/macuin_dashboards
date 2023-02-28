<!-- Modal -->
<div class="modal fade" id="modalEditarPerfilA" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditarPerfilA" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modal">

      <div class="modal-header text-center">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Actualizar Perfil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form class="m-4" method="post" action="{{route('auxiliar.update')}}">
              
          @csrf

          {!!method_field('PUT')!!}

          <div class="mb-3">
              <label class="form-label"> Nombre: </label>
              <input type="text" class="form-control" name="txtNombre" id="inp" value="{{Auth::user()->name}}" >
              <p class="text-info fst-Italic">{{$errors->first('txtNombre')}}</p>
              
          </div>
              
              
              
          <div class="mb-3">
            <label class="form-label"> Apellido paterno: </label>
            <input type="text" class="form-control" name="txtApe_pat" id="inp" value="{{Auth::user()->Ape_pat}}" >
            <p class="text-info fst-Italic">{{$errors->first('txtApe_pat')}}</p>
        </div>

        <div class="mb-3">
          <label class="form-label"> Apellido materno: </label>
          <input type="text" class="form-control" name="txtApe_mat" id="inp" value="{{Auth::user()->Ape_mat}}" >
          <p class="text-info fst-Italic">{{$errors->first('txtApe_mat')}}</p>
      </div>

      <div class="mb-3">
        <label class="form-label"> Contraseña: </label>
        <input type="password" class="form-control" name="txtPassword" id="inp" value="" >
        <p class="text-info fst-Italic">{{$errors->first('txtPassword')}}</p>
    </div>

    <div class="mb-3">
      <label class="form-label"> Confirma contraseña: </label>
      <input type="password" class="form-control" name="txtConPassword" id="inp" value="" >
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