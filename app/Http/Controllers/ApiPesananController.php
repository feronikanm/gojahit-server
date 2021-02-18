<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesananModel;

class ApiPesananController extends Controller
{
    public function get_all_pesanan(){
        return response()->json(PesananModel::all(), 200);
    }

    public function insert_data_pesanan(Request $request){
        $insert_data_pesanan = new PesananModel;

        $insert_data_pesanan->id_pelanggan = $request->idPelanggan;
        $insert_data_pesanan->id_penjahit = $request->idPenjahit;
        $insert_data_pesanan->tanggal_pesanan = $request->tanggalPesanan;
        $insert_data_pesanan->tanggal_pesanan_selesai = $request->tanggalPesananSelesai;
        $insert_data_pesanan->lama_waktu_pengerjaan = $request->lamaWaktuPengerjaan;
        $insert_data_pesanan->status_pesanan = $request->statusPesanan;
        $insert_data_pesanan->save();

        return response([
            'status' => 'OK',
            'message' => 'Data berhasil ditambahkan',
            'data' => $insert_data_pesanan, 
        ], 200);
    }

    public function update_data_pesanan(Request $request, $id){

        $check_pesanan = PesananModel::firstWhere('id_pesanan', $id);

        if($check_pesanan){
            //data tersedia

            $data_pesanan = PesananModel::find($id);

            $data_pesanan->id_pelanggan = $request->idPelanggan;
            $data_pesanan->id_penjahit = $request->idPenjahit;
            $data_pesanan->tanggal_pesanan = $request->tanggalPesanan;
            $data_pesanan->tanggal_pesanan_selesai = $request->tanggalPesananSelesai;
            $data_pesanan->lama_waktu_pengerjaan = $request->lamaWaktuPengerjaan;
            $data_pesanan->status_pesanan = $request->statusPesanan;
            $data_pesanan->save();
            
            return response([
                'status' => 'OK',
                'message' => 'Data berhasil diupdate',
                'data' => $data_pesanan,
            ], 200);
            
        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

    }

    public function delete_data_pesanan(Request $request, $id){

        $check_pesanan = PesananModel::firstWhere('id_pesanan', $id);

        if($check_pesanan){
            //data tersedia

            $data_pesanan = PesananModel::destroy($id);
            
            return response([
                'status' => 'OK',
                'message' => 'Data berhasil dihapus',
            ], 200);
        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

    }
}
