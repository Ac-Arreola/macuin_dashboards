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
    
      Tickets Asignados
    
</font> 
</h1>
<br>
<br>
<body>
  <div class="container text-center"> 
    <table class=" table text-center " id="hey"
    style=" border-spacing: 8px; border: 1px solid purple;margin-left: auto;
    margin-right: auto; background-color:rgba(220, 149, 220, 0.955); opacity:0.4;">
        <thead>
          <tr>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">#</th>
           
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Departamento</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Clasificación</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Estatus</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Comentarios cliente</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Comentarios auxiliar</th>
            <th scope="col" style="padding: 4px;  border: 1px solid purple;">Fecha</th>
  
            
  
            
      
                
          </tr>
        </thead>
        <tbody>
          
          @foreach($Consultat as $consultaaa)
          <tr>
        <th scope="row" style="padding: 4px;  border: 1px solid purple;">{{$consultaaa->id}}</th>
        
        <td style="padding: 4px;  border: 1px solid purple;">{{$consultaaa->Dpto}}</td>
        <td style="padding: 4px;  border: 1px solid purple;">{{$consultaaa->Clasif}}</td>
        <td style="padding: 4px;  border: 1px solid purple;">{{$consultaaa->estatus}}</td>
        <td style="padding: 4px;  border: 1px solid purple;">{{$consultaaa->com}}</td>
        <td style="padding: 4px;  border: 1px solid purple;">{{$consultaaa->Comentarioaux}}</td>
        <td style="padding: 4px;  border: 1px solid purple;">{{$consultaaa->FECHA}}</td>
       
        
          </tr>
     
        </tbody>
      
        @endforeach
    </table>
  </div>  
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