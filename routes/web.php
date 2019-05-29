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
//RUTAS PARA VER LAS VISTAS

Route::get('/dragon_ball','CarroController@index')->name('dragon-ball');

Route::get('/cuadro1',function(){
    return view('dragon-ball.cuadro1');
})->name('cuadro1');


//RUTAS PARA EL CRUD


Route::get('/carrito/{codigo}/{cantidad}/{subtotal}','CarroController@actualizar')->name('update');

Route::get('/dragon_ball/{codigo}','ProductoController@prueba')->name('ruta');

Route::get('/{codigo}/{nombre}/{descripcion}/{precio}/{cantidad}','CarroController@guardar')->name('envio');

Route::get('/carrito/delete','CarroController@deleteAll')->name('eliminarTodo');

Route::get('/carrito','CarroController@mostrar')->name('verCarro');

Route::get('/carrito/{codigo}','CarroController@eliminar')->name('delete');