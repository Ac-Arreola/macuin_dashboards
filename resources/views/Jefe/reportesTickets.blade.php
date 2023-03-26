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
           
            <th scope="col">Departamento</th>
            <th scope="col">Clasificación</th>
            <th scope="col">Estatus</th>
            <th scope="col">Comentarios cliente</th>
            <th scope="col">Comentarios auxiliar</th>
            <th scope="col">Fecha</th>
  
            
  
            
      
                
          </tr>
        </thead>
        <tbody>
          
          @foreach($Consultat as $consultaaa)
          <tr>
        <th scope="row">{{$consultaaa->id}}</th>
        
        <td>{{$consultaaa->Dpto}}</td>
        <td>{{$consultaaa->Clasif}}</td>
        <td>{{$consultaaa->estatus}}</td>
        <td>{{$consultaaa->com}}</td>
        <td>{{$consultaaa->Comentarioaux}}</td>
        <td>{{$consultaaa->FECHA}}</td>
       
        
          </tr>
     
        </tbody>
      
        @endforeach
      </table>
</body>
</html>