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
  <h4 class="text-center my-5">Registrar Venta</h4>

  <form class="needs-validation" id="form_create_venta" method="post" action="/ventas" novalidate>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="cliente_id">Cliente</label>
        <select class="custom-select" size="4" id="cliente_id" name="cliente_id" required>
          @foreach($clientes as $cliente)

          <option value="{{$cliente->id}}">{{$cliente->nombre_cliente}}</option>

          @endforeach
        </select>
        <div class="invalid-tooltip">
          Escoge un cliente por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="producto_id">Producto</label>
        <select class="custom-select" id="producto_id" name="producto_id">
          @foreach($productos as $producto)

          <option value="{{$producto->id}}">{{$producto->nombre_producto}}</option>

          @endforeach
        </select>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="proveedor_id">Proveedor</label>
        <select class="custom-select" size="4" id="proveedor_id" name="proveedor_id" required>
          @foreach($proveedors as $proveedor)

          <option value="{{$proveedor->id}}">{{$proveedor->nombre_proveedor}}</option>

          @endforeach
        </select>
        <div class="invalid-tooltip">
          Escoge un proveedor por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="cantidad">Cantidad</label>
        <input type="number" min="1" max="999" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" required>
        <div class="invalid-tooltip">
          Ingresa la cantidad por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="valor_unitario">Valor Unitario</label>
        <input type="number" step="50" class="form-control" id="valor_unitario" placeholder="Valor Unitario" required>
        <div class="invalid-tooltip">
          Ingresa el valor unitario por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="valor_venta">Valor Total</label>
        <input type="number" step="50" class="form-control" id="valor_venta" name="valor_venta" placeholder="Valor Total" readonly>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="fecha_venta">Fecha Venta</label>
        <input type="date" value="{{date('Y-m-d')}}" class="form-control" id="fecha_venta" name="fecha_venta" placeholder="Fecha Venta" required>
        <div class="invalid-tooltip">
          Escoge la fecha por favor.
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
<script src="{{asset('js/script_ventas.js')}}"></script>
<script src="{{asset('js/validation_bootstrap.js')}}"></script>
@endsection
