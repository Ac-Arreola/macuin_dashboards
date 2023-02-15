<!DOCTYPE html>
<html lang="es">

<head>
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
<body background="img\fondosolido.png">
  
{{--</body>
<body style="background-color: #ccb7d8fa #cdc0dc">--}}
    <div class="wrapper">
    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg " style="background-color: #8c3bb2" >
        <div class="container-fluid">
          <button type="button" class="btn btn-outline-light" 
          style="background-color: #e9ace4fa" 
          data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">
          <img src="{{asset('img/home.png')}}" alt="" id="casaicon" width="35" height="40"><a href="apodoPrincipal"></a></button>
          {{--
          <a class="navbar-brand" href="#" style="background-color: #e9ace4fa" ><img src="{{asset('img/home.png')}}" alt="" id="casaicon" width="40" height="40"></a>
          <button class="navbar-toggler btn btn-outline-light" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
          </button>--}}
          {{--
          <a class="navbar-brand" href="#"><img src="{{asset('imgs/libros.png')}}" alt="" id="libroNav" width="40" height="40"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('libroIndex')}}">Ver libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" {{ request()->routeIs('libroIndex')? '':'Hidden' }}  href="{{route('libroCreate')}}">Registrar libro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('autorIndex')}}">Ver autores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" {{ request()->routeIs('autorIndex')? '':'Hidden' }}  href="{{route('autorCreate')}}">Registrar Autor</a>
              </li>
            </ul>
          </div>
          --}}
        </div>
      </nav>

      
      <div class="text-center mt-4" >
        <img src="{{asset('img\fondorecort.png')}}" width="80%" height="300" role="img" width="100%" height="100%" >
       </div>


    <!-- Contenido -->
    
        @yield('contenido')
    </div>



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

