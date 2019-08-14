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

Route::get('name', function(){
    return "Phan Trung Phú";
});

Route::get('old', function(){
    return 25;
});

Route::get('view','HomeController@getView')->name('get.view');
Route::get('job','HomeController@getJob')->name('get.job');
Route::get('test','HomeController@getTest')->name('get.test');
