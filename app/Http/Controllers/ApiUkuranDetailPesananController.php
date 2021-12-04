<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UkuranDetailPesananModel;

class ApiUkuranDetailPesananController extends Controller
{
    
        public function get_all_data(){
            return response()->json(UkuranDetailPesananModel::all(), 200);
        }

        public function get_data_ukuran_by_pesanan($id){
            $response = DB::table('ukuran_detail_pesanan')
            ->join('ukuran', 'ukuran.id_ukuran', '=', 'ukuran_detail_pesanan.id_ukuran')
            ->where('ukuran_detail_pesanan.id_pesanan', '=', $id)
            ->get();
    
            return response()->json($response, 200);
        }
    
        public function insert_data(Request $request){
            $insert_data = new UkuranDetailPesananModel;
    
            $insert_data->id_pesanan = $request->idPesanan;
            $insert_data->id_ukuran = $request->idUkuran;
            $insert_data->ukuran_pesanan = $request->ukuranPesanan;
            $insert_data->save();
    
            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil ditambahkan',
                'data' => $insert_data,
            ], 200);
        }
    
        public function update_data(Request $request, $id){
            $check_data = UkuranDetailPesananModel::firstWhere('id_ukuran_detail_pesanan', $id);
    
            if($check_data){
                //echo 'data yang anda cari tersedia'
                $data = UkuranDetailPesananModel::find($id);
    
                $data->id_pesanan = $request->idPesanan;
                $data->id_ukuran = $request->idUkuran;
                $data->ukuran_pesanan = $request->ukuranPesanan;
                $data->save();
                
                return response([
                    'status' => 'OK',
                    'message' => 'Data Berhasil diupdate',
                    'update_data' => $data,
                ], 200);
            }else{
                //echo 'data yang anda cari tidak ditemukan'
                return response([
                    'status' => 'Not Found',
                    'message' => 'Data tidak ditemukan',
                ], 404);
            }
        }
    
        public function delete_data(Request $request, $id){
    
            $check_data = UkuranDetailPesananModel::firstWhere('id_ukuran_detail_pesanan', $id);
            
            if($check_data){
                //echo 'data yang anda cari tersedia'
                UkuranDetailPesananModel::destroy($id);
                return response([
                    'status' => 'OK',
                    'message' => 'Data Berhasil Dihapus', 
                ], 200);
    
            }else{
                //echo 'data yang anda cari tidak ditemukan'
                return response([
                    'status' => 'Not Found',
                    'message' => 'Data tidak ditemukan'
                ], 404);
            }
    
        }
}
