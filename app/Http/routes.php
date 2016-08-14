<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
$this->get('/','bblogController@index') ;
Route::post('bblog/', 'bblogController@store');

Route::group(['middlewareGroups' => ['web']], function () {
    return view('welcome');
});