<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <img src="img/degradado.png"  style="opacity: 0.4;" alt="" width="102%" height="20">
    <div class="input-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
      <table class="text-white" style="border-spacing: 30px;">
        <td>
          <img src="img/mc.png"  style="opacity: 0.5;  padding: 15px;" alt="" width="100" height="100">
        </td>
        <td>
          <h1 class="font-family: cursive;">
            <i>
              <font color="purple"> 
                <big><big>
                    Macuin Dashboards            
                </big> </big> 
              </font>  
            </i>
          </h1>
        </td>
        </table>
    </div>
  <img src="img/degradado.png"  style="opacity: 0.4;" alt="" width="102%" height="20">
</head>
<br>
<br>
<h1 class="font-family: cursive;">
  <font color="purple"> 

      Usuarios

</font> 
</h1>
<br>
<br>
<body>
    <table class=" table text-center text-white" id="hey">
        <thead>
            <tr>
              <th scope="col" style="padding: 4px;  border: 1px solid purple;">#</th>
              <th scope="col" style="padding: 4px;  border: 1px solid purple;">Nombre</th>
              
              
              <th scope="col" style="padding: 4px;  border: 1px solid purple;">Rol</th>
              <th scope="col" style="padding: 4px;  border: 1px solid purple;">Departamento</th>
              <th scope="col" style="padding: 4px;  border: 1px solid purple;">Email</th>
              
              
              
    
           
              
            </tr>
          </thead>
          <tbody>
            @foreach($ConsultaUsu as $consulta)
            <tr>
              <th scope="row"  style="padding: 4px;  border: 1px solid purple;">{{$consulta->id}}</th>
              <td style="padding: 4px;  border: 1px solid purple;">{{$consulta->nombre}}</td>
              
              <td style="padding: 4px;  border: 1px solid purple;">{{$consulta->Roles}}</td>
              <td style="padding: 4px;  border: 1px solid purple;">{{$consulta->Departamentos}}</td>
              <td style="padding: 4px;  border: 1px solid purple;">{{$consulta->email}}</td>
           
              
              
              
      
             
            </tr>
           
          @endforeach
      
      
        </table>
</body>
<br>
<br>
<br>
<br>
<br>
<footer>
  <p class="font-family: cursive;" style="text-align: right">
    <i>
      <font color="purple" >
        <big>
          Macuin Dashboards CopyRight®
        </big>  
      </font>
    </i>

  </p>
</footer>
</html>