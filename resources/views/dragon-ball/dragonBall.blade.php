@extends('plantilla-base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="img/disenio/imagen2.jpg" class="fotoGoku" width="1200px" height="500px">
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
                <p> Decora tu cuarto, sala o comedor con nuestros increibles cuadros, impresiona
                   a tus amigos con las escenas mas memorables de la increible serie que cautivo a millones
                   de personas en el mundo!.
               </p>
        </div>

        <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <img src="mercancia/cuadros/cuadro1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <ul>
                                    <li> Precio: $1000 pesos mexicanos </li>
                                    <li> Envio: Gratis </li>
                                    <li> Compra el cuadro representativo de la escena mas memorable
                                        del principe sayayin :3.
                                    </li>
                                </ul>
                            </div>
                            <a href="#ventana1" class="btn btn-carrito"  data-toggle ="modal">Agregar al carrito</a>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                        <img src="mercancia/cuadros/cuadro3.jpg" class="img-fluid" alt="...">
                            <div class="card-body">
                            <ul>
                                    <li> Precio: $1200 pesos mexicanos </li>
                                    <li> Envio: Gratis </li>
                                    <li> Los 2 grandes rivales de la serie juntos en un cuadro que podria estar
                                    en tu cuarto!.
                                    </li>
                                </ul>
                            </div>
                            <a href="#ventana2" class="btn btn-carrito" data-toggle ="modal">Agregar al carrito</a>
                </div>
                </div>
                <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                                <img src="mercancia/cuadros/cuadro2.jpg" class="card-img-top" alt="..." height="160px">
                                    <div class="card-body">
                                        <h5 class="card-title">Cuadro de Shenlog </h5>
                                    </div>
                                    <a href="#ventana3" class="btn btn-carrito" data-toggle="modal">Agregar al carrito</a>
                            </div>
                </div>
        </div>




    </div>
@endsection
