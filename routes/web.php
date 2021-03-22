<?php

use Illuminate\Support\Facades\Route;


Route::get('/colors', 'ColorController@index')
    -> name('color-index');
Route::get('/color/{id}', 'ColorController@show')
    -> name('color-show');






Route::get('/products', 'ProductController@index')
    -> name('product-index');

Route::get('/product/create', 'ProductController@create')
    -> name('product-create');
Route::post('/product/store', 'ProductController@store')
    -> name('product-store');

Route::get('/product/edit/{id}', 'ProductController@edit')
    -> name('product-edit');
Route::post('/product/update/{id}', 'ProductController@update')
    -> name('product-update');


Route::get('/product/{id}', 'ProductController@show')
    -> name('product-show');
