@extends('plantillaJ')
@section('titulo')
      

    Tickets

@stop
@section('contenido')



<div class="container mt-5 col-md-10 " >
  
      <h1 class=" mt-4 text-center text-white fw-bold">Auxiliares</h1>
      
      <div class="container">
        <table>
          <tr>
            <td>
              <h1 style="color:transparent;">..........</h1>
            </td>
            <td>
              <form action="" method="GET" class="form-inline my-2-lg-0 float-right" id="fo">

              <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                <div class="col-auto">
                  
                <button class="btn btn-outline-light" style="background-color:#561088 " name="reporte" type="submit">
                  <img src="{{asset('img/reporte.png')}}" alt="" id="searchicon" 
                width="50" height="50"> Descargar </button>
              </div>
              </div>
                  {{--BARRA DE BUSQUEDA--}}
                
                  
            </td>
            <td>
              
                  
                    ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
                    <h1 style="color:transparent;">..................................................
                    .................
                    </h1>
                
                
             
            </td>
            <td>
              <div>
                <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                  
                  @if(session()->has('ConsultaUsu'))
                  <?php

                  $busqueda = session()->get('busqueda');
                  
                      
                  ?>
                  <input type="text" name ="busqueda" class="form-control text-center form-control" placeholder="Buscar auxiliar" aria-describedby="button-addon2" id="in" height="35" value={{$busqueda}}>
                  @endif
                  <div class="row g-3">
                      <div class="col-auto">
                        <input type="text" name ="busqueda" class="form-control text-center form-control" placeholder="Buscar auxiliar" aria-describedby="button-addon2" id="in" height="35" value={{$busqueda}}>
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
        
          
          </td>
          </tr>
        </table>
          

    <table class=" table text-center text-white" id="hey">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido materno</th>
            <th scope="col">Correo</th>
            
            <th scope="col">Tickets Asignados</th>
      
                
          </tr>
        </thead>
        <body>
          @foreach($ConsultaUsu as $consulta)
          <tr>
          
            <th scope="row">{{$consulta->id}}</th>
            <td>{{$consulta->name}}</td>
            <td>{{$consulta->Ape_pat}}</td>
            <td>{{$consulta->Ape_mat}}</td>
            <td>{{$consulta->email}}</td>
           
            <td><button class="btn btn-outline-light" type="button" data-bs-toggle="modal" id ="b"data-bs-target="#modalConsultarTickets-{{$consulta->id}}" style="background-color: blueviolet">
              <img src="{{asset('img\recibo.png')}}" id="opciones"alt="" >
            </button>
            @include('Jefe.modalConsultarTickets')
          </td>
         
        </tr>
      
     
      
        </body>
       
        @endforeach
        
        
        
      </table>
     
    
    </div>
  </div>
      
</div>
</div>
   
   


 
@stop

 