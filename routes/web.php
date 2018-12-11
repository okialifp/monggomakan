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
    return view('/master/head');
});


Route::get('/proses/index', 'MonggoController@index')->name('proses.index');
Route::get('/proses/create', 'MonggoController@create')->name('proses.create');
Route::post('/proses/save', 'MonggoController@save')->name('proses.save');
Route::get('/proses/edit{id}', 'MonggoController@edit')->name('proses.edit');
Route::post('/proses/update', 'MonggoController@update')->name('proses.update');
Route::get('/proses/delete{id}', 'MonggoController@delete')->name('proses.delete');

