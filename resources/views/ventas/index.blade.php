@extends("../layouts.plantilla")

@section("contenido")

<?php

$valor_total=0;
$cantidad_total=0;

 ?>

<div class="container-fluid">
  <div class="row">
    <!-- Start nav busqueda -->
    <nav class="col-lg-2 col-md-6 m-4">
      <h4 class="text-center">Buscar</h4>

      <div class="form-group mt-4">
        <input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Ingresa tu busqueda" autofocus>
        <button type="submit" name="buscar" class="btn color-p mt-2 float-right" id="buscar">Buscar</button>
      </div>
    </nav>
    <!-- End nab busqueda -->

    <main class="col-lg-9 my-4">

      <h4 class="text-center">Listado de Ventas</h4>

      <!-- Start table -->
      <div class="table-responsive">
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

          <tr>
            <th scope="row">{{$venta->id}}</th>
            <td>{{$venta->nombre_producto}}</td>
            <td>{{$venta->nombre_proveedor}}</td>
            <td>{{$venta->nombre_cliente}}</td>
            <td>{{$venta->fecha_venta}}</td>
            <td class="text-right">{{$venta->cantidad}}</td>
            <td class="text-right">{{$venta->valor_venta}}</td>
            <td class="text-center"><a href="{{route('ventas.edit', $venta->id)}}"><img src="{{asset('images/editar.png')}}" alt="delete"></a></td>

            <td class="text-center">
              <!-- Start form Delete Cliente -->
              <form method="post" action="/ventas/{{$venta->id}}">
                {{csrf_field()}}
                <a href="#" data-toggle="modal" data-target="#modal_eliminar{{$venta->id}}"><img src="{{asset('images/eliminar.png')}}" alt="delete"></a>

                <!-- Start Modal -->
                <div class="modal fade" id="modal_eliminar{{$venta->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ¿Estás seguro que deseas eliminar la venta del siguiente producto? <br>
                        {{$venta->nombre_producto}}
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
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Start Pagination -->
    <div class="pagination justify-content-center my-4">
      {!! $ventas->links() !!}
    </div>
    <!-- End Pagination -->

    </main>
    <!-- End main table -->

  </div><!-- End row -->
</div><!-- End container -->

@endsection

@section("javascript")
<script type="text/javascript">
  $(document).ready(function() {
    $("#buscar").click(function() {
      var busqueda = $("#busqueda").val();
      if (busqueda != "") {
        window.location = "/ventas/" + busqueda;
      } else {
        window.location = "/ventas";
      }

    });

    $('#busqueda').keypress(function(e) {
      if (e.keyCode == 13) $('#buscar').click();
    });
    $(".pagination").rPage();

  });
</script>
@endsection
