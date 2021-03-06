@extends("../layouts.plantilla")

@section("contenido")

<div class="container-fluid">
  <div class="row">
    <nav class="col-lg-2 col-md-6 m-4">
      <h4 class="text-center">Buscar</h4>

      <div class="form-group mt-4">
        <input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Ingresa tu busqueda" autofocus>
        <button type="submit" name="buscar" class="btn color-p mt-2 float-right" id="buscar">Buscar</button>
      </div>
    </nav>

    <!-- Start main -->
    <main class="col-lg-9 my-4">

      <h4 class="text-center">Listado de Clientes</h4>
      <!-- Start table -->
      <div class="table-responsive">
      <table class="table table-striped mt-4">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col">Código</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Municipio</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>


          </tr>
        </thead>
        <tbody>
          @foreach($clientes as $cliente)

          <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->nombre_cliente}}</td>
            <td>{{$cliente->codigo}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->municipio}}</td>
            <td class="text-center"><a href="{{route('clientes.edit', $cliente->id)}}"><img src="{{asset('images/editar.png')}}" alt="edit"></a></td>

            <td class="text-center">
              <!-- Start form Delete Cliente -->
              <form method="post" action="/clientes/{{$cliente->id}}">
                {{csrf_field()}}
                <a href="#" data-toggle="modal" data-target="#modal_eliminar{{$cliente->id}}"><img src="{{asset('images/eliminar.png')}}" alt="delete"></a>

                <!-- Start Modal -->
                <div class="modal fade" id="modal_eliminar{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ¿Estás seguro que deseas eliminar el siguiente cliente? <br>
                        {{$cliente->nombre_cliente}}
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
    <!-- Start Pagination -->
    <div class="pagination justify-content-center my-4">
      {!! $clientes->links() !!}
    </div>
    <!-- End Pagination -->
    </main>
    <!-- End main table -->

  </div><!-- End row -->
</div><!-- End body -->




@endsection

@section("javascript")
<script type="text/javascript">
  $(document).ready(function() {
    $("#buscar").click(function() {
      var busqueda = $("#busqueda").val();
      if (busqueda != "") {
        window.location = "/clientes/" + busqueda;
      }else{
        window.location = "/clientes";
      }

    });

    $('#busqueda').keypress(function(e) {
      if (e.keyCode == 13) $('#buscar').click();
    });
    $(".pagination").rPage();


  });
</script>
@endsection
