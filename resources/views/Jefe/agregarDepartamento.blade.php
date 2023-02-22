<!-- Modal -->
<div class="modal fade" id="modalRegistrarDep" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRegistrarDep" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modal">

      <div class="modal-header text-center">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Registrar Departamento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form class="m-4" method="post" action="{{route('departamento.store')}}">
              
          @csrf

          <div class="mb-3">
              <label class="form-label"> Departamento: </label>
              <input type="text" class="form-control" name="txtNombre" id="inp" value="{{old('txtNombre')}}" >
              <p class="text-info fst-Italic">{{$errors->first('txtNombre')}}</p>
              
          </div>
              
              
              
              <div class="mb-3">
                  <label class="form-label"> Descripción: </label>
                  <textarea type="text" class="form-control" name="txtDescripcion" id="inp" value="{{old('txtDescripcion')}}"></textarea>
                  <p class="text-info fst-Italic">{{$errors->first('txtDescripcion')}}</p>
              </div>
             
      </div>  
      

      <div class="modal-footer text-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submint" class="btn btn-primary">Insertar</button>
      </form>
      </div>
    </div>
  </div>
</div>