@extends('plantilla-base')

@section('content')
    <div class="container fondoGoku">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="img/disenio/imagen2.jpg" class="fotoGoku" width="1300px" height="500px">
            </div>
        </div>
        <hr>
        <!-- CUADROS -->
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <h5> Cuadros </h5>
            </div>
        </div>
        <div class="row">
                <p class="parrafos"> Decora tu cuarto, sala o comedor con nuestros increibles cuadros, impresiona
                   a tus amigos con las escenas mas memorables de la increible serie que cautivo a millones
                   de personas en el mundo!.
               </p>
               <p class="parrafos"> Da click en cualquier cuadro para ver su descripcion </p>
        </div>

        <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('ruta','321') }}">
                    <div class="card" style="width: 20rem;">
                        <img src="mercancia/cuadros/cuadro1.jpeg" class="card-img-top" alt="...">
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
                                <img src="mercancia/cuadros/cuadro2.jpeg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex align-items-center">

                                    </div>
                            </div>
                    </a>
                </div>
        </div>
        <div class="row d-flex justify-content-center">
                <p class="parrafos"> Se la envidia de tus amigos al usar el calzado de los personajes de dragon ball
               </p>
               <p class="parrafos"> Da click en cualquier calzado para ver su descripcion </p>
        </div>

        <div class="row">
            <div class="col-md-4">
                    <a href="{{ route('ruta','1') }}">
                        <div class="card" style="width: 20rem;">
                                <img src="mercancia/calzado/calzado1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                            <h3 class="text-muted"> Tennis shen-long</h3>
                                    </div>
                        </div>
                    </a>
            </div>
            <div class="col-md-4">
                    <a href="{{ route('ruta','2') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/calzado/calzado2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h3 class="text-muted"> Tennis Son Goku </h3>
                                        </div>
                            </div>
                    </a>
            </div>
            <div class="col-md-4">
                    <a href="{{ route('ruta','3') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/calzado/calzado3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h3 class="text-muted"> Tennis Super sayayin </h3>
                                        </div>
                            </div>
                        </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                    <a href="{{ route('ruta','4') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/camisas/camisa1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h4 class="text-muted"> Playera Son Goku Blue! </h4>
                                        </div>
                            </div>
                    </a>
            </div>
            <div class="col-md-4">
                    <a href="{{ route('ruta','5') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/camisas/camisa2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h4 class="text-muted"> Playera Vestimenta Goku Dañada </h4>
                                        </div>
                            </div>
                    </a>
            </div>
            <div class="col-md-4">
                    <a href="{{ route('ruta','6') }}">
                            <div class="card" style="width: 20rem;">
                                    <img src="mercancia/camisas/camisa3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                                <h4 class="text-muted"> Playera Goku Ultra Instinto </h4>
                                        </div>
                            </div>
                    </a>
            </div>
        </div>


    </div>
@endsection