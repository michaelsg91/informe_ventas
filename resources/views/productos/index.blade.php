@extends("../layouts.plantilla")

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
    <th scope="col">Editar</th>
    <th scope="col">Eliminar</th>

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
      <td class="text-center"><a href="{{route('productos.edit', $producto->id)}}"><img src="{{asset('images/editar.png')}}" alt="delete"></a></td>

      <td class="text-center">
      <!-- Start form Delete Cliente -->
      <form method="post" action="/productos/{{$producto->id}}">
        {{csrf_field()}}
        <a href="#" data-toggle="modal" data-target="#modal_eliminar{{$producto->id}}"><img src="{{asset('images/eliminar.png')}}" alt="delete"></a>

          <!-- Start Modal -->
          <div class="modal fade" id="modal_eliminar{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ¿Estás seguro que deseas eliminar el siguiente producto? <br>
                  {{$producto->nombre_producto}}
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal -->

      </form>
      <!-- End form Delete Cliente -->
    </td>

    </tr>
  @endforeach
</tbody>
</table>

</div>




@endsection

@section("foot")

@endsection
