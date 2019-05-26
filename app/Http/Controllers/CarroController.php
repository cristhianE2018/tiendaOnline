<?php

namespace App\Http\Controllers;

use App\Carro;
use App\Producto;
use Illuminate\Http\Request;
use Session;
class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suma = Carro::sum('cantidad');
        return view('dragon-ball.dragonBall',compact('suma'));
    }

    //ELIMINA EL PRODUCTO CON EL CODIGO QUE TIENE DE PARAMETRO
    public function eliminar($codigo)
    {
        Carro::destroy($codigo);
        return redirect()->route('verCarro');
       // return view('registros',compact('query'),compact('query2'));
    }

    //MUESTRA LOS PRODUCTOS EN LA TABLA DE REGISTROS
    public function mostrar()
    {
        $query = Carro::all();
        $query2 = Carro::sum('subTotal');
        return view('registros',compact('query'),compact('query2'));
    }

    public function actualizar($code,$name,$description,$price,$cantidad)
    {
        $car = Carro::find($code);
        $car->nombre = $name;
        $car->descripcion= $description;
        $car->precio = $price;
        $car->cantidad = $cantidad;
        $car->subTotal = $price;
        $car->save();
    }
    //FUNCION QUE ALMACENA UN PRODUCTO EN EL CARRITO
    public function guardar($code,$name,$description,$price,$cantidad)
    {
        $car = new Carro;
        $car->id = $code;
        $car->nombre = $name;
        $car->descripcion= $description;
        $car->precio = $price;
        $car->cantidad = $cantidad;
        $car->subTotal = $price;
        $car->save();
        return redirect()->route('ruta',$code);
    }


   
}
