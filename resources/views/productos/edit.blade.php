@extends("../layouts.plantilla")

@section("contenido")

<?php

use App\TipoProducto;

$tipo_productos=TipoProducto::all();

 ?>

<div class="container">
  <h4 class="text-center my-5">Editar Producto</h4>

<!-- Start form Edit Productos -->
  <form class="needs-validation" method="post" action="/productos/{{$producto->id}}" novalidate>

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

    <!-- Div Nombre Producto -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="nombre_producto">Nombre Producto</label>
        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="{{$producto->nombre_producto}}" placeholder="Nombre Producto" required>
        <div class="invalid-tooltip">
          Ingrese el nombre del producto por favor.
        </div>
      </div>
    </div>

    <!-- Div Tipo Producto -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="tipo_producto">Tipo Producto</label>
        <select class="custom-select" id="tipo_producto_id" name="tipo_producto_id">
          @foreach($tipo_productos as $tipo_producto)

          @if($tipo_producto->id == $producto->tipo_producto_id)
          <option value="{{$tipo_producto->id}}" selected>{{$tipo_producto->nombre_tipo_producto}}</option>
          @else
          <option value="{{$tipo_producto->id}}">{{$tipo_producto->nombre_tipo_producto}}</option>
          @endif

          @endforeach
        </select>
      </div>
    </div>

    <!-- Div Precio Agrocosur -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="precio_agrocosur">Precio Agrocosur</label>
        <input type="number" step="50" class="form-control" id="precio_agrocosur" name="precio_agrocosur" value="{{$producto->agrocosur}}" placeholder="Precio Agrocosur" required>
        <div class="invalid-tooltip">
          Ingrese un precio por favor.
        </div>
      </div>
    </div>

    <!-- Div Precio Centralpecuaria -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="precio_centralpecuaria">Precio Centralpecuaria</label>
        <input type="number" step="50" class="form-control" id="precio_centralpecuaria" name="precio_centralpecuaria" value="{{$producto->centralpecuaria}}" placeholder="Precio Centralpecuaria" required>
        <div class="invalid-tooltip">
          Ingrese un precio por favor.
        </div>
      </div>
    </div>

    <!-- Div Precio Disprovet -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="precio_disprovet">Precio Disprovet</label>
        <input type="number" step="50" class="form-control" id="precio_disprovet" name="precio_disprovet" value="{{$producto->disprovet}}" placeholder="Precio Disprovet" required>
        <div class="invalid-tooltip">
          Ingrese un precio por favor.
        </div>
      </div>
    </div>

    <!-- Div Precio ERMA -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="precio_erma">Precio ERMA</label>
        <input type="number" step="50" class="form-control" id="precio_erma" name="precio_erma" value="{{$producto->erma}}" placeholder="Precio ERMA" required>
        <div class="invalid-tooltip">
          Ingrese un precio por favor.
        </div>
      </div>
    </div>

    <!-- Div Button Actualizar -->
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="d-flex justify-content-between">
          <input type="hidden" name="_method" value="PUT">
          <button type="submit" class="btn color-p mt-2">Actualizar</button>
          <a href="{{route('productos.index')}}"><button type="button" class="btn color-p mt-2">Volver</button></a>
        </div>
      </div>
    </div>

    {{csrf_field()}}

  </form>
  <!-- End form Edit Productos -->

</div>

@endsection

@section("javascript")
<script src="{{asset('js/validation_bootstrap.js')}}"></script>
@endsection
