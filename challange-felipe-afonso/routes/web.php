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
      return view('product.listagem');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produtos','ProductController@lista');

Route::get('/produtos/mostra/{id}','ProductController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/remove/{id}','ProductController@remove')->where('id', '[0-9]+');

Route::get('/produtos/edita/{id}','ProductController@edita')->where('id', '[0-9]+');

Route::get('/produtos/novo','ProductController@novo');

Route::post('/produtos/adiciona','ProductController@adiciona');

Route::post('/produtos/editar/','ProductController@editar');

Route::get('/categorias', 'CategoryController@lista');

Route::get('/categorias/edita/{id}', 'CategoryController@edita');

Route::post('/categorias/editar/', 'CategoryController@editar');

Route::get('/categorias/novo/', 'CategoryController@novo');

Route::post('/categorias/adiciona/', 'CategoryController@adiciona');

Route::get('/categorias/remove/{id}', 'CategoryController@remove');

Route::get('/pedidos', 'RequestController@novo');

Route::post('/pedidos/adiciona', 'RequestController@adiciona');

Route::get('/pedidos/resumo/{id}', 'RequestController@resumo');
