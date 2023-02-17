@extends('plantillaJ')
@section('titulo')

    Home _J
@stop
@section('contenido')
@if(session()->has('confirmacion'))
<?php

        $nom = session()->get('txtNombre');
            
        ?>
{!! " <script> Swal.fire(

 'Correcto!',
 'Departamento {$nom} guardado',
 'success'  ) </script> "!!}
@endif
@if(session()->has('Actualizado'))
<?php

        $nom = session()->get('txtNombre');
            
        ?>
{!! " <script> Swal.fire(
 'Correcto!',
 'Departamento {$nom} Actualizado',
 'success'  ) </script> "!!}
@endif


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
        @foreach($ConsultaDep as $consulta)
        <tr>
          <th scope="row">{{$consulta->id_dep}}</th>
          <td>{{$consulta->Nombre}}</td>
          <td>{{$consulta->Descripcion}}</td>
          
          
          <td><button type="button" data-bs-toggle="modal" id ="b"data-bs-target="#editarDepartamento-{{$consulta->id_dep}}">
            <img src={!! asset('img\editar.png') !!} id="opciones"alt="" ></td>
          </button>
          <td><button type="button" data-bs-toggle="modal" id ="b"data-bs-target="#eliminarDepartamento-{{$consulta->id_dep}}">
            <img src={!! asset('img\borrar.png') !!} id="opciones" alt="">
        </button>
          </td>
  
          
        </tr>
        @include('Jefe.editarDepartamento')
        @include('Jefe.eliminarDepartamento')

       
        @endforeach
      </tbody>
    </table>
  
      
  </div>
  
  @stop