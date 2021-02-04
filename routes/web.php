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
    return view('home');
});
Route::get('/icontacto.php', function () {
    return view('contacto');
});
Route::get('/contacto', function () {
    return view('contacto');
});

Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');
Route::resource('ventas/cliente','ClienteController');
Route::resource('compras/proveedor','ProveedorController');
Route::resource('compras/ingreso','IngresoController');
Route::resource('ventas/venta','VentaController');

Route::resource('/productos','ClienteArticuloController');

Route::get('/productos/categoria/{nombre}', [
    'uses'  => 'ClienteArticuloController@searchCategoria',
    'as'    => 'productos.categoria'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

