<nav class="navbar navbar-expand-lg navbar-light color-p">
<a class="navbar-brand" href="{{url('inicio')}}">Informe Ventas</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
  <li class="nav-item active">
    <a class="nav-link" href="{{url('inicio')}}">Inicio <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Registrar
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{route('ventas.create')}}">Venta</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{route('productos.create')}}">Producto</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{route('clientes.create')}}">Cliente</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Consultar
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">Venta</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{route('productos.index')}}">Producto</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{route('clientes.index')}}">Cliente</a>
    </div>
  </li>

</ul>

</div>
</nav>
