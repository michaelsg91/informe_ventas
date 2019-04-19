@extends("../layouts.plantilla")

@section("contenido")
<div class="container">
  <h4 class="text-center my-5">Editar Cliente</h4>

<!-- Start form edit Clientes-->
  <form class="needs-validation" method="post" action="/clientes/{{$cliente->id}}" novalidate>

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

    <!-- div Codigo Cliente -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="codigo">Código Cliente</label>
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código" value="{{$cliente->codigo}}" required>
        <div class="invalid-tooltip">
          Ingrese un código por favor.
        </div>
      </div>
    </div>

    <!-- Div Nombre Cliente -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="nombre_cliente">Nombre</label>
        <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre Cliente" value="{{$cliente->nombre_cliente}}" required>
        <div class="invalid-tooltip">
          Ingrese el nombre del cliente por favor.
        </div>
      </div>
    </div>

    <!-- div Telefono -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{$cliente->telefono}}">
      </div>
    </div>

    <!-- Div Direccion -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="{{$cliente->direccion}}">
      </div>
    </div>

    <!-- Div Municipio -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="municipio">Municipio</label>
        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio" value="{{$cliente->municipio}}">
      </div>
    </div>

    <!-- Div Button Actualizar -->
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="d-flex justify-content-between">

          <input type="hidden" name="_method" value="PUT">
          <button type="submit" class="btn color-p mt-2">Actualizar</button>
          <a href="{{route('clientes.index')}}"><button type="button" class="btn color-p mt-2">Volver</button></a>

        </div>
      </div>
    </div>

    {{csrf_field()}}

  </form>
<!-- End form edit Clientes -->

</div>


@endsection

@section("javascript")
<script src="{{asset('js/validation_bootstrap.js')}}"></script>
@endsection
