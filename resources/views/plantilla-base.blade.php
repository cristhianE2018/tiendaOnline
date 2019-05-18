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
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#"> FanAnime </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route("inicio") }}"><i class="fas fa-home"></i>Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-comments-dollar"></i>Ofertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="fas fa-shopping-cart"></i> ver carrito</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Animes Disponibles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ route("dragon-ball") }}">Dragon Ball</a>
              <a class="dropdown-item" href="#">One Piece</a>
              <a class="dropdown-item" href="#">Bokuno Heroe</a>
            </div>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
              <a class="dropdown-item" href="#">Camisas</a>
              <a class="dropdown-item" href="#">Cuadros</a>
              <a class="dropdown-item" href="#">Mangas</a>
            </div>
          </li>
        </ul>
      </div>
      <a href="#" class="nav-link"> <i class="fab fa-facebook-f"></i> </a>
      <a href="#" class="nav-link"> <i class="fab fa-twitter"></i> </a>
      <a href="#" class="nav-link"> <i class="fab fa-instagram"></i> </a>
      <a href="#" class="nav-link"> <i class="fab fa-youtube"></i></a>
    </nav>
            <br><br><hr>

                        @yield('content')
    

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="fontawesome-free/js/all.js"></script>
    <script src="sweetalert2/dist/sweetalert2.all.js"></script>
</body>
</html>