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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/entrijob', 'EntrijobController@index')->name('entrijob');
Route::get('/home/staff', 'hahaController@staff')->name('staff');

//amboh
Route::get('/entrijob/tambah', 'ambohController@tambah')->middleware('auth','dhabit')->name('tambah');
Route::post('/home/entrijob/', 'ambohController@store')->name('store');
Route::get('/entrijob/hapus/{id}', 'ambohController@hapus');
Route::get('/entrijob/edit/{id}', 'ambohController@edit');
Route::patch('/entrijob/update/{id}', 'ambohController@update');

Auth::routes();
Route::get('/home/rekapjob', 'RekapjobController@index')->name('rekapjob');
Route::get('/home/rekapjob/create', 'RekapjobController@create')->name('createrekapjob');
Route::post('/home/rekapjob/store', 'RekapjobController@store')->name('storerekapjob');
Route::get('home/rekapjob/delete/{rekapjob}', 'RekapjobController@destroy')->name('hapusrekapjob');
Route::get('home/rekapjob/edit/{rekapjob}', 'RekapjobController@edit')->name('editrekapjob');
Route::patch('home/rekapjob/update/{rekapjob}', 'RekapjobController@update')->name('updaterekapjob');

Route::get('home/user', 'userController@index')->middleware('auth','dhabit')->name('user');
Route::get('home/status', 'ambohController@status')->name('status');



