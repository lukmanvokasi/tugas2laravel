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
<<<<<<< HEAD

});

Route::get('/pegawai', 'PegawaiController@index'); 
Route::post('/pegawai/create','PegawaiController@create');
Route::get('/pegawai/{id}/edit','PegawaiController@edit');
Route::post('/pegawai/{id}/update','PegawaiController@update');
Route::get('/pegawai/{id}/delete','PegawaiController@delete');
=======
});
>>>>>>> f05463ace1701ceada1fd1586a4f69508d487008
