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
                  "cantidad"=> $pro->cantidad+1,
                  "subtot" => $pro->precio*($pro->cantidad+1)
                  ])}}"> <i class="fas fa-plus-square"></i> </a>
                   <a href="{{ route('update',[$pro->id,
                    $pro->nombre,
                  $pro->descripcion,
                  $pro->precio,
                  "cantidad"=> $pro->cantidad-1,
                  "subtot" => $pro->precio*($pro->cantidad-1)
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
    
    
</div>

@endsection
@section('codigoJs')
    <script>
        $('#tablePro').DataTable();
    </script>
@endsection