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
                    <a href="{{ route('cuadro1')}}">
                    <div class="card" style="width: 20rem;">
                        <img src="mercancia/cuadros/cuadro1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body d-flex align-items-center">
                            </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('cuadro2') }}">
                <div class="card" style="width: 20rem;">
                        <img src="mercancia/cuadros/cuadro3.jpeg" class="img-fluid" alt="...">
                            <div class="card-body d-flex align-items-center">
                            </div>
                </div>
                    </a>
                </div>

                <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                                <img src="mercancia/cuadros/cuadro2.jpeg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex align-items-center">

                                    </div>
                            </div>
                </div>
        </div>




    </div>
@endsection