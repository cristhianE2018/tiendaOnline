<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('efecto_zoom/wm-zoom/jquery.wm-zoom-1.0.min.css') }}">
</head>
<body class="cuerpo">
    <!-- Menu de navegacion -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top d-flex">
        <a class="navbar-brand" href="#"> FanAnime </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route("dragon-ball") }}"><i class="fas fa-home"></i>Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-comments-dollar"></i>Ofertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('carros.index') }}"> <i class="fas fa-shopping-cart"></i> ver carrito</a>
          </li>
          <li class="nav-item">
              <a href="" class="nav-link"> Compra en linea</a>
          </li>
        </ul>
      </div>
      
      <a href="#" class="nav-link"> <i class="fab fa-facebook-f"></i> </a>
      <a href="#" class="nav-link"> <i class="fab fa-twitter"></i> </a>
      <a href="#" class="nav-link"> <i class="fab fa-instagram"></i> </a>
      <a href="#" class="nav-link"> <i class="fab fa-youtube"></i></a>
    </nav>
            <br><br><hr>
              <div class="container-fluid bg-info">
                <div class="row">
                  <div class="col-md-12 d-flex flex-row justify-content-around">
                    <h5><i class="fas fa-phone"></i> Telefono: 288-113-86-73 </h5>
                    <h5> <i class="fas fa-envelope-open-text"></i> Email: FanAnime@gmail.com </h5>
                    <h5> Metodos de pago: <i class="fab fa-cc-paypal"></i></h5>
                  </div>
                </div>
              </div>
              <br>
                        @yield('content')
    

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="fontawesome-free/js/all.js"></script>
    <script src="sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="efecto_zoom/wm-zoom/jquery.wm-zoom-1.0.min.js"></script>

  </body>
</html>
@yield('codigoJs')