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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'CarroController@index');
Route::get('/cadastro_carro','CarroController@create');
Route::post('/cadastro_carro','CarroController@store');
Route::get('/edit_carro/{id}', 'CarroController@edit');
Route::put('/edit_carro/{id}', 'CarroController@update');
Route::delete('/delete_carro/{id}','CarroController@destroy');
