<?php

use App\Http\Controllers\UtilitasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//============= Api Data Kategori ==================
Route::get('kategori', 'ApiKategoriController@get_all_kategori');
Route::post('kategori/insert_data', 'ApiKategoriController@insert_data_kategori');
Route::post('kategori/update/{id_kategori}', 'ApiKategoriController@update_data_kategori');
Route::post('kategori/delete/{id_kategori}', 'ApiKategoriController@delete_data_kategori');
//============= Api Data Kategori END ==================

//============= Api Data Ukuran ==================
Route::get('ukuran', 'ApiUkuranController@get_all_ukuran');
Route::post('ukuran/insert_data', 'ApiUkuranController@insert_data_ukuran');
Route::post('ukuran/update/{id_ukuran}', 'ApiUkuranController@update_data_ukuran');
Route::post('ukuran/delete/{id_ukuran}', 'ApiUkuranController@delete_data_ukuran');
//============= Api Data Ukuran End ==================

//============= Api Data Utilitas ==================
Route::get('utilitas', 'ApiUtilitasController@get_all_utilitas');
Route::post('utilitas/insert_data', 'ApiUtilitasController@insert_data_utilitas');
Route::post('utilitas/update/{id_utilitas}', 'ApiUtilitasController@update_data_utilitas');
Route::post('utilitas/delete/{id_utilitas}', 'ApiUtilitasController@delete_data_utilitas');
//============= Api Data Utilitas End ==================

//============= Api Data Pelanggan ==================
Route::get('pelanggan', 'ApiPelangganController@get_all_pelanggan');
Route::get('pelanggan/{id_pelanggan}', 'ApiPelangganController@get_data_pelanggan_by_id');
Route::get('file', 'ApiPelangganController@file');
Route::post('file', 'ApiPelangganContoroller@fileSave');
Route::post('pelanggan/insert_data', 'ApiPelangganController@insert_data_pelanggan');
Route::post('pelanggan/update/{id_pelanggan}', 'ApiPelangganController@update_data_pelanggan');
Route::post('pelanggan/delete/{id_pelanggan}', 'ApiPelangganController@delete_data_pelanggan');
//============= Api Data Pelanggan End ==================

//============= Api Data Penjahit ==================
Route::get('penjahit', 'ApiPenjahitController@get_all_penjahit');
Route::post('penjahit/insert_data', 'ApiPenjahitController@insert_data_penjahit');
Route::post('penjahit/update/{id_penjahit}', 'ApiPenjahitController@update_data_penjahit');
Route::post('penjahit/delete/{id_penjahit}', 'ApiPenjahitController@delete_data_penjahit');
//============= Api Data Penjahit End ==================

//============= Api Data Rating ==================
Route::get('rating', 'ApiRatingController@get_all_rating');
Route::post('rating/insert_data', 'ApiRatingController@insert_data_rating');
Route::post('rating/update/{id_rating}', 'ApiRatingController@update_data_rating');
Route::post('rating/delete/{id_rating}', 'ApiRatingController@delete_data_rating');
//============= Api Data Rating End ==================

//============= Api Data Nilai ==================
Route::get('nilai', 'ApiNilaiController@get_all_nilai');
//============= Api Data Nilai End ==================

//============= Api Data Pesanan ==================
Route::get('pesanan', 'ApiPesananController@get_all_pesanan');
Route::get('pesanan/{id_pesanan}', 'ApiPesananController@get_data_pesanan_by_id');
Route::get('pesanan/pelanggan/{id_pelanggan}', 'ApiPesananController@get_data_pesanan_by_pelanggan');
Route::get('pesanan/penjahit/{id_penjahit}', 'ApiPesananController@get_data_pesanan_by_penjahit');
Route::post('pesanan/insert_data', 'ApiPesananController@insert_data_pesanan');
Route::post('pesanan/update/{id_pesanan}', 'ApiPesananController@update_data_pesanan');
Route::post('pesanan/delete/{id_pesanan}', 'ApiPesananController@delete_data_pesanan');
//============= Api Data Pesanan End ==================

//============= Api Data Detail Kategori ==================
Route::get('detail_kategori', 'ApiDetailKategoriController@get_all_detail_kategori');
Route::get('detail_kategori/get_kategori/{id_kategori}', 'ApiDetailKategoriController@get_data_by_kategori');
Route::get('detail_kategori/get_penjahit/{id_penjahit}', 'ApiDetailKategoriController@get_data_kategori_by_penjahit');
Route::post('detail_kategori/insert_data', 'ApiDetailKategoriController@insert_data_detail_kategori');
Route::post('detail_kategori/update/{id_detail_kategori}', 'ApiDetailKategoriController@update_data_detail_kategori');
Route::post('detail_kategori/delete/{id_detail_kategori}', 'ApiDetailKategoriController@delete_data_detail_kategori');
//============= Api Data Detail Kategori End ==================

//============= Api Data Detail Pesanan ==================
Route::get('detail_pesanan', 'ApiDetailPesananController@get_all_detail_pesanan');
Route::post('detail_pesanan/insert_data', 'ApiDetailPesananController@insert_data_detail_pesanan');
Route::post('detail_pesanan/update/{id_detail_pesanan}', 'ApiDetailPesananController@update_data_detail_pesanan');
Route::post('detail_pesanan/delete/{id_detail_pesanan}', 'ApiDetailPesananController@delete_data_detail_pesanan');
//============= Api Data Detail Pesanan End ==================

//============= Api Data Ukuran Detail Kategori ==================
Route::get('ukuran_detail_kategori', 'ApiUkuranDetailKategoriController@get_all_data');
Route::get('ukuran_detail_kategori/get_detail_kategori/{id_detail_kategori}', 'ApiUkuranDetailKategoriController@get_ukuran_by_detail_kategori');
Route::post('ukuran_detail_kategori/insert_data', 'ApiUkuranDetailKategoriController@insert_data');
Route::post('ukuran_detail_kategori/update/{id_ukuran_detail_kategori}', 'ApiUkuranDetailKategoriController@update_data');
Route::post('ukuran_detail_kategori/delete/{id_ukuran_detail_kategori}', 'ApiUkuranDetailKategoriController@delete_data');
//============= Api Data Ukuran Detail Kategori End ==================

//============= Api Data Ukuran Detail Pesanan ==================
Route::get('ukuran_detail_pesanan', 'ApiUkuranDetailPesananController@get_all_data');
Route::get('ukuran_detail_pesanan/pesanan/{id_pesanan}', 'ApiUkuranDetailPesananController@get_data_ukuran_by_pesanan');
Route::post('ukuran_detail_pesanan/insert_data', 'ApiUkuranDetailPesananController@insert_data');
Route::post('ukuran_detail_pesanan/update/{id_ukuran_detail_pesanan}', 'ApiUkuranDetailPesananController@update_data');
Route::post('ukuran_detail_pesanan/delete/{id_ukuran_detail_pesanan}', 'ApiUkuranDetailPesananController@delete_data');
//============= Api Data Ukuran Detail Pesanan End ==================