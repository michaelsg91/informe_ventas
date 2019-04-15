<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <title>Informe de Ventas</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


  </head>
  <body class="bg-light">

    <div class="head">
      @include("layouts.navbar")
      @yield("head")
    </div>

    <div class="contenido">

      @yield("contenido")

    </div>

      <footer class="mt-5">
      <div class="d-flex justify-content-center py-5">
        <p>&copy; 2019 GMAS &middot; <a href="https://github.com/michaelsg91" target="_blank">@michaelsg91</a>.</p>
        @yield("foot")

      </div>
    </footer>

    <script src="{{asset('js/jquery-3.4.0.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    @yield("javascript")

  </body>
</html>
