@extends("../layouts.plantilla")

@section("header")
@endsection

@section("contenido")

<?php
use App\Producto;
use App\Cliente;
use App\Proveedor;


 ?>

<div class="container my-5">

<h4 class="text-center">Listado de Ventas</h4>

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
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>


  </tr>
</thead>
<tbody>
  @foreach($ventas as $venta)
    <?php
      $nombre_producto=Producto::findOrFail($venta->producto_id);
      $nombre_cliente=Cliente::findOrFail($venta->cliente_id);
      $nombre_proveedor=Proveedor::findOrFail($venta->proveedor_id);

       ?>

    <tr>
      <th scope="row">{{$venta->id}}</th>
      <td>{{$nombre_producto->nombre_producto}}</td>
      <td>{{$nombre_proveedor->nombre_proveedor}}</td>
      <td>{{$nombre_cliente->nombre_cliente}}</td>
      <td>{{$venta->fecha_venta}}</td>
      <td class="text-right">{{$venta->cantidad}}</td>
      <td class="text-right">{{$venta->valor_venta}}</td>
      <td class="text-center"><a href="{{route('ventas.edit', $venta->id)}}"><img src="{{asset('images/editar.png')}}" alt="delete"></a></td>
      <td class="text-center"><a href="#"><img src="{{asset('images/eliminar.png')}}" alt="delete"></a></td>

    </tr>
  @endforeach
</tbody>
</table>

</div>




@endsection

@section("foot")

@endsection
