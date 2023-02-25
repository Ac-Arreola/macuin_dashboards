<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
    <link rel="icon" href="./img/desbloquear.png">
    <link rel="stylesheet" href="{{ asset('css\styles.css') }}">
</head>
<body id="bod">
    
    
    @if(session()->has('Noingresado'))
{!! "<script>Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Verifica tus credenciales',
})</script> "!!}
@endif
    <div class="container1">
        <div class="container_form">
            <img src="./img/usuario.png" alt="" id="img">
            <h2>Iniciar Sesion</h2>
            <form action="Ingresar" method="POST">
                @csrf

                <input type="text" placeholder="Email" name="email">
                <p class="text-info fst-Italic">{{$errors->first('email')}}</p>
                <input type="password" placeholder="password" name="password">
                <p class="text-info fst-Italic">{{$errors->first('password')}}</p>
               <input class="boton" type="submit" value="Iniciar Sesion">
            </form>

        </div>
    </div>
</body>
</html>