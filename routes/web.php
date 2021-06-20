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

use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/proveedor', function () {
//     return view('proveedor.index');

// });

// Route::get('/proveedor/nuevo', function () {
//     return view('proveedor.create');
// });

Route::resource('/proveedor', 'Proveedor\ProveedorController');
Route::resource('/pago'    , 'Pago\PagoController');
Route::get('/pdf','PdfController@PDF')->name('descargar');
Auth::routes();
Route::get('/proveedor/nuevo', 'Proveedor\ProveedorController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


// Route::resource('photos', 'PhotoController')->names([
//     'create' => 'photos.build'
// ]);