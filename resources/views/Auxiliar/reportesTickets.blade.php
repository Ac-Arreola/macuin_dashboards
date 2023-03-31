<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
</head>
<body>
    <table class="table modalfon text-light text-center">
        <thead>
          <tr>
            <th scope="col">No.:</th>
            <th scope="col">Dpto.:</th>
            <th scope="col">Clasificación:</th>
            <th scope="col">Observaciones:</th>
            <th scope="col">Estatus:</th>
            <th scope="col">Fecha:</th>
           
          </tr>
        </thead>
        <tbody>
          @foreach($consultaId as $consultas)
          
            <tr>
              @if($consultas->status>=3)
              <th scope="row">{{$consultas->Id}}</th>
              <td > {{$consultas->Dpto}}</td>
              <td > {{$consultas->Clasif}}</td>
              <td >{{$consultas->Comentarios_cli}} </td>
              <td >{{$consultas->estatus}}</td>  
              <td >{{$consultas->FECHA}}</td>
             


              
                     
                
                
                @endif
            </tr>
        
         
          @endforeach
        </tbody>
      </table>
             
</body>
</html>