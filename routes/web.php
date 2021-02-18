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

Route::get('/dashboardpro', function () {
    return view('dashboardpro');
});

Route::get('/total', 'KriteriaController@get_normal_kriteria');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('HOME'); 

Route::get('/dashboard', 'HomeController@dashboard')->name('DASHBOARD'); 

// Route::get('/register', function(){
//     return view('auth\register');
// });

//============ Detail Kategori ============
Route::get('/data_detail_kategori', 'DetailKategoriController@index');
Route::get('/data_detail_kategori/add', 'DetailKategoriController@create');
Route::get('/data_detail_kategori/show/{id}', 'DetailKategoriController@detail_ukuran');
Route::post('/data_detail_kategori/ukuran/store', 'DetailKategoriController@ukuran_store');
Route::get('/data_detail_kategori/ukuran/delete/{id}', 'DetailKategoriController@ukuran_destroy');


Route::post('/data_detail_kategori/store', 'DetailKategoriController@store');
Route::get('/data_detail_kategori/edit/{id}', 'DetailKategoriController@edit');
Route::post('/data_detail_kategori/update/{id}', 'DetailKategoriController@update');
Route::get('/data_detail_kategori/delete/{id}', 'DetailKategoriController@destroy');
//============ Detail Kategori END ============

//============ Detail Pesanan ============
Route::get('/data_detail_pesanan', 'DetailPesananController@index');
Route::get('/data_detail_pesanan/add', 'DetailPesananController@create');
Route::post('/data_detail_pesanan/store', 'DetailPesananController@store');
Route::get('/data_detail_pesanan/edit/{id}', 'DetailPesananController@edit');
Route::post('/data_detail_pesanan/update/{id}', 'DetailPesananController@update');
Route::get('/data_detail_pesanan/delete/{id}', 'DetailPesananController@destroy');
//============ Detail Pesanan END ============


//============ Kategori ============
Route::get('/data_kategori', 'KategoriController@index');
Route::get('/data_kategori/add', 'KategoriController@create');
Route::post('/data_kategori/store', 'KategoriController@store');
Route::get('/data_kategori/edit/{id}', 'KategoriController@edit');
Route::post('/data_kategori/update/{id}', 'KategoriController@update');
Route::get('/data_kategori/delete/{id}', 'KategoriController@destroy');
//============ Kategori END ============


//============ Pelanggan ============
Route::get('/data_pelanggan', 'PelangganController@index');
Route::get('/data_pelanggan/show/{id}', 'PelangganController@show');
Route::get('/data_pelanggan/add', 'PelangganController@create');
Route::post('/data_pelanggan/store', 'PelangganController@store');
Route::get('/data_pelanggan/edit/{id}', 'PelangganController@edit');
Route::post('/data_pelanggan/update/{id}', 'PelangganController@update');
Route::get('/data_pelanggan/delete/{id}', 'PelangganController@destroy');
//============ Pelanggan END ============


//============ Penjahit ============
Route::get('/data_penjahit', 'PenjahitController@index');
Route::get('/data_penjahit/show/{id}', 'PenjahitController@show');

Route::get('/data_penjahit/show/kategori/add/{id}', 'PenjahitController@detail_kategori_create');
Route::post('/data_penjahit/show/kategori/store', 'PenjahitController@detail_kategori_store');
Route::get('/data_penjahit/show/kategori/edit/{id}', 'PenjahitController@detail_kategori_edit');
Route::post('/data_penjahit/show/kategori/update/{id}', 'PenjahitController@detail_kategori_update');
Route::get('/data_penjahit/show/kategori/delete/{id}', 'PenjahitController@detail_kategori_destroy');

Route::get('/data_penjahit/show/ukuran/{id}', 'PenjahitController@detail_ukuran');
Route::get('/data_penjahit/show/ukuran/delete/{id}', 'DetailKategoriController@detail_ukuran_destroy');


// Route::get('/data_penjahit/show/ukuran/edit{id}', 'PenjahitController@detail_ukuran_edit');
// Route::get('/data_penjahit/show/ukuran/update{id}', 'PenjahitController@detail_ukuran_update');

Route::get('/data_penjahit/add', 'PenjahitController@create');
Route::post('/data_penjahit/store', 'PenjahitController@store');
Route::get('/data_penjahit/edit/{id}', 'PenjahitController@edit');
Route::post('/data_penjahit/update/{id}', 'PenjahitController@update');
Route::get('/data_penjahit/delete/{id}', 'PenjahitController@destroy');
//============ Penjahit END ============


//============ Pesanan ============
Route::get('/data_pesanan', 'PesananController@index');

Route::post('/data_pesanan/store', 'PesananController@store');
Route::get('/data_pesanan/delete/{id}', 'PesananController@destroy');


Route::get('/data_pesanan/show/{id}', 'PesananController@show');
// Route::get('/data_pesanan/add', 'PesananController@create');
// Route::post('/data_pesanan/store', 'PesananController@store');
Route::get('/data_pesanan/edit/{id}', 'PesananController@edit');
Route::post('/data_pesanan/update/{id}', 'PesananController@update');
// Route::get('/data_pesanan/delete/{id}', 'PesananController@destroy');
//============ Pesanan END ============


//============ Rating ============
Route::get('/data_rating', 'RatingController@index');
Route::get('/data_rating/add', 'RatingController@create');
Route::post('/data_rating/store', 'RatingController@store');
Route::get('/data_rating/edit/{id}', 'RatingController@edit');
Route::post('/data_rating/update/{id}', 'RatingController@update');
Route::get('/data_rating/delete/{id}', 'RatingController@destroy');
//============ Rating END ============


//============ Ukuran ============
Route::get('/data_ukuran', 'UkuranController@index');
Route::get('/data_ukuran/add', 'UkuranController@create');
Route::post('/data_ukuran/store', 'UkuranController@store');
Route::get('/data_ukuran/edit/{id}', 'UkuranController@edit');
Route::post('/data_ukuran/update/{id}', 'UkuranController@update');
Route::get('/data_ukuran/delete/{id}', 'UkuranController@destroy');
//============ Ukuran END ============


//============ Utilitas ============
Route::get('/data_utilitas', 'UtilitasController@index');
Route::get('/data_utilitas/add', 'UtilitasController@create');
Route::post('/data_utilitas/store', 'UtilitasController@store');
Route::get('/data_utilitas/edit/{id}', 'UtilitasController@edit');
Route::post('/data_utilitas/update/{id}', 'UtilitasController@update');
Route::get('/data_utilitas/delete/{id}', 'UtilitasController@destroy');
//============ Utilitas END ============

//============ Utilitas ============
Route::get('/data_kriteria', 'KriteriaController@index');
Route::get('/data_kriteria/add', 'KriteriaController@create');
Route::post('/data_kriteria/store', 'KriteriaController@store');
Route::get('/data_kriteria/edit/{id}', 'KriteriaController@edit');
Route::post('/data_kriteria/update/{id}', 'KriteriaController@update');
Route::get('/data_kriteria/delete/{id}', 'KriteriaController@destroy');
//============ Utilitas END ============

//============ Ukuran Detail Kategori ============
Route::get('/data_ukuran_detail_kategori', 'UkuranDetailKategoriController@index');
Route::get('/data_ukuran_detail_kategori/add', 'UkuranDetailKategoriController@create');
Route::post('/data_ukuran_detail_kategori/store', 'UkuranDetailKategoriController@store');
Route::get('/data_ukuran_detail_kategori/edit/{id}', 'UkuranDetailKategoriController@edit');
Route::post('/data_ukuran_detail_kategori/update/{id}', 'UkuranDetailKategoriController@update');
Route::get('/data_ukuran_detail_kategori/delete/{id}', 'UkuranDetailKategoriController@destroy');
//============ Detail Kategori END ============

//============ Ukuran Detail Pesanan ============
Route::get('/data_ukuran_detail_pesanan', 'UkuranDetailPesananController@index');
Route::get('/data_ukuran_detail_pesanan/add', 'UkuranDetailPesananController@create');
Route::post('/data_ukuran_detail_pesanan/store', 'UkuranDetailPesananController@store');
Route::get('/data_ukuran_detail_pesanan/edit/{id}', 'UkuranDetailPesananController@edit');
Route::post('/data_ukuran_detail_pesanan/update/{id}', 'UkuranDetailPesananController@update');
Route::get('/data_ukuran_detail_pesanan/delete/{id}', 'UkuranDetailPesananController@destroy');
//============ Detail Pesanan END ============

