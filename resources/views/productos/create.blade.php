@extends("../layouts.plantilla")

@section("cabecera")
@endsection
@section("contenido")

<?php

use App\TipoProducto;

$tipo_productos=TipoProducto::all();

 ?>

<div class="container">
  <h4 class="text-center my-5">Registrar Producto</h4>

  <form class="needs-validation" method="post" action="/productos" novalidate>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="nombre_producto">Nombre Producto</label>
        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre Producto" required>
        <div class="invalid-tooltip">
          Ingrese el nombre del producto por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="tipo_producto">Tipo Producto</label>
        <select class="custom-select" id="tipo_producto_id" name="tipo_producto_id">
          @foreach($tipo_productos as $tipo_producto)

          <option value="{{$tipo_producto->id}}">{{$tipo_producto->nombre_tipo_producto}}</option>

          @endforeach
        </select>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="agrocosur">Precio Agrocosur</label>
        <input type="number" step="50" class="form-control" id="agrocosur" name="agrocosur" placeholder="Precio Agrocosur" required>
        <div class="invalid-tooltip">
          Ingrese un precio por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="centralpecuaria">Precio Centralpecuaria</label>
        <input type="number" step="50" class="form-control" id="centralpecuaria" name="centralpecuaria" placeholder="Precio Centralpecuaria" required>
        <div class="invalid-tooltip">
          Ingrese un precio por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="disprovet">Precio Disprovet</label>
        <input type="number" step="50" class="form-control" id="disprovet" name="disprovet" placeholder="Precio Disprovet" required>
        <div class="invalid-tooltip">
          Ingrese un precio por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="erma">Precio ERMA</label>
        <input type="number" step="50" class="form-control" id="erma" name="erma" placeholder="Precio ERMA" required>
        <div class="invalid-tooltip">
          Ingrese un precio por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <button type="submit" class="float-right btn color-p mt-2">Enviar</button>
      </div>
    </div>

    {{csrf_field()}}
  </form>

</div>

@endsection


@section("javascript")
<script src="{{asset('js/validation_clientes.js')}}"></script>
@endsection
