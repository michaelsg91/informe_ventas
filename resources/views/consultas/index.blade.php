@extends("../layouts.plantilla")

@section("contenido")

<?php
use App\Producto;
use App\Cliente;
use App\Proveedor;

$productos=Producto::orderBy('nombre_producto','asc')->get();
$clientes=Cliente::orderBy('nombre_cliente','asc')->get();
$proveedors=Proveedor::orderBy('nombre_proveedor','asc')->get();

$valor_total=0;
$cantidad_total=0;


 ?>
<div class="container-fluid">
  <div class="row">

    <!-- Div seccion de consulta avanzada -->
    <nav class="col-md-2 m-4">
      <h4 class="text-center">Panel de Consultas</h4>


      <!-- Start form consulta avanzada -->
      <form class="mt-4" action="/consultas" method="post">
        {{csrf_field()}}

        <!--  Div Fecha Inicial -->
        <div class="form-group">
          <label for="fecha_inicial">Fecha Inicial</label>
          <input type="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" class="form-control" id="fecha_inicial" name="fecha_inicial" placeholder="Fecha Venta" required>
          <div class="invalid-tooltip">
            Escoge la fecha por favor.
          </div>
        </div>
        <!-- Div Fecha Final -->
        <div class="form-group">
          <label for="fecha_final">Fecha Final</label>
          <input type="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" class="form-control" id="fecha_final" name="fecha_final" placeholder="Fecha Venta" required>
          <div class="invalid-tooltip">
            Escoge la fecha por favor.
          </div>
        </div>

        <!-- Div Clinte ID -->
          <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select class="custom-select" id="cliente_id" name="cliente_id">
              <option value="0">Elige una opción</option>
              @foreach($clientes as $cliente)

              <option value="{{$cliente->id}}">{{$cliente->nombre_cliente}}</option>

              @endforeach
            </select>
            <div class="invalid-tooltip">
              Escoge un cliente por favor.
            </div>
          </div>

        <!-- Div Producto ID -->
          <div class="form-group">
            <label for="producto_id">Producto</label>
            <select class="custom-select" id="producto_id" name="producto_id">
              <option value="0">Elige una opción</option>
              @foreach($productos as $producto)

              <option value="{{$producto->id}}">{{$producto->nombre_producto}}</option>

              @endforeach
            </select>
          </div>

        <!-- Div Proveedor ID -->
          <div class="form-group">
            <label for="proveedor_id">Proveedor</label>
            <select class="custom-select" id="proveedor_id" name="proveedor_id" required>
              <option value="0">Elige una opción</option>
              @foreach($proveedors as $proveedor)

              <option value="{{$proveedor->id}}">{{$proveedor->nombre_proveedor}}</option>

              @endforeach
            </select>
            <div class="invalid-tooltip">
              Escoge un proveedor por favor.
            </div>
          </div>

        <input type="submit" name="enviar" class="btn color-p" value="Consultar">
      </form>
      <!-- End form consulta avanzada -->
    </nav>
    <!-- End seccion consulta avanzada -->



    <!-- Main Tabla de Resultados -->
    <main class="col-md-9 my-4">


      <h4 class="text-center">Resultado Consulta Ventas</h4>

      <table class="table table-striped mt-4">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Producto</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Cliente</th>
            <th scope="col">Fecha Venta</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor Venta</th>

          </tr>
        </thead>
        <tbody>

          @foreach($ventas as $venta)
          <?php
            $nombre_producto=Producto::withTrashed()->findOrFail($venta->producto_id);
            $nombre_cliente=Cliente::withTrashed()->findOrFail($venta->cliente_id);
            $nombre_proveedor=Proveedor::withTrashed()->findOrFail($venta->proveedor_id);

          ?>

          <tr>
            <th scope="row">{{$venta->id}}</th>
            <td>{{$nombre_producto->nombre_producto}}</td>
            <td>{{$nombre_proveedor->nombre_proveedor}}</td>
            <td>{{$nombre_cliente->nombre_cliente}}</td>
            <td>{{$venta->fecha_venta}}</td>
            <td class="text-right">{{$venta->cantidad}}</td>
            <td class="text-right">{{$venta->valor_venta}}</td>

          </tr>

          <?php
    $valor_total=$valor_total+$venta->valor_venta;
    $cantidad_total=$cantidad_total+$venta->cantidad;
    ?>

          @endforeach
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="font-weight-bold">Total</td>
            <td class="text-right font-weight-bold">{{$cantidad_total}}</td>
            <td class="text-right font-weight-bold">{{$valor_total}}</td>
          </tr>
        </tbody>
      </table>

    </main>
  </div>
</div>
<!-- End tabla de resultados -->

@endsection

@section('javascript')
<script src="{{asset('js/script_consultas_ventas.js')}}"></script>
@endsection
