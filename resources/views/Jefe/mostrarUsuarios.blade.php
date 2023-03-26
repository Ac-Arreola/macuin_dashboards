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

@if(session()->has('contrasena'))
{!! " <script> Swal.fire(
  'Correcto!',
  'Contraseña editada',
  'success'  ) </script> "!!}
@endif



<div class="container mt-5 col-md-10 " >
  
    <h1 class=" mt-4 text-center text-white fw-bold">Usuarios</h1>
   
    
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-light mb-4"  style="background-color:#8c3bb2" data-bs-toggle="modal" data-bs-target="#modalRegistrarUsu">
         Agregar Usuario <i class="bi bi-plus-circle"></i>
       </button>
     </div>

  
     <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
      <table class="text-white">
        <tr>
          <th>Nombre</th>
          <th>Rol</th>
          <th></th>
        </tr>
        <tr>
          <td>
              {{-- BARRA BUSQUEDA --}}
              <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
                <div>
                  <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md">
                    <div class="row g-3">
        @if(session()->has('ConsultaUsu'))
        <?php

        $busqueda_nombre = session()->get('busqueda_nombre');
            
        ?>
        <input type="text" name ="busqueda_nombre" class="form-control text-center form-control" 
        placeholder="Busqueda por nombre" id="in" height="35" value={{$busqueda_nombre}}>
        
        @endif
                      </div>
                      {{--input departamento --}}
                        <div class="col-9">
                          <input type="text" name ="busqueda_nombre" class="form-control text-center form-control" 
                          placeholder="Busqueda por nombre" id="in" height="35" value={{$busqueda_nombre}}>
                        </div>
                      {{--input departamento fin--}}
                      {{--icono btn busqueda --}}
                        <div class="col-auto">
                          <button class="btn btn-outline-light" style="background-color:#7979F7 " type="submit">
                            <img src="{{asset('img/lupass.png')}}" alt="" id="searchicon" 
                            width="18" height="18"></button>
                        </div>
                      {{--icono btn busqueda fin --}}
                    </div>
                  </div>
              
              {{--BARRA BUSQUEDA FIN--}}
          </td>
          <td>
            {{-- BARRA BUSQUEDA --}}
            
              
              <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md">
                <div class="row g-3 gap-3">
                  
                  @if(session()->has('ConsultaUsu'))
                  <?php
                  
                  $busqueda_rol = session()->get('busqueda_rol');
                  ?>
                  <input type="text" name ="busqueda_nombre" class="form-control text-center form-control" 
                  placeholder="Busqueda por rol" id="in" height="35" value={{$busqueda_rol}}>

                @endif
                 
                  </div>
                  {{--input fecha --}}
                    <div class="col-9">
                      <input type="text" name ="busqueda_rol" class="form-control text-center form-control" 
                      placeholder="Busqueda por rol"  id="in" height="35" value={{$busqueda_rol}}>

                         </div>
                    {{--input fecha fin --}}
                    {{--icono btn busqueda fin --}}
                    <div class="col-auto">
                      <button class="btn btn-outline-light" style="background-color:#7979F7 " type="submit">
                        <img src="{{asset('img/lupass.png')}}" alt="" id="searchicon" 
                        width="18" height="18"></button>
                    </div>
                    {{--icono btn busqueda fin --}}
                 
                </div>
              
         
          {{--BARRA BUSQUEDA FIN--}}
          </td>
          <td>
            <div class="col-auto">
              <button class="btn btn-outline-light" style="background-color:#561088 " name="reporte" type="submit">
                <img src="{{asset('img/reporte.png')}}" alt="" id="searchicon" 
                width="50" height="50"></button>
              </div>
          </td>
        </form>
          
          
        </tr>
      </table>
      </div>
  <table class=" table text-center text-white" id="hey">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          
          
          <th scope="col">Rol</th>
          <th scope="col">Departamento</th>
          <th scope="col">Email</th>
          
          <th scope="col">Editar</th>
          <th scope="col">Cambiar contra</th>
          <th scope="col">Eliminar</th>
          

       
          
        </tr>
      </thead>
      <tbody>
        @foreach($ConsultaUsu as $consulta)
        <tr>
          <th scope="row">{{$consulta->id}}</th>
          <td>{{$consulta->nombre}}</td>
          
          <td>{{$consulta->Roles}}</td>
          <td>{{$consulta->Departamentos}}</td>
          <td>{{$consulta->email}}</td>
       
          
          
          <td><button type="button" data-bs-toggle="modal" id ="b"data-bs-target="#editarUsuario-{{$consulta->id}}">
            <img src={!! asset('img\usuario(5).png') !!} id="opciones"alt="" ></td>
          </button>

          <td><button type="button" data-bs-toggle="modal" id ="b"data-bs-target="#editarContra-{{$consulta->id}}">
            <img src={!! asset('img\contrasena.png') !!} id="opciones" alt="">
        </button>
          <td><button type="button" data-bs-toggle="modal" id ="b"data-bs-target="#eliminarUsuario-{{$consulta->id}}">
            <img src={!! asset('img\borrar.png') !!} id="opciones" alt="">
        </button>
          </td>
  
         
        </tr>
        @include('Jefe.editarUsuario')
       
        
       
        
      </tbody>
      @include('Jefe.eliminarUsuario')
      @include('Jefe.editarContra')
      
      @endforeach
  
  
    </table>
    

   
    @include('Jefe.agregarUsuario')
  </div>

</div>
 
  @endsection
 