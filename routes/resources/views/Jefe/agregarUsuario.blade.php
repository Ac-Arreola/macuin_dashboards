<!-- Modal -->
<div class="modal fade" id="modalRegistrarUsu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRegistrarUsu" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="modal">

        <div class="modal-header text-center">
          <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Registrar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <form class="m-4" method="post" action="{{route('usuario.store')}}">
                
            @csrf

            <div class="mb-3">
                <label class="form-label"> Nombre: </label>
                <input type="text" class="form-control" name="txtNombre" id="inp" value="{{old('txtNombre')}}" >
                <p class="text-info fst-Italic">{{$errors->first('txtNombre')}}</p>
                
            </div>
                
                
                
                <div class="mb-3">
                    <label class="form-label"> Apellido paterno: </label>
                    <input type="text" class="form-control" name="txtApe_pat" id="inp" value="{{old('txtApe_pat')}}">
                    <p class="text-info fst-Italic">{{$errors->first('txtApe_pat')}}</p>
                </div>

                <div class="mb-3">
                  <label class="form-label"> Apellido materno: </label>
                  <input type="text" class="form-control" name="txtApe_mat" id="inp" value="{{old('txtApe_mat')}}">
                  <p class="text-info fst-Italic">{{$errors->first('txtApe_mat')}}</p>
              </div>

              

              <div class="mb-3">
                <label class="form-label"> Email: </label>
                <input type="email" class="form-control" name="txtEmail" id="inp" value="{{old('txtEmail')}}">
                <p class="text-info fst-Italic">{{$errors->first('txtEmail')}}</p>
            </div>

            <div class="mb-3">
              <label class="form-label"> Contraseña: </label>
              <input type="password" class="form-control" name="txtPassword" id="inp" value="{{old('txtApe_mat')}}">
              <p class="text-info fst-Italic">{{$errors->first('txtApe_mat')}}</p>
          </div>

          <div class="mb-3">
            <label class="form-label"> Confirme Contraseña: </label>
            <input type="password" class="form-control" name="txtConPassword" id="inp" value="{{old('txtConPassword')}}">
            <p class="text-info fst-Italic">{{$errors->first('txtConPassword')}}</p>
        </div>

        <div class="mb-3">
          <label class="form-label"> Rol: </label>
                    <select name="txtRol" id="" class="form-control" style="background: #e9d7f5de" value=" {{ old('txtRol')}}">
                      
                        
                        <option selected disabled="disabled" value="" style="background: #e9d7f5de">Selecciona Rol:</option>
                        
                        @foreach($ConsultaRol as $Rol)
                            <option value="{{$Rol->id_rol}}">{{$Rol->Nombre}}</option>
                        
                        @endforeach
                      </select>
                      <p class="text-info fst-Italic">{{$errors->first('txtRol')}}</p>
        </div>
              <div class="mb-3">
                <label class="form-label"> Departamento: </label>
                          <select name="txtDepartamento" id="" class="form-control" style="background: #e9d7f5de" value=" {{ old('txtDepartamento')}}">
                            
                              
                              <option selected disabled="disabled" value="" style="background: #e9d7f5de">Selecciona Departamento:</option>
                              
                              @foreach($ConsultaDep as $departamento)
                                  <option value="{{$departamento->id_dep}}">{{$departamento->Nombre}}</option>
                              
                              @endforeach
                             </select>
                             <p class="text-info fst-Italic">{{$errors->first('txtDepartamento')}}</p>
              </div>
      

        
      
               
               
        
        

        <div class="modal-footer text-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submint" class="btn btn-primary">Insertar</button>
        </form>
        </div>
      </div>
    </div>
  </div>