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
              
              
              <th scope="col">Rol</th>
              <th scope="col">Departamento</th>
              <th scope="col">Email</th>
              
              
              
    
           
              
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
           
              
              
              
      
             
            </tr>
           
          @endforeach
      
      
        </table>
</body>
</html>