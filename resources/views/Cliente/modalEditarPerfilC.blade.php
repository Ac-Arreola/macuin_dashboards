<!-- Modal -->
<div class="modal fade" id="modalEditarPerfilC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditarPerfilC" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modal">

      <div class="modal-header text-center">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Editar Perfil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form class="m-4" method="post" action="{{route('cliente.update')}}" enctype="multipart/form-data">
              
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
        <label class="form-label"> Correo: </label>
        <input type="email" class="form-control" name="txtEmail" id="inp" value="{{Auth::user()->email}}" >
        <p class="text-info fst-Italic">{{$errors->first('txtEmail')}}</p>
        
    </div>



<div class="mb-3">
  <label class="form-label" for="foto"> Foto de perfil: </label>
  <input type="file" class="form-control" name="foto" id="inp" value="{{Auth::user()->email}}" >
  <p class="text-info fst-Italic">{{$errors->first('txtEmail')}}</p>
  
</div>



      <div class="modal-footer text-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submint" class="btn btn-primary">Actualizar</button>
      </form>
      </div>
    </div>
  </div>
</div>