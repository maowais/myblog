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
$this->get('/','ArticlesController@index') ;


Route::post('/', 'ArticlesController@store');
route::get('Artical/' ,'ArticlesController@show') ;
$this->get('/','ArticlesController@index') ;
Route::group(['middlewareGroups' => ['web']], function () {
    return view('welcome');
});