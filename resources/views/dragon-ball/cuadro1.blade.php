@extends('plantilla-base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h4> Imagenes </h4>
               <img src="{{ $produc->imagen }}" class="img-fluid">
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
                        <input type="number" placeholder="elige cantidad" class="form-control">
                    </div>
                    <a href ="{{ route('carros.index') }}" class="btn btn-success btn-block" class="form-control"><i class="fas fa-shopping-cart"></i> Añadir al carrito </a>
                <img src="mercancia/envio.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
@endsection