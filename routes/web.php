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

Route::get('/hello', function () {
    return view('hello');
});

Route::view('/hello', 'hello', ["foo" => "こんにちは"]);
// Route::view('/hello', 'hello');

Route::view('/hello/message', 'message', ["foo" => "こんにちは"]);

Route::get('/test', 'TestController@index');

Route::get('test/create', 'TestController@create');

Route::get('test/create2', 'TestController@create2');