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

@if(session()->has('Eliminado'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Departamento Eliminado',
 'success'  ) </script> "!!}
@endif

<div class="container mt-5 col-md-10 mb-5" >
    <h1 class=" mt-4 text-center text-white fw-bold">Departamentos</h1>
    @include('Jefe.agregarDepartamento')
    
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-light mb-4" style="background-color:#8c3bb2" 
        data-bs-toggle="modal" data-bs-target="#modalRegistrarDep">
         Agregar Departamento <i class="bi bi-plus-circle"></i>
       </button>
     </div>

     <form method="GET" class="form-inline my-2-lg-0 float-right" id="fo">
      <div>
        <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
          
          <div class="row g-3">
              <div class="col-auto">
                
                
        @if(session()->has('ConsultaDep'))
        <?php

        $busqueda = session()->get('busqueda');
        
            
        ?>
        <input type="text" name ="busqueda" class="form-control text-center form-control" placeholder="Buscar departamento" aria-describedby="button-addon2" id="in" height="35" value={{$busqueda}}>
        @endif
         
        
                <input type="text" name ="busqueda" class="form-control text-center form-control" placeholder="Buscar departamento" aria-describedby="button-addon2" id="in" height="35" value={{$busqueda}}>
                
              </div>
              
              <div class="col-auto">
                <button class="btn btn-outline-light" style="background-color:#7979F7 " name="buscar" type="submit">
                  <img src="{{asset('img/lupass.png')}}" alt="" id="searchicon" 
                  width="35" height="35"></button>
              </div>
              <div class="col-auto">
              <button class="btn btn-outline-light" style="background-color:#561088 " name="reporte" type="submit">
                <img src="{{asset('img/reporte.png')}}" alt="" id="searchicon" 
                width="50" height="50"></button>
              </div>
            

          </div>
        </div>
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