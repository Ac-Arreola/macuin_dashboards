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



@if(session()->has('errorr'))
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
        <button type="button" class="btn btn-outline-light mb-4"  style="background-color:#8c3bb2" data-bs-toggle="modal" data-bs-target="#modalRegistrarUsu">
         Agregar Usuario <i class="bi bi-plus-circle"></i>
       </button>
     </div>

  
      {{--BARRA DE BUSQUEDA--}}
     <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
      <div>
        <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
          <div class="row g-3">
              <div class="col-auto">
                <input type="text" name ="busqueda" class="form-control text-center form-control" placeholder="Buscar departamento" aria-describedby="button-addon2" id="in" height="35">
              </div>
              <div class="col-auto">
                <button class="btn btn-outline-light" style="background-color:#7979F7 " type="submit">
                  <img src="{{asset('img/lupass.png')}}" alt="" id="searchicon" 
                  width="35" height="35"></button>
              </div>
          </div>
        </div>
      </div>
    </form>
    {{--BARRA DE BUSQUEDA FIN--}}
  <table class=" table text-center text-white" id="hey">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido paterno</th>
          <th scope="col">Apellido materno</th>
          <th scope="col">Rol</th>
          <th scope="col">Departamento</th>
          <th scope="col">Email</th>
          
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          

       
          
        </tr>
      </thead>
      <tbody>
        @foreach($ConsultaUsu as $consulta)
        <tr>
          <th scope="row">{{$consulta->id}}</th>
          <td>{{$consulta->name}}</td>
          <td>{{$consulta->Ape_pat}}</td>
          <td>{{$consulta->Ape_mat}}</td>
          <td>{{$consulta->roles->Nombre}}</td>
          <td>{{$consulta->departamento->Nombre}}</td>
          <td>{{$consulta->email}}</td>
       
          
          
          <td><button type="button" data-bs-toggle="modal" id ="b"data-bs-target="#editarUsuario-{{$consulta->id}}">
            <img src={!! asset('img\editar.png') !!} id="opciones"alt="" ></td>
          </button>
          <td><button type="button" data-bs-toggle="modal" id ="b"data-bs-target="#eliminarUsuario-{{$consulta->id}}">
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

</div>
 
  @endsection
 