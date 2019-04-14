@extends("layouts.plantilla")

@section("header")
@endsection

@section("contenido")


<!-- Start Cards -->
<section class="container mt-5 pt-5">
<div class="card-deck">
  <div class="card mr-5">
    <img src="{{asset('images/registradora.svg')}}" class="card-img-top img-fluid" alt="Tarjeta 1">
    <div class="card-body">
      <h5 class="card-title">Registra tu venta</h5>
      <a class="btn color-p px-5" href="#" role="button">Ir</a>
    </div>
  </div>
  <div class="card mr-5">
    <img src="{{asset('images/registrar.svg')}}" class="card-img-top img-fluid" alt="Tarjeta 2">
    <div class="card-body">
      <h5 class="card-title">Resgistra un producto</h5>
      <a class="btn color-p px-5" href="#" role="button">Ir</a>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('images/listar.svg')}}" class="card-img-top img-fluid" alt="Tarjeta 3">
    <div class="card-body">
      <h5 class="card-title">Consulta tus ventas</h5>
      <a class="btn color-p px-5" href="#" role="button">Ir</a>
    </div>
  </div>
</div>
</section>
<!-- End Cards -->

@endsection

@section("foot")

@endsection
