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
    return view('welcome');
});


Route::get('cliente', 'ClienteController@index');
Route::post('cliente', 'ClienteController@store');
Route::post('storeRentasAttach', 'ClienteController@storeRentasAttach');
Route::post('storeRentasSync', 'ClienteController@storeRentasSync');


Route::get('doblaje', 'DoblajeController@index');
Route::post('doblaje', 'DoblajeController@store');
Route::get('getCategorias', 'DoblajeController@getCategorias');


Route::get('categoria', 'CategoriaController@index');
Route::post('categoria', 'CategoriaController@store');



