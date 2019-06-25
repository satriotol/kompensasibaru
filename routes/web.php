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
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/upload','UploadController@upload');
// Route::post('/upload/proses','UploadController@proses_upload');
// Route::get('/upload/hapus/{id}','UploadController@hapus');

//baru
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::get('header','kompensasiController@header');
    Route::get('/ik','kompensasiController@ik');
    Route::get('/ik2a','kompensasiController@ik2a');
    Route::get('/ik2b','kompensasiController@ik2b');
    Route::get('tambah','kompensasiController@tambah');
    Route::post('store','kompensasiController@store');
    Route::get('edit/{id}','kompensasiController@edit');
    Route::get('editfoto/{id}','kompensasiController@editfoto');
    Route::put('update/{id}','kompensasiController@update');
    Route::put('updatefoto/{id}','kompensasiController@updatefoto');
    Route::get('hapus/{id}','kompensasiController@hapus');
    Route::get('about','kompensasiController@about');
    Route::get('projects','kompensasiController@projects');
    Route::get('/cetak', 'SiswaController@cetak');
    Route::get('/siswa/export_excel', 'SiswaController@export_excel');
    Route::get('/siswa', 'SiswaController@index');
    Route::get('/siswaik2b', 'SiswaController@indexik2b');
    Route::get('/siswa/export_excel', 'SiswaController@export_excel');
    Route::get('/siswaik2b/export_excel', 'SiswaController@export_excelik2b');
});
Route::get('/','kompensasiController@home');




Route::get('/session/tampil','TesController@tampilkanSession');
Route::get('/session/buat','TesController@buatSession');
Route::get('/session/hapus','TesController@hapusSession');

Route::get('/kirimemail','MalasngodingController@index');
