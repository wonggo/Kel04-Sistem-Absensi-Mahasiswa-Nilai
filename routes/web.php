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

Route::get('masuk', function () {
    return view('login');
});
Route::post('masuk', 'ParkiranController@index')->name('login');

Route::get('nilai', function () {
    return view('inputNilai');
});
Route::post('nilai', 'ParkiranController@index')->name('inputNilai');

Route::get('mhs', function () {
    return view('inputMahasiswa');
});
Route::post('mhs', 'ParkiranController@index')->name('inputMahasiswa');

Route::get('absen', function () {
    return view('inputAbsensi');
});
Route::post('absen', 'ParkiranController@index')->name('inputAbsensi');

Route::get('matkul', function () {
    return view('inputMatkul');
});
Route::post('matkul', 'ParkiranController@index')->name('inputMatkul');