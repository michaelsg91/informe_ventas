@extends("../layouts.plantilla")

@section("contenido")

<div class="container">

  <h4 class="text-center my-5">Registrar Cliente</h4>

<!-- Start form Create Clientes -->
  <form class="needs-validation" method="post" action="/clientes" novalidate>

    <!-- Start if Errors -->
    @if(count($errors)>0)
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    </div>
    @endif
    <!-- End if Errors -->

    <!-- Start if success -->
    @if(Session::has('success'))
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 alert alert-success">
        {{Session::get('success')}}
      </div>
    </div>
    @endif
    <!-- End if success -->


    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="codigo">Código Cliente</label>
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código Cliente" required>
        <div class="invalid-tooltip">
          Ingrese un código por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 col-md-offset-3 form-group">
        <label for="nombre_cliente">Nombre</label>
        <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre Cliente" required>
        <div class="invalid-tooltip">
          Ingrese el nombre del cliente por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="municipio">Municipio</label>
        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <button type="submit" class="float-right btn color-p mt-2">Enviar</button>
      </div>
    </div>
    {{csrf_field()}}
  </form>
  <!-- End form Create Clientes -->

</div>

@endsection

@section("javascript")
<script src="{{asset('js/validation_bootstrap.js')}}"></script>
@endsection
