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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/','StahlController@index');
Route::get('/panel-admin-stahl','StahlController@admin');
Route::patch('/panel-admin-stahl/{id}/stahl-update','StahlController@update');
Route::post('/panel-admin-stahl/{id}/stahl-update','StahlController@update');
Route::post('/panel-admin-stahl/{id}/stahl-store','StahlController@store');
Route::delete('/panel-admin-stahl/{id}/stahl-delete','StahlController@destroy');

Route::get('/contacts','ContactController@index');
Route::post('/contacts','ContactController@store');

Route::get('/home', 'HomeController@index')->name('home');
