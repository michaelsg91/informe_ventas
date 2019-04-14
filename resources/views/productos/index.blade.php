@extends("../layouts.plantilla")

@section("header")
@endsection

@section("contenido")

<?php
use App\TipoProducto;

 ?>

<div class="container my-5">

<h4 class="text-center">Listado de Productos</h4>

<table class="table table-striped mt-4">
<thead class="thead-dark">
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Nombre Producto</th>
    <th scope="col">Tipo Producto</th>
    <th scope="col">Precio Agrocosur</th>
    <th scope="col">Precio Centralpecuaria</th>
    <th scope="col">Precio Disprovet</th>
    <th scope="col">Precio ERMA</th>
    <th scope="col">Modificar</th>


  </tr>
</thead>
<tbody>
  @foreach($productos as $producto)
    <?php
      $nombre_tipo_producto=TipoProducto::findOrFail($producto->tipo_producto_id);

       ?>

    <tr>
      <th scope="row">{{$producto->id}}</th>
      <td>{{$producto->nombre_producto}}</td>
      <td>{{$nombre_tipo_producto->nombre_tipo_producto}}</td>
      <td class="text-right">{{$producto->agrocosur}}</td>
      <td class="text-right">{{$producto->centralpecuaria}}</td>
      <td class="text-right">{{$producto->disprovet}}</td>
      <td class="text-right">{{$producto->erma}}</td>

      <td class="text-center"><a href="{{route('productos.edit', $producto->id)}}">Editar</a></td>

    </tr>
  @endforeach
</tbody>
</table>

</div>




@endsection

@section("foot")

@endsection
