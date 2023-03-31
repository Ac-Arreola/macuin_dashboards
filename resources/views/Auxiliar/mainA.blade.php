@extends('plantillaA')
@section('titulo')
    Home _A
@stop
@section('contenido')



@if(session()->has('Auxiliar'))

{!! " <script> Swal.fire(
 'Correcto!',
 'Bienvenido Auxiliar',
 'success'  ) </script> "!!}
@endif
{{--IMÁGEN LOGO--}}
<div class="text-center mt-4" >
  <img src="{{asset('img\fondorecort.png')}}" width="80%" height="300" role="img" width="100%" height="100%" >
 </div>

 {{--CARRUSEL DE IMÁGENES--}}       
<div class="container mt-5 mb-5">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/team3.jpg" class="d-inline-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/team2.jpg" class="d-inline-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/team3.jpg" class="d-inline-block" alt="...">
      </div>
    </div>
  </div>
  

</div>
@stop