@extends("../layouts.plantilla")

@section("cabecera")
@endsection
@section("contenido")
<div class="container">
  <h4 class="text-center my-5">Editar Cliente</h4>

  <form class="needs-validation" method="post" action="/clientes/{{$cliente->id}}" novalidate>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="cedula">Código Cliente</label>
        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Código" value="{{$cliente->cedula}}" required>
        <div class="invalid-tooltip">
          Ingrese un código por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="nombre_cliente">Nombre</label>
        <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre Cliente" value="{{$cliente->nombre_cliente}}" required>
        <div class="invalid-tooltip">
          Ingrese el nombre del cliente por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{$cliente->telefono}}">
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="{{$cliente->direccion}}">
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="municipio">Municipio</label>
        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio" value="{{$cliente->municipio}}">
      </div>
    </div>

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

  <form class="formulario" method="post" action="/clientes/{{$cliente->id}}">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">

        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" name="eliminar" class="btn btn-danger mt-4">Eliminar</button>

      </div>
    </div>
    {{csrf_field()}}
  </form>



</div>


@endsection

@section("javascript")
<script src="{{asset('js/validation_bootstrap.js')}}"></script>
@endsection
