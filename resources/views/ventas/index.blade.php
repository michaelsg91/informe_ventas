@extends("../layouts.plantilla")

@section("header")
@endsection

@section("contenido")

<table class="table table-striped table-dark">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Producto</th>
    <th scope="col">Tipo Producto</th>
    <th scope="col">Proveedor</th>
    <th scope="col">Cliente</th>
    <th scope="col">Fecha Venta</th>
    <th scope="col">Cantidad</th>
    <th scope="col">Valor Venta</th>

  </tr>
</thead>
<tbody>
  @foreach($ventas as $venta)
  <tr>
    <th scope="row">{{venta->id}}</th>
    <td><a href="{{route('ventas.edit', venta->id)}}">{{venta->nombre_articulo}}</a></td>
    <td>{{venta->id}}</td>
    <td>{{venta->producto}}</td>
    <td>{{venta->nombre_producto}}</td>
    <td>{{venta->nombre_proveedor}}</td>
    <td>{{venta->nombre_cliente}}</td>
    <td>{{venta->fecha_venta}}</td>
    <td>{{venta->cantidad}}</td>
    <td>{{venta->valor_venta}}</td>


  </tr>
  @endforeach
</tbody>
</table>


@endsection

@section("foot")

@endsection
