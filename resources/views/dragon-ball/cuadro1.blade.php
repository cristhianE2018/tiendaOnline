@extends('plantilla-base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h4> Imagenes del producto </h4>
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="mercancia/cuadros/cuadro1.jpeg" class="w-100 img-fluid fotoGoku">
                      </div>
                      <div class="carousel-item">
                        <img src="mercancia/cuadros/cuadro1_1.jpeg" class="w-100 img-fluid fotoGoku">
                      </div>
                      <div class="carousel-item">
                        <img src="mercancia/cuadros/cuadro1_2.jpeg" class="w-100 img-fluid fotoGoku">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

            <div class="col-md-4">
                <h3> Descripcion del producto </h3>
                <p class="text-justify">
                    Cuadro representativo de la primera batalla entre los sayayin goku y vegta.
                </p>
                <p class="text-justify">
                    Medidas: 35 cm de ancho * 50 cm alto
                </p>
                <p class="">
                    Borde: 1.5 cm
                </p>
                    <div class="form-group">
                        <label for="txtcantidad"> Ingresa la cantidad de productos : </label>
                        <input type="number" placeholder="elige cantidad" class="form-control">
                    </div>
                    <a href ="{{ route('carros.index') }}" class="btn btn-success btn-block" class="form-control"><i class="fas fa-shopping-cart"></i> Añadir al carrito </a>
                <img src="mercancia/envio.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
@endsection