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

Route::get('/', 'TestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    // Administracion de productos
    Route::get('/products', 'Admin\ProductController@index');
    Route::get('/products/create', 'Admin\ProductController@create');
    Route::post('/products', 'Admin\ProductController@store');
    Route::get('/products/{id}/edit', 'Admin\ProductController@edit');
    Route::post('/products/{id}/edit', 'Admin\ProductController@update');
    Route::delete('/products/{id}/delete', 'Admin\ProductController@destroy');

    Route::get('/products/{id}/images', 'Admin\ImageController@index');
    Route::post('/products/{id}/images', 'Admin\ImageController@store');
    Route::delete('/products/{id}/images', 'Admin\ImageController@destroy');
    Route::get('/products/{id}/images/select/{image}', 'Admin\ImageController@select'); // Destacar imagen

});
