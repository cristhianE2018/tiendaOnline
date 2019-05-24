@extends('plantilla-base')
@section('content')
<br>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
    <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Vaciar carrito </button>
    <button class="btn btn-success"> <i class="fas fa-money-bill-wave"></i> Realizar compra </button>
    <hr>

<table class="table table-hover table-fluid" id="tablePro">
        <thead class="thead-dark">
            <tr>
                <th> Codigo </th>
                <th> Nombre </th>
                <th> Descripcion </th>
                <th> Precio </th>
                <th> Cantidad </th>
                <th> SubTotal </th>
                <th> Modificar </th>
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
                <td><input type="number" value="{{$pro->cantidad}}" class="form-control"></td>
                <td>{{ $pro->subTotal }}</td>
                <td> <button class="btn btn-info"> <i class="fas fa-edit"></i></button> </td>
                <td> <a href="{{ route('delete',$pro->id) }}"> Eliminar </a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
    <label for="tot"> Total a Pagar </label>
    <input type="number" name="tot" value="{{ $query2 }}">
</div>
@endsection
@section('codigoJs')
    <script>
        $('#tablePro').DataTable();
    </script>
@endsection