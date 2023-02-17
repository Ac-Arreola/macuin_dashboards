@extends('plantillaJ')
@section('titulo')

    Home _J
@stop
@section('contenido')
<div class="container mt-5 col-md-10 " >
    <h1 class=" mt-4 text-center text-white fw-bold">Departamentos</h1>
    @include('Jefe.agregarDepartamento')
    
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegistrarDep">
         Agregar Departamento <i class="bi bi-plus-circle"></i>
       </button>
     </div>
  
      <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
        <div class="input-group mb-3 col-md-3">
          <input type="text" name ="busqueda"class="form-control text-center" placeholder="Buscar departamento" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
          <button class="btn btn-outline-secondary" type="submit" id="buton">Buscar</button>
        </div>
      </form>
  <table class=" table text-center text-white" id="hey">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Editar</th>
          <th scope="col">Borrar</th>

       
          
        </tr>
      </thead>
      <tbody>
       
        <tr>
          <th scope="row"></th>
          <td></td>
          <td></td>
          
          
          <td><a href=><img src={!! asset('img\editar.png') !!} id="opciones"alt=""></td></a>
          <td><a href=>
            <img src={!! asset('img\borrar.png') !!} id="opciones" alt="">
          </a>
          </td>
  
          
        </tr>
  
      </tbody>
    </table>
  
      
  </div>
  
  @stop