@extends("../layouts.plantilla")

@section("cabecera")
@endsection
@section("contenido")
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-6">

      <h4 class="text-center my-5">Registrar Cliente</h4>

      <form class="formulario" method="post" action="/clientes">
        <div class="form-group">
          <label for="cedula">Cédula Cliente</label>
          <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula">
        </div>
        <div class="form-group">
          <label for="nombre_cliente">Nombre</label>
          <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre Cliente">
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
        </div>
        <div class="form-group">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
        </div>
        <div class="form-group">
          <label for="municipio">Municipio</label>
          <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
        </div>
        {{csrf_field()}}

        <button type="submit" class="float-right btn color-p mt-2">Enviar</button>
      </form>

    </div>
  </div>
</div>

@if(count($errors)>0)

  @foreach($errors->all() as $error)
  <p class="errors">
    {{$error}}
  </p>
  @endforeach
@endif


@endsection
