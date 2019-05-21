<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('plantilla-base');
})->name('inicio');

Route::get('/dragon_ball',function()
{
    return view('dragon-ball.dragonBall');
})->name('dragon-ball');

Route::resource('carros','CarroController');

Route::get('/carro',function(){
    return view('registros');
})->name('carro');

Route::get('/cuadro1',function(){
    return view('dragon-ball.cuadro1');
})->name('cuadro1');

Route::get('/cuadro2',function(){
    return view('dragon-ball.cuadro2');
})->name('cuadro2');

Route::get('/dragon-ball/cuadros/{codigo}','ProductoController@prueba')->name('ruta');