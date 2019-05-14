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




//Route::get('/', 'Master\kelasControl@sendWA');

Auth::routes();


//Login
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'],function(){

Route::get('/admin', function () {
    return view('/admin/menuawal');
})->name('admin');

//Route::prefix('lelang')->group(function (){
//    Route::get('/','Master\lelangControl@index')->name('dataLelang');
//    Route::get('/dataLelang', 'Master\lelangControl@getData');
//    Route::post('/simpanDataLelang', 'Master\lelangControl@insert')->name('insertDataLelang');
//    Route::delete('/hapusDataLelang','Master\lelangControl@delete')->name('deleteDataLelang');
//    Route::post('/ubahDataLelang','Master\lelangControl@update')->name('updateDataLelang');
//});
//
//Route::prefix('siswa')->group(function (){
//    Route::get('/','Master\siswaControl@index')->name('dataJudul');
//    Route::get('/dataSiswa','Master\siswaControl@getData');
//    Route::get('/dataKelas','Master\siswaControl@getDataKelas')->name('getListKelas');
//    Route::post('/simpanDataSiswa','Master\siswaControl@insert')->name('insertDataSiswa');
//    Route::get('/siswabaru','Master\siswaControl@siswaBaru')->name('siswaBaru');
//});

    Route::get('/', function () {
        return view('/admin/menuawal');
    });

Route::get('/siswabaru', function () {
    return view('/admin/master/tambahsiswa');
})->name('siswabaru');

Route::get('/datalelang', function () {
    return view('/admin/master/datalelang');
})->name('dataLelang');

});

