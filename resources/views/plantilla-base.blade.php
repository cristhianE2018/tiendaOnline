<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('data-tables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('efecto_zoom/wm-zoom/jquery.wm-zoom-1.0.min.css') }}">
    
</head>
<body class="cuerpo">
    <!-- Menu de navegacion -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top d-flex">
        <a class="navbar-brand" href="#"><i class="fas fa-dragon"></i> DragonBallShop! </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route("dragon-ball") }}"><i class="fas fa-home"></i>Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#modalCanva" data-toggle="modal"><i class="fas fa-comments-dollar"></i>Ofertas</a>
          </li>
          <li class="nav-item active">
             
            <a class="nav-link" href="{{ route('verCarro') }}"> <i class="fas fa-shopping-cart"></i> {{ $suma}} ver carrito</a>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mercancia
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#cuadros">Cuadros</a>
              <a class="dropdown-item" href="#calzado">Calzado</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#camisas">Camisas</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <br><br><br>
          <div class="container">
            <div class="row">
            <div class="col-md-4">
              <h4> <i class="fas fa-user"></i> CristhianEnrique </h4>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <h2>
                  <a href="https://www.facebook.com/DragonBallonline-343796013206644/?modal=admin_todo_tour"> <i class="fab fa-facebook-f"></i> </a>
                  <a href="https://www.paypal.com/business"> <i class="fab fa-twitter"></i> </a>
                <a href="#"> <i class="fab fa-instagram"></i> </a>
                <a href="#"> <i class="fab fa-youtube"></i></a>
              </h2>
            </div>
            </div>
          </div>
          <hr>
                        @yield('content')
    
      <footer class="container-fluid d-flex justify-content-center">
        <div class="row">
          <div class="col-md-6">
            <h6 class="derechos">Copyright: Cristhian Enrique Olivares Lara ft Samuel Gomez Balderas</h6>
          </div>
          <div class="col-md-6">
            <h4 class="derechos">Visita nuestras redes sociales: </h4>
            <a href="https://www.facebook.com/DragonBallonline-343796013206644/?modal=admin_todo_tour"> <i class="fab fa-facebook-f"></i> </a>
            <a href="https://www.paypal.com/business"> <i class="fab fa-twitter"></i> </a>
            <a href="#"> <i class="fab fa-instagram"></i> </a>
            <a href="#"> <i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </footer>
      @include('modalCanva')
    <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('data-tables/datatables.min.js') }}"></script>
    <script src="{{ asset('fontawesome-free/js/all.js') }}"></script>
    <script src="../sweetalert2/dist/sweetalert2.all.js"></script>
   
  </body>
</html>
@yield('codigoJs')