@extends("../layouts.plantilla")

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

  <h4 class="text-center my-5">Editar Venta</h4>

<!-- Start form Edit Ventas -->
  <form class="needs-validation" id="form_create_venta" method="post" action="/ventas/{{$venta->id}}" novalidate>

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

    <!-- Div Cliente -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="cliente_id">Cliente</label>
        <select class="custom-select" size="4" id="cliente_id" name="cliente_id" required>
          @foreach($clientes as $cliente)

          @if($cliente->id==$venta->cliente_id)
          <option value="{{$cliente->id}}" selected>{{$cliente->nombre_cliente}}</option>
          @else
          <option value="{{$cliente->id}}">{{$cliente->nombre_cliente}}</option>
          @endif

          @endforeach
        </select>
        <div class="invalid-tooltip">
          Escoge un cliente por favor.
        </div>
      </div>
    </div>

    <!-- Div Producto -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
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
    </div>

    <!-- Div Proveedor -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="proveedor_id">Proveedor</label>
        <select class="custom-select" size="4" id="proveedor_id" name="proveedor_id" required>
          @foreach($proveedors as $proveedor)

          @if($proveedor->id==$venta->proveedor_id)
          <option value="{{$proveedor->id}}" selected>{{$proveedor->nombre_proveedor}}</option>
          @else
          <option value="{{$proveedor->id}}">{{$proveedor->nombre_proveedor}}</option>
          @endif

          @endforeach
        </select>
        <div class="invalid-tooltip">
          Escoge un proveedor por favor.
        </div>
      </div>
    </div>

    <!-- Div Cantidad -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="cantidad">Cantidad</label>
        <input type="number" step="1" min="1" max="10000" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" value="{{$venta->cantidad}}" required>
        <div class="invalid-tooltip">
          Ingresa la cantidad por favor.
        </div>
      </div>
    </div>

    <!-- Div Valor Unitario -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="valor_unitario">Valor Unitario</label>
        <input type="number" min="0" class="form-control" id="valor_unitario" placeholder="Valor Unitario" value="{{$venta->valor_venta/$venta->cantidad}}" required>
        <div class="invalid-tooltip">
          Ingresa el valor unitario por favor.
        </div>
      </div>
    </div>

    <!-- Div Valor Total -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="valor_venta">Valor Total</label>
        <input type="number" min="0" class="form-control" id="valor_venta" name="valor_venta" placeholder="Valor Total" value="{{$venta->valor_venta}}" readonly>
      </div>
    </div>

    <!-- Div Fecha Venta -->
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="fecha_venta">Fecha Venta</label>
        <input type="date" max="{{date('Y-m-d')}}" class="form-control" id="fecha_venta" name="fecha_venta" placeholder="Fecha Venta" value="{{$venta->fecha_venta}}" required>
        <div class="invalid-tooltip">
          Escoge la fecha por favor.
        </div>
      </div>
    </div>

    <!-- Div Button Actualizar -->
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="d-flex justify-content-between">
          <input type="hidden" name="_method" value="PUT">
          <button type="submit" class="btn color-p mt-2">Actualizar</button>
          <a href="{{route('ventas.index')}}"><button type="button" class="btn color-p mt-2">Volver</button></a>
        </div>
      </div>
    </div>

    {{csrf_field()}}
  </form>
  <!-- End form Edit Ventas -->

</div>

@endsection

@section("javascript")
<script src="{{asset('js/script_ventas.js')}}"></script>
<script src="{{asset('js/validation_bootstrap.js')}}"></script>
@endsection
