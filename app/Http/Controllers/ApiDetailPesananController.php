<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPesananModel;

class ApiDetailPesananController extends Controller
{
    public function get_all_detail_pesanan(){
        return response()->json(DetailPesananModel::all(), 200);
    }

    public function insert_data_detail_pesanan(Request $request){
        $insert_detail_pesanan = new DetailPesananModel;

        $insert_detail_pesanan->id_pesanan = $request->idPesanan;
        $insert_detail_pesanan->catatan_pesanan = $request->catatanPesanan;
        $insert_detail_pesanan->kategori = $request->kategori;
        $insert_detail_pesanan->bahan_jahit = $request->bahanJahit;
        $insert_detail_pesanan->asal_bahan = $request->asalBahan;
        $insert_detail_pesanan->panjang_bahan = $request->panjangBahan;
        $insert_detail_pesanan->lebar_bahan = $request->lebarBahan;
        $insert_detail_pesanan->status_bahan = $request->statusBahan;
        $insert_detail_pesanan->harga_bahan = $request->hargaBahan;
        $insert_detail_pesanan->ongkos_penjahit = $request->ongkosPenjahit;
        $insert_detail_pesanan->jumlah_jahitan = $request->jumlahJahitan;
        $insert_detail_pesanan->biaya_jahitan = $request->biayaJahitan;
        $insert_detail_pesanan->total_biaya = $request->totalBiaya;
        $insert_detail_pesanan->save();

        return response([
            'status' => 'OK',
            'message' => 'Data Berhasil Ditambahkan',
            'data' => $insert_detail_pesanan,
        ], 200);
    }

    public function update_data_detail_pesanan(Request $request, $id){

        $check_detail_pesanan = DetailPesananModel::firstWhere('id_detail_pesanan', $id);

        if($check_detail_pesanan){
            //data tersedia
            
            $data_detail_pesanan = DetailPesananModel::find($id);

            $data_detail_pesanan->id_pesanan = $request->idPesanan;
            $data_detail_pesanan->catatan_pesanan = $request->catatanPesanan;
            $data_detail_pesanan->kategori = $request->kategori;
            $data_detail_pesanan->bahan_jahit = $request->bahanJahit;
            $data_detail_pesanan->asal_bahan = $request->asalBahan;
            $data_detail_pesanan->panjang_bahan = $request->panjangBahan;
            $data_detail_pesanan->lebar_bahan = $request->lebarBahan;
            $data_detail_pesanan->status_bahan = $request->statusBahan;
            $data_detail_pesanan->harga_bahan = $request->hargaBahan;
            $data_detail_pesanan->ongkos_penjahit = $request->ongkosPenjahit;
            $data_detail_pesanan->jumlah_jahitan = $request->jumlahJahitan;
            $data_detail_pesanan->biaya_jahitan = $request->biayaJahitan;
            $data_detail_pesanan->total_biaya = $request->totalBiaya;
            $data_detail_pesanan->save();

            return response([
                'status' => 'OK',
                'message' => 'Data berhasil diupdate',
                'data' => $data_detail_pesanan,
            ], 200);

        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => "data tidak ditemukan",
            ], 400);
        }
    }

    public function delete_data_detail_pesanan(Request $request, $id){
        
        $check_detail_pesanan = DetailPesananModel::firstWhere('id_detail_pesanan', $id);

        if($check_detail_pesanan){
            //data tersedia
            
            $data_detail_pesanan = DetailPesananModel::destroy($id);

            return response([
                'status' => 'OK',
                'message' => 'Data berhasil dihapus',
            ], 200);

        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => "Data tidak ditemukan",
            ], 400);
        }
    }
}
