@extends('plantilla-base')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-7">
    <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Vaciar carrito </button>
    <button class="btn btn-success"> <i class="fas fa-money-bill-wave"></i> Realizar compra </button>
    <hr>
<table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th> Codigo </th>
                <th> Nombre </th>
                <th> Descripcion </th>
                <th> Precio </th>
                <th> Cantidad </th>
                <th> Modificar </th>
                <th> Eliminar </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query as $producto)
            <tr>
                <td>{{ $producto->codigo }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio }}</td>
                <td> <input type="number" value="{{ $producto->cantidad }}" class="form-control"> </td>
                <td> <button class="btn btn-info"> <i class="fas fa-edit"></i></button> </td>
                <td> <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="col-md-5">
    <img src="mercancia/carro.jpg" class="img-fluid carro" alt="">
</div>
</div>
</div>
@endsection