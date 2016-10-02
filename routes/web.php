<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'ProdutoController@index');
Route::get('produtos', 'ProdutoController@index');
Route::get('produtos/mostra/{id?}', 'ProdutoController@show');
#Route::resource('/produtos/mostra/{id?}', 'ProdutoController@show');
Route::get('produtos/novo', 'ProdutoController@create');
Route::post('produtos/adiconar', 'ProdutoController@store');

?>