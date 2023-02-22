<!-- Modal -->
<div class="modal fade" id="editarUsuario-{{$consulta->id_usu}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editarUsuario" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="modal">

        <div class="modal-header text-center">
          <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Actualizar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <form class="m-4" method="post" action="{{route('usuario.update',$consulta->id_dep)}}">
                
            @csrf

            {!!method_field('PUT')!!}

            <div class="mb-3">
                <label class="form-label"> Nombre: </label>
                <input type="text" class="form-control" name="txtNombre" id="inp" value="{{$consulta->Nombre}}" >
                <p class="text-info fst-Italic">{{$errors->first('txtNombre')}}</p>
                
            </div>
                
                
                
            <div class="mb-3">
              <label class="form-label"> Apellido paterno: </label>
              <input type="text" class="form-control" name="txtApe_pat" id="inp" value="{{$consulta->Ape_pat}}" >
              <p class="text-info fst-Italic">{{$errors->first('txtApe_pat')}}</p>
          </div>

          <div class="mb-3">
            <label class="form-label"> Apellido materno: </label>
            <input type="text" class="form-control" name="txtApe_mat" id="inp" value="{{$consulta->Ape_mat}}" >
            <p class="text-info fst-Italic">{{$errors->first('txtApe_mat')}}</p>
        </div>

        <div class="mb-3">
          <label class="form-label"> Username: </label>
          <input type="text" class="form-control" name="txtUsername" id="inp" value="{{$consulta->Username}}" >
          <p class="text-info fst-Italic">{{$errors->first('txtUsername')}}</p>
      </div>

        <div class="mb-3">
          <label class="form-label"> Email: </label>
          <input type="email" class="form-control" name="txtEmail" id="inp" value="{{$consulta->Email}}" >
          <p class="text-info fst-Italic">{{$errors->first('txtEmail')}}</p>
      </div>

      <div class="mb-3">
        <label class="form-label"> Contraseña: </label>
        <input type="password" class="form-control" name="txtPassword" id="inp" value="{{$consulta->Password}}" >
        <p class="text-info fst-Italic">{{$errors->first('txtApe_mat')}}</p>
    </div>

    <div class="mb-3">
      <label class="form-label"> Confirme Contraseña: </label>
      <input type="password" class="form-control" name="txtConPassword" id="inp" value="{{$consulta->Password}}" >
      <p class="text-info fst-Italic">{{$errors->first('txtConPassword')}}</p>
  </div>
        <div class="mb-3">
          <label class="form-label"> Departamento: </label>
                    <select name="txtDepartamento" id="" class="form-control" style="background: #e9d7f5de" value="{{$consulta->id_dep}}" >
                      
                        
                        <option selected disabled="disabled" value="" style="background: #e9d7f5de">Selecciona Departamento:</option>
                        
                        @foreach($ConsultaDep as $departamento)
                            <option value="{{$departamento->id_dep}}">{{$departamento->Nombre}}</option>
                        
                        @endforeach
                       </select>
        </div>


  <div class="mb-3">
    <label class="form-label"> Rol: </label>
              <select name="txtRol" id="" class="form-control" style="background: #e9d7f5de" value="{{$consulta->id_rol}}" >
                
                  
                  <option selected disabled="disabled" value="" style="background: #e9d7f5de">Selecciona Rol:</option>
                  
                  @foreach($ConsultaRol as $Rol)
                      <option value="{{$Rol->id_rol}}">{{$Rol->Nombre}}</option>
                  
                  @endforeach
                </select>
  </div>
        

        <div class="modal-footer text-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submint" class="btn btn-primary">Actualizar</button>
        </form>
        </div>
      </div>
    </div>
  </div>