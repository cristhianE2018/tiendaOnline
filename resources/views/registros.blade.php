@extends('plantilla-base')
@section('content')
<br>
<div class="container-fluid">
<div class="row d-flex justify-content-center">
<div class="col-md-11">
    <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Vaciar carrito </button>
    <button class="btn btn-pagar"> <i class="fas fa-money-bill-wave"></i> Realizar compra </button>
    <hr>
    <h3> Total a pagar: ${{ $query2 }}</h3>
    <hr>
<table class="table table-hover" id="tablePro">
        <thead class="thead-dark">
            <tr>
                <th> Codigo </th>
                <th> Nombre </th>
                <th> Descripcion </th>
                <th> Precio </th>
                <th> Cantidad </th>
                <th> SubTotal </th>
                <th> Eliminar </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query as $pro)
            <tr>
                <td>{{ $pro->id }}</td>
                <td>{{ $pro->nombre }}</td>
                <td>{{ $pro->descripcion }}</td>
                <td>{{ $pro->precio }}</td>
                <td>{{$pro->cantidad}} <a href="{{ route('update',[$pro->id,
                    $pro->nombre,
                  $pro->descripcion,
                  $pro->precio,
                  "cantidad"=> $pro->cantidad+1
                  ])}}"> <i class="fas fa-plus-square"></i> </a>
                   <a href="{{ route('update',[$pro->id,
                    $pro->nombre,
                  $pro->descripcion,
                  $pro->precio,
                  "cantidad"=> $pro->cantidad-1
                  ])}}"> <i class="fas fa-minus-circle"></i> </a>
                </td>
                <td>{{ $pro->subTotal }}</td>
                <td> <a href="{{ route('delete',$pro->id) }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Eliminar </a> </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
</div>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    @csrf
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="weight" value="500">
    <input type="hidden" name="hosted_button_id" value="W9UBPDR3K9BY8">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" 
    name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
    <img alt="" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1" target="blank">
    </form>
    
</div>

@endsection
@section('codigoJs')
    <script>
        $('#tablePro').DataTable();
    </script>
@endsection