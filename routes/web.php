<?php

use Illuminate\Support\Facades\Route;

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

Route::resource( '/user' , 'UserController' );

Route::get('/user/hapus/{kode}','UserController@destroy');

Route::resource('/catalogue', 'CatalogueController');

Route::get('/kasmasuk/hapus/{id}','KasMasukController@destroy');

Route::resource( '/laporan' , 'LaporanController' );

Route::resource( '/dataobat' , 'DataObatController' );

Route::get('/dataobat/hapus/{id}', 'DataObatController@destroy')->name('dataobat.destroy');

Route::resource( '/transaksipenjualan' , 'TransaksiPenjualanController' );

Route::get('/transaksipenjualan/hapus/{id}', 'TransaksiPenjualanController@destroy');

Route::get('/get-harga-obat/{id}', 'DataObatController@getHargaObat');

Route::post('/laporan/transaksipenjualan', 'LaporanController@show')->name('laporan.show');

Route::get('/transaksipenjualan/detail/{id}', 'TransaksiPenjualanController@showDetail')->name('transaksipenjualan.detail');

