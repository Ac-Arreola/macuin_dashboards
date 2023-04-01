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
    
      Tickets en proceso o finalizados
    
</font> 
</h1>
<br>
<br>
<body>
    <table class="table modalfon text-light text-center"
    style=" border-spacing: 8px; border: 1px solid purple;margin-left: auto;
    margin-right: auto; background-color:rgba(220, 149, 220, 0.955); opacity:0.4;">
        <thead>
          <tr>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">No.:</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Dpto.:</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Clasificación:</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Observaciones:</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Estatus:</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Fecha:</th>
           
          </tr>
        </thead>
        <tbody>
          @foreach($consultaId as $consultas)
          
            <tr>
              @if($consultas->status>=3)
              <th scope="row" style="padding: 4px;  border: 1px solid purple;">{{$consultas->Id}}</th>
              <td style="padding: 4px;  border: 1px solid purple;"> {{$consultas->Dpto}}</td>
              <td style="padding: 4px;  border: 1px solid purple;"> {{$consultas->Clasif}}</td>
              <td style="padding: 4px;  border: 1px solid purple;">{{$consultas->Comentarios_cli}} </td>
              <td style="padding: 4px;  border: 1px solid purple;">{{$consultas->estatus}}</td>  
              <td style="padding: 4px;  border: 1px solid purple;">{{$consultas->FECHA}}</td>
             


              
                     
                
                
                @endif
            </tr>
        
         
          @endforeach
        </tbody>
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