<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PesananModel;

class ApiPesananController extends Controller
{
    public function get_all_pesanan(){
        return response()->json(PesananModel::all(), 200);
    }

    public function get_data_pesanan_by_id($id){
        $response = DB::table('pesanan')
        ->where('pesanan.id_pesanan', '=', $id)
        ->join('penjahit', 'penjahit.id_penjahit', '=', 'pesanan.id_penjahit')
        ->join('pelanggan', 'pelanggan.id_pelanggan', '=', 'pesanan.id_pelanggan')
        ->join('detail_kategori', 'detail_kategori.id_detail_kategori', '=', 'pesanan.id_detail_kategori')
        ->get();

        return response()->json($response, 200);
    }

    public function get_data_pesanan_by_pelanggan($id){
        $response = DB::table('pesanan')
        ->join('penjahit', 'penjahit.id_penjahit', '=', 'pesanan.id_penjahit')
        ->join('pelanggan', 'pelanggan.id_pelanggan', '=', 'pesanan.id_pelanggan')
        ->join('detail_kategori', 'detail_kategori.id_detail_kategori', '=', 'pesanan.id_detail_kategori')
        ->where('pesanan.id_pelanggan', '=', $id)
        ->get();

        return response()->json($response, 200);
    }

    public function get_data_pesanan_by_penjahit($id){
        $response = DB::table('pesanan')
        ->join('penjahit', 'penjahit.id_penjahit', '=', 'pesanan.id_penjahit')
        ->join('pelanggan', 'pelanggan.id_pelanggan', '=', 'pesanan.id_pelanggan')
        ->join('detail_kategori', 'detail_kategori.id_detail_kategori', '=', 'pesanan.id_detail_kategori')
        ->where('pesanan.id_penjahit', '=', $id)
        ->get();

        return response()->json($response, 200);
    }

    public function insert_data_pesanan(Request $request){
        $insert_data_pesanan = new PesananModel;

        $insert_data_pesanan->id_pelanggan = $request->idPelanggan;
        $insert_data_pesanan->id_penjahit = $request->idPenjahit;
        $insert_data_pesanan->id_detail_kategori = $request->idDetailKategori;
        $insert_data_pesanan->tanggal_pesanan = $request->tanggalPesanan;
        $insert_data_pesanan->tanggal_pesanan_selesai = $request->tanggalPesananSelesai;
        $insert_data_pesanan->lama_waktu_pengerjaan = $request->lamaWaktuPengerjaan;
        $insert_data_pesanan->catatan_pesanan = $request->catatanPesanan;
        $insert_data_pesanan->desain_jahitan = $request->desainJahitan;
        $insert_data_pesanan->bahan_jahit = $request->bahanJahit;
        $insert_data_pesanan->asal_bahan = $request->asalBahan;
        $insert_data_pesanan->panjang_bahan = $request->panjangBahan;
        $insert_data_pesanan->lebar_bahan = $request->lebarBahan;
        $insert_data_pesanan->status_bahan = $request->statusBahan;
        $insert_data_pesanan->harga_bahan = $request->hargaBahan;
        $insert_data_pesanan->ongkos_penjahit = $request->ongkosPenjahit;
        $insert_data_pesanan->jumlah_jahitan = $request->jumlahJahitan;
        $insert_data_pesanan->biaya_jahitan = $request->biayaJahitan;
        $insert_data_pesanan->total_biaya = $request->totalBiaya;
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
            $data_pesanan->id_detail_kategori = $request->idDetailKategori;
            $data_pesanan->tanggal_pesanan = $request->tanggalPesanan;
            $data_pesanan->tanggal_pesanan_selesai = $request->tanggalPesananSelesai;
            $data_pesanan->lama_waktu_pengerjaan = $request->lamaWaktuPengerjaan;
            $data_pesanan->catatan_pesanan = $request->catatanPesanan;
            $data_pesanan->desain_jahitan = $request->desainJahitan;
            $data_pesanan->bahan_jahit = $request->bahanJahit;
            $data_pesanan->asal_bahan = $request->asalBahan;
            $data_pesanan->panjang_bahan = $request->panjangBahan;
            $data_pesanan->lebar_bahan = $request->lebarBahan;
            $data_pesanan->status_bahan = $request->statusBahan;
            $data_pesanan->harga_bahan = $request->hargaBahan;
            $data_pesanan->ongkos_penjahit = $request->ongkosPenjahit;
            $data_pesanan->jumlah_jahitan = $request->jumlahJahitan;
            $data_pesanan->biaya_jahitan = $request->biayaJahitan;
            $data_pesanan->total_biaya = $request->totalBiaya;
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
