<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

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
    public function eliminar($codigo)
    {
        $query = Carro::all();
        $query2 = Carro::sum('subTotal');
        Carro::destroy($codigo);
        return view('registros',compact('query'),compact('query2'));
    }
    public function mostrar()
    {
        $query = Carro::all();
        $query2 = Carro::sum('subTotal');
        return view('registros',compact('query'),compact('query2'));
    }
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
    }


   
}
