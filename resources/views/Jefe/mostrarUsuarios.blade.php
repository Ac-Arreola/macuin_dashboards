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
 'Usuario {$nom} guardado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Actualizado'))
<?php

        $nom = session()->get('txtNombre');
            
        ?>
{!! " <script> Swal.fire(
 'Correcto!',
 'Usuario {$nom} Actualizado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('Eliminado'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Usuario Eliminado',
 'success'  ) </script> "!!}
@endif

@if(session()->has('error'))
{!! "<script>Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'No tienes credenciales para este departamento!',
})</script> "!!}
@endif


<div class="container mt-5 col-md-10 " >
  
    <h1 class=" mt-4 text-center text-white fw-bold">Usuarios</h1>
   
    
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegistrarUsu">
         Agregar Usuario <i class="bi bi-plus-circle"></i>
       </button>
     </div>

  
      <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
        <div class="input-group mb-3 col-md-3">
          <input type="text" name ="busqueda"class="form-control text-center" placeholder="Buscar usuario" aria-label="Recipient's username" aria-describedby="button-addon2" id="in">
          <button class="btn btn-outline-secondary" type="submit" id="buton">Buscar</button>
        </div>
      </form>
  <table class=" table text-center text-white" id="hey">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido paterno</th>
          <th scope="col">Apellido materno</th>
          <th scope="col">Rol</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          

       
          
        </tr>
      </thead>
      <tbody>
        @foreach($ConsultaUsu as $consulta)
        <tr>
          <th scope="row">{{$consulta->id_usu}}</th>
          <td>{{$consulta->Nombre}}</td>
          <td>{{$consulta->Ape_pat}}</td>
          <td>{{$consulta->Ape_mat}}</td>
          <td>{{$consulta->id_rol}}</td>
          <td>{{$consulta->Username}}</td>
          <td>{{$consulta->Email}}</td>
          <td>{{$consulta->Password}}</td>
          
          
          <td><button type="button" data-bs-toggle="modal" id ="b"data-bs-target="#editarUsuario-{{$consulta->id_usu}}">
            <img src={!! asset('img\editar.png') !!} id="opciones"alt="" ></td>
          </button>
          <td><button type="button" data-bs-toggle="modal" id ="b"data-bs-target="#eliminarUsuario-{{$consulta->id_usu}}">
            <img src={!! asset('img\borrar.png') !!} id="opciones" alt="">
        </button>
          </td>
  
         
        </tr>
        @include('Jefe.editarUsuario')
        
        
       
        
      </tbody>
      @include('Jefe.eliminarUsuario')
      
      @endforeach
  
  
    </table>
    
@include('Jefe.agregarUsuario')
   
  </div>
  
 
  @stop
 