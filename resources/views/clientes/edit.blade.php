@extends("../layouts.plantilla")

@section("cabecera")
@endsection
@section("contenido")
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-6">

      <h4 class="text-center my-5">Editar Cliente</h4>

      <form class="formulario" method="post" action="/clientes/{{$cliente->id}}">
        <div class="form-group">
          <label for="cedula">Código Cliente</label>
          <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Código" value="{{$cliente->cedula}}">
        </div>
        <div class="form-group">
          <label for="nombre_cliente">Nombre</label>
          <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre Cliente" value="{{$cliente->nombre_cliente}}">
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{$cliente->telefono}}">
        </div>
        <div class="form-group">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="{{$cliente->direccion}}">
        </div>
        <div class="form-group">
          <label for="municipio">Municipio</label>
          <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio" value="{{$cliente->municipio}}">
        </div>
          <input type="hidden" name="_method" value="PUT">
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn color-p mt-2">Actualizar</button>
            <a href="{{route('clientes.index')}}"><button type="button" class="btn color-p mt-2">Volver</button></a>

          </div>

        {{csrf_field()}}

      </form>

      <form class="formulario" method="post" action="/clientes/{{$cliente->id}}">
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" name="eliminar" class="btn btn-danger mt-4">Eliminar</button>

        {{csrf_field()}}

      </form>



    </div>
  </div>
</div>

@if(count($errors)>0)

  @foreach($errors->all() as $error)
  <p class="errors">
    {{$error}}
  </p>
  @endforeach
@endif


@endsection
