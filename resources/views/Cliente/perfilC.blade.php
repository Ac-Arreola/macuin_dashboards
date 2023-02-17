@extends('plantillaC')
@section('titulo')
    Perfil _C
@stop
@section('contenido')

<h2 class="display-1 mt-4 mb-4 fst-italic text-center">Datos de Usuario</h2>
<div class="container col-md-6">
    <div class="row">
        <div class="col-sm-6">
        <div class="card">
            <img src="./img/perfil.png" class="card-img-top" alt="...">
            
        </div>

        </div>
        <div class="col-sm-6">
        <div class="card">
            <form action="">
                <label class="form-label"> Nombre: </label>
                <input type="text" class="form-control" placeholder="" >
                <label class="form-label"> Username: </label>
                <input type="text" class="form-control" placeholder="" >
                <label class="form-label"> Email: </label>
                <input type="email" class="form-control" placeholder="" >
                <label class="form-label"> Password: </label>
                <input type="password" class="form-control" placeholder="" >
            </form>
        </div>
        </div>
    </div>
    <br>
    <br>
    <div class="accordion " id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              TICKETS
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <img src="./img/pestana.png" class="icon" alt="...">
                <label class="form-label"> Solicitar Ticket </label>
              <br>
              <img src="./img/lupas.png" class="icon" alt="...">
              <label class="form-label "> Consulta de  Tickets </label>
            </div>
          </div>
        </div>
        
      </div>
      
</div>

        

@stop