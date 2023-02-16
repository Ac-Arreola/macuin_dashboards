<!-- Modal -->
<div class="modal fade" id="modalRegistrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRegistrar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header text-center">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar Departamento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body text-center">

          <form class="m-4" method="post" action="">
                
            @csrf

            <div class="mb-3 text-center">
                <label class="form-label"> Departamento: </label>
                <input type="text" class="form-control" name="txtTitulo" id="" value="{{old('txtTitulo')}}" >
                <p class="text-info fst-Italic">{{$errors->first('txtTitulo')}}</p>
                
            </div>
                
                
                
                <div class="mb-3 text-center">
                    <label class="form-label"> Descripción: </label>
                    <textarea type="text" class="form-control" name="txtDescripcion" id="" value="{{old('txtRecuerdo')}}"></textarea>
                    <p class="text-info fst-Italic">{{$errors->first('txtRecuerdo')}}</p>
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