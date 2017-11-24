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

Route::get('users', 'UserController@getIndex');

Auth::routes();
Route::get('pizza/showico/{id}/', 'pizzacontroller@showico');
Route::get('/', 'pizzacontroller@index3');
Route::get('/home', 'HomeController@index');
Route::get('/pizzalimi/{id}', 'pizzacontroller@destroy');
Route::post('/createp', 'pizzacontroller@create');
Route::get('/pizzacrear', 'pizzacontroller@index');

Route::get('/createing', 'ingredientecontroller@index');
Route::post('/ingredientecrear', 'ingredientecontroller@create');


Route::get('/pizzamodifi/{id}', 'pizzacontroller@editar');
Route::put('/updatepizza/{id}', 'pizzacontroller@update');
Route::get('/prepamodifi/{id}', 'preparacioncontroller@edit');
Route::put('/updateprepa/{id}', 'preparacioncontroller@update');
