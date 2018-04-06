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
Route::get('/produtos/pesquisar','ProdutoController@pesquisar');
Route::post('/produto/pesquisar','ProdutoController@pesquisar');
Route::get('/produtos/inserir', 'ProdutoController@mostrar_inserir');
