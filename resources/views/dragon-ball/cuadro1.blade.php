@extends('plantilla-base')
@section('content')
  <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h4> Imagenes </h4>
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ $produc->imagen }}" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ $produc->imagen2 }}" class="d-block w-100 img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ $produc->imagen3 }}" class="d-block w-100 img-fluid" alt="...">
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
                <h3 class="text-muted"> Descripcion del producto </h3>
                <h5>
                    {{ $produc->nombre }}
                </h5><br>
                <h6 class="">
                    {{ $produc->descripcion }}
                </h6><br>
                <h6 class="">
                    {{ $produc->precio }} pesos mexicanos
                </h6><br>
                    <div class="form-group">
                        <label for="txtcantidad"> Ingresa la cantidad de productos : </label>
                        <input type="number" placeholder="elige cantidad" name="can" id="cant" class="form-control">
                    </div>
                    <a href ="{{ route('envio',[$produc->id,
                      $produc->nombre,
                    $produc->descripcion,
                    $produc->precio,
                    "cantidad"=>'1'
                    ]) }}" class="btn btn-add btn-block" class="form-control"><i class="fas fa-shopping-cart"></i> Añadir al carrito </a>
                <img src="mercancia/envio.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
@endsection
