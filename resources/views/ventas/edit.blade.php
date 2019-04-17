@extends("../layouts.plantilla")

@section("cabecera")
@endsection
@section("contenido")

<?php

use App\Producto;
use App\Cliente;
use App\Proveedor;

$productos=Producto::orderBy('nombre_producto','asc')->get();
$clientes=Cliente::orderBy('nombre_cliente','asc')->get();
$proveedors=Proveedor::orderBy('nombre_proveedor','asc')->get();

 ?>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-6">

      <h4 class="text-center my-5">Editar Venta</h4>

      <form class="formulario" id="form_create_venta" method="post" action="/ventas/{{$venta->id}}">
        <div class="form-group">
          <label for="cliente_id">Cliente</label>
          <select class="custom-select" size="4" id="cliente_id" name="cliente_id">
            @foreach($clientes as $cliente)

              @if($cliente->id==$venta->cliente_id)
              <option value="{{$cliente->id}}" selected>{{$cliente->nombre_cliente}}</option>
              @else
              <option value="{{$cliente->id}}">{{$cliente->nombre_cliente}}</option>
              @endif

            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="producto_id">Producto</label>
          <select class="custom-select" id="producto_id" name="producto_id">
            @foreach($productos as $producto)

              @if($producto->id==$venta->producto_id)
              <option value="{{$producto->id}}" selected>{{$producto->nombre_producto}}</option>
              @else
              <option value="{{$producto->id}}">{{$producto->nombre_producto}}</option>
              @endif

            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="proveedor_id">Proveedor</label>
          <select class="custom-select" size="4" id="proveedor_id" name="proveedor_id">
            @foreach($proveedors as $proveedor)

              @if($proveedor->id==$venta->proveedor_id)
              <option value="{{$proveedor->id}}" selected>{{$proveedor->nombre_proveedor}}</option>
              @else
              <option value="{{$proveedor->id}}">{{$proveedor->nombre_proveedor}}</option>
              @endif

            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="cantidad">Cantidad</label>
          <input type="number" min="1" max="999"class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" value="{{$venta->cantidad}}">
        </div>
        <div class="form-group">
          <label for="valor_unitario">Valor Unitario</label>
          <input type="number" step="50" class="form-control" id="valor_unitario" placeholder="Valor Unitario" value="{{$venta->valor_venta/$venta->cantidad}}">
        </div>
        <div class="form-group">
          <label for="valor_venta">Valor Total</label>
          <input type="number" step="50" class="form-control" id="valor_venta" name="valor_venta" placeholder="Valor Total" value="{{$venta->valor_venta}}" readonly>
        </div>
        <div class="form-group">
          <label for="fecha_venta">Fecha Venta</label>
          <input type="date" value="{{date('Y-m-d')}}" class="form-control" id="fecha_venta" name="fecha_venta" placeholder="Fecha Venta" value="{{$venta->fecha_venta}}">
        </div>

        <input type="hidden" name="_method" value="PUT">

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn color-p mt-2">Actualizar</button>
          <a href="{{route('ventas.index')}}"><button type="button" class="btn color-p mt-2">Volver</button></a>
        </div>

        {{csrf_field()}}
      </form>

      <form class="formulario" method="post" action="/ventas/{{$venta->id}}">
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

@section("foot")
@endsection

@section("javascript")
<script src="{{asset('js/script_ventas.js')}}"></script>
@endsection
