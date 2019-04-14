@extends("../layouts.plantilla")

@section("cabecera")
@endsection
@section("contenido")

<?php

use App\TipoProducto;

$tipo_productos=TipoProducto::all();

 ?>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-6">

      <h4 class="text-center my-5">Editar Producto</h4>

      <form class="formulario" method="post" action="/productos/{{$producto->id}}"">
        <div class="form-group">
          <label for="nombre_producto">Nombre Producto</label>
          <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="{{$producto->nombre_producto}}" placeholder="Nombre Producto">
        </div>
        <div class="form-group">
          <label for="tipo_producto">Tipo Producto</label>
          <select class="custom-select" id="tipo_producto_id" name="tipo_producto_id">
            <option>Escoge una opción</option>
            @foreach($tipo_productos as $tipo_producto)

              @if($tipo_producto->id == $producto->tipo_producto_id)
                <option value="{{$tipo_producto->id}}" selected>{{$tipo_producto->nombre_tipo_producto}}</option>
              @else
                <option value="{{$tipo_producto->id}}">{{$tipo_producto->nombre_tipo_producto}}</option>
              @endif

            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="precio_agrocosur">Precio Agrocosur</label>
          <input type="number" step="50" class="form-control" id="precio_agrocosur" name="precio_agrocosur" value="{{$producto->precio_agrocosur}}" placeholder="Precio Agrocosur">
        </div>
        <div class="form-group">
          <label for="precio_centralpecuaria">Precio Centralpecuaria</label>
          <input type="number" step="50" class="form-control" id="precio_centralpecuaria" name="precio_centralpecuaria" value="{{$producto->precio_centralpecuaria}}" placeholder="Precio Centralpecuaria">
        </div>
        <div class="form-group">
          <label for="precio_disprovet">Precio Disprovet</label>
          <input type="number" step="50" class="form-control" id="precio_disprovet" name="precio_disprovet" value="{{$producto->precio_disprovet}}" placeholder="Precio Disprovet">
        </div>
        <div class="form-group">
          <label for="precio_erma">Precio ERMA</label>
          <input type="number" step="50" class="form-control" id="precio_erma" name="precio_erma" value="{{$producto->precio_erma}}" placeholder="Precio ERMA">
        </div>

        <input type="hidden" name="_method" value="PUT">

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn color-p mt-2">Actualizar</button>
          <a href="{{route('productos.index')}}"><button type="button" class="btn color-p mt-2">Volver</button></a>
        </div>

        {{csrf_field()}}


      </form>

      <form class="formulario" method="post" action="/productos/{{$producto->id}}">
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" name="eliminar" class="btn btn-danger mt-4">Eliminar</button>

        {{csrf_field()}}

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
