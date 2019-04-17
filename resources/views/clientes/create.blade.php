@extends("../layouts.plantilla")

@section("cabecera")
@endsection
@section("contenido")

<div class="container">

  <h4 class="text-center my-5">Registrar Cliente</h4>

  <form class="needs-validation" method="post" action="/clientes" novalidate>
    <div class="row d-flex justify-content-center">

      <div class="col-md-6 form-group">
        <label for="cedula">Código Cliente</label>
        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Código Cliente" required>
        <div class="invalid-tooltip">
          Ingrese un número de cédula por favor.
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6 col-md-offset-3 form-group">
        <label for="nombre_cliente">Nombre</label>
        <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre Cliente" required>
        <div class="invalid-tooltip">
          Ingrese el nombre del cliente por favor.
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center">

      <div class="col-md-6 form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
      </div>
    </div>
    <div class="row d-flex justify-content-center">

      <div class="col-md-6 form-group">
        <label for="municipio">Municipio</label>
        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
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
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
@endsection
