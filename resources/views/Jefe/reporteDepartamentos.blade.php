<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
</head>
<body>
    <table class=" table text-center text-white" id="hey">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
           
  
         
            
          </tr>
        </thead>
        <tbody>
          @foreach($ConsultaDep as $consulta)
          <tr>
            <th scope="row">{{$consulta->id_dep}}</th>
            <td>{{$consulta->Nombre}}</td>
            <td>{{$consulta->Descripcion}}</td>
            
            
           @endforeach
    
            
          </tr>
          
  
         
         
        </tbody>
      </table>
</body>
</html>