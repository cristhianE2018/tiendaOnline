@extends('plantilla-base')
@section('content')
<br>
<div class="container-fluid">
<div class="row d-flex justify-content-center">
<div class="col-md-11">
    <a href="{{ route('eliminarTodo') }}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Vaciar Carrito </a>
    <button class="btn btn-info"> <i class="fas fa-money-bill-wave"></i> Realizar compra </button>
    
    <hr>
    <h3> Total a pagar: ${{ $query2 }}</h3>
    <hr>
<table class="table table-hover" id="tablePro">
        <thead class="thead">
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
        $('#tablePro').DataTable({"language": {
		"decimal": "",
		"emptyTable": "No hay información",
		"info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
		"infoEmpty": "Mostrando 0 to 0 of 0 Registros",
		"infoFiltered": "(Filtrado de _MAX_ total entradas)",
		"lengthMenu": "Mostrar _MENU_ Registros",
		"search": "<i class='fas fa-search'></i> Buscar producto:",
		"zeroRecords": "No se encontraron registros",
		"paginate": {
			"first": "Primero",
			"last": "Ultimo",
			"next": "Siguiente",
			"previous": "Anterior"
		}
	}});


    
    </script>
@endsection