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

Route::get('/clientes', 'ClientController@index');
Route::get('/clientes/create', 'ClientController@create');

Route::get('/exames', 'ExamController@index');
Route::get('/exames/create', 'ExamController@create');
Route::post('/exames/store ', 'ExamController@store')->name('exam.store');

Route::get('/exames/{id}', 'ExamController@show')->name('exam.show');
Route::put('/exames/{id} ', 'ExamController@update')->name('exam.update');
Route::get('/exames/{id}/edit', 'ExamController@edit')->name('exam.edit');
Route::get('/exames/destroy/{id}', 'ExamController@destroy')->name('exam.destroy');
