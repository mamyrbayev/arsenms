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


Auth::routes();

Route::get('/', ['uses' => 'HomeController@index' , 'as' => 'home']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/users', ['as' => 'users.index', 'uses' => 'UserController@index']);
    Route::post('/user/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
    Route::post('/user/balance/add/{id}', ['as' => 'user.addToBalance', 'uses' => 'UserController@addToBalance']);
    Route::post('/user/balance/withdraw/{id}', ['as' => 'user.withdrawFromBalance', 'uses' => 'UserController@withdrawFromBalance']);


});

