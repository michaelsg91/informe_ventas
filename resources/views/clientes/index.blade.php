@extends("../layouts.plantilla")

@section("contenido")

<div class="container my-5">

<h4 class="text-center">Listado de Clientes</h4>

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
    <td>{{$cliente->cedula}}</td>
    <td>{{$cliente->telefono}}</td>
    <td>{{$cliente->direccion}}</td>
    <td>{{$cliente->municipio}}</td>
    <td class="text-center"><a href="{{route('clientes.edit', $cliente->id)}}"><img src="{{asset('images/editar.png')}}" alt="delete"></a></td>
    <td class="text-center"><a href="#"><img src="{{asset('images/eliminar.png')}}" alt="delete"></a></td>

  </tr>
  @endforeach
</tbody>
</table>

</div>




@endsection

@section("foot")

@endsection
