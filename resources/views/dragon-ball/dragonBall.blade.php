@extends('plantilla-base')

@section('content')
        <br>
        <br>
        <h3> Tienes un total de {{ $suma }} productos en tu carrito <i class="fas fa-shopping-cart"></i></h3> 
    <div class="container-fluid fondoGoku">
        <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <img src="img/disenio/imagen2.jpg" class="fotoGoku" width="1300px" height="500px">
                </div>
        </div>
        <hr>
        
        <!-- CUADROS -->
        
        <div class="row container-fluid" id="cuadros">
                <div class="col-md-4">
                    <a href="{{ route('ruta','321') }}">
                    <div class="card" style="width: 20rem;">
                        <img src="mercancia/cuadros/cuadro1.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body d-flex align-items-center">
                            </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('ruta','123') }}">
                <div class="card" style="width: 20rem;">
                        <img src="mercancia/cuadros/cuadro3.jpeg" class="img-fluid" alt="...">
                            <div class="card-body d-flex align-items-center">
                            </div>
                </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('ruta','1234') }}">
                        <div class="card" style="width: 20rem;">
                                <img src="mercancia/cuadros/cuadro2.jpeg" class="card-img-top img-fluid" alt="...">
                                    <div class="card-body d-flex align-items-center">

                                    </div>
                            </div>
                    </a>
                </div>
        </div>
        <hr>
        <div class="row container-fluid" id="calzado">
            <div class="col-md-4">
                    <a href="{{ route('ruta','1') }}">
                        <div class="card" style="width: 20rem;">
                                <img src="mercancia/calzado/calzado1.jpg" class="card-img-top img-fluid" alt="...">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                            <h3 class="text-muted"> Tennis shen-long</h3>
                                    </div>
                        </div>
                    </a>
            </div>
            <div class="col-md-4">
                    <a href="{{ route('ruta','2') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/calzado/calzado2.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h3 class="text-muted"> Tennis Son Goku </h3>
                                        </div>
                            </div>
                    </a>
            </div>
            <div class="col-md-4">
                    <a href="{{ route('ruta','3') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/calzado/calzado3.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h3 class="text-muted"> Tennis Super sayayin </h3>
                                        </div>
                            </div>
                        </a>
            </div>
        </div>
        <hr>
        <div class="row container-fluid" id="camisas">
            <div class="col-md-4">
                    <a href="{{ route('ruta','4') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/camisas/camisa1.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h4 class="text-muted"> Playera Son Goku Blue! </h4>
                                        </div>
                            </div>
                    </a>
            </div>
            <div class="col-md-4">
                    <a href="{{ route('ruta','5') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/camisas/camisa2.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h4 class="text-muted"> Playera Vestimenta Goku Dañada </h4>
                                        </div>
                            </div>
                    </a>
            </div>
            <div class="col-md-4">
                    <a href="{{ route('ruta','6') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/camisas/camisa3.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h4 class="text-muted"> Playera Goku Ultra Instinto </h4>
                                        </div>
                            </div>
                    </a>
            </div>
        </div>


    </div>
@endsection