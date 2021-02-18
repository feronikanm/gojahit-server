<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UkuranModel;

class ApiUkuranController extends Controller
{
    public function get_all_ukuran(){
        return response()->json(UkuranModel::all(), 200);
    }

    public function insert_data_ukuran(Request $request){

        $insert_ukuran = new UkuranModel;

        $insert_ukuran->nama_ukuran = $request->namaUkuran;
        $insert_ukuran->gambar_ukuran = $request->gambarUkuran;
        $insert_ukuran->save();

        return response([
            'status' => 'OK',
            'message' => 'Data Berhasil Ditambahkan',
            'data' => $insert_ukuran
        ], 200);

    }

    public function update_data_ukuran(Request $request, $id){
        
        $check_ukuran = UkuranModel::firstWhere('id_ukuran', $id);

        if($check_ukuran){
            //echo 'barang yang anda cari tersedia
            $data_ukuran = UkuranModel::find($id);

            $data_ukuran->nama_ukuran = $request->namaUkuran;
            $data_ukuran->gambar_ukuran = $request->gambarUkuran;
            $data_ukuran->save();

            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil di Update',
                'update_data' => $data_ukuran
            ], 200);
        
        }else{
            //echo 'data yang anda cari tidak ditemukan'
            return response([
                'status' =>'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }
    }

    public function delete_data_ukuran(Request $request, $id){

        $check_ukuran = UkuranModel::firstWhere('id_ukuran', $id);

        if($check_ukuran){
            //echo 'data yang anda cari tidak ditemukan'
            UkuranModel::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil Dihapus',
            ], 200);
        
        }else{
            //echo 'data yang anda cari tidak ditemukan
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }
    }
}
