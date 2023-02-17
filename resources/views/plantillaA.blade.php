<!DOCTYPE html>
<html lang="es">

<head>
{{--IMPORTACIONES--}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\styles.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Repaso | @yield('titulo')</title>
</head>
{{-- INICIA BODY --}}
<body background="img\fondosolido.png">
{{--
<body style="background-color: #ccb7d8fa #cdc0dc">
  --}}
    <div class="wrapper">
    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg " style="background-color: #8c3bb2" >
        <div class="container-fluid">
          <button type="button" class="btn btn-outline-light" 
          style="background-color: #e9ace4fa" 
          data-bs-toggle="tooltip" data-bs-placement="bottom" 
          title="Home">
          <img src="{{asset('img/home.png')}}" alt="" id="casaicon" 
          width="35" height="40"><a href="apodoPrincipal"></a></button>

          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link active text-light fw-bold" aria-current="page" 
                href="perfilA"> Editar perfil   | </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light fw-bold" aria-current="page" 
                href="#"> Tickets nuevos   | </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light fw-bold" aria-current="page" 
                href="#"> Tickets asignados   | </a>
              </li>
            </ul>
          </div>
          <button type="button" class="btn btn-outline-light" 
          style="background-color: #e9ace4fa" 
          data-bs-toggle="tooltip" data-bs-placement="bottom" 
          title="Cerrar sesión">
          <img src="{{asset('img/close.png')}}" alt="" id="casaicon" 
          width="35" height="40"><a href="apodoPrincipal"></a></button>
        </div>
      </nav>
</div>

    <!-- Contenido -->
    
        @yield('contenido')

       


    <!-- Pie de Página -->
    <footer class="footer alert alert-secondary text-white" style="background-color: #721dc2fa">
        Macuin Dashboards CopyRight®  {{ date('D/M/Y') }}
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>

