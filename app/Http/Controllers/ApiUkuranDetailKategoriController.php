<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UkuranDetailKategoriModel;

class ApiUkuranDetailKategoriController extends Controller
{
    
    public function get_all_data(){
        return response()->json(UkuranDetailKategoriModel::all(), 200);
    }

    public function insert_data(Request $request){
        $insert_data = new UkuranDetailKategoriModel;

        $insert_data->id_detail_kategori = $request->idDetailKategori;
        $insert_data->id_ukuran = $request->idUkuran;
        $insert_data->save();

        return response([
            'status' => 'OK',
            'message' => 'Data Berhasil ditambahkan',
            'data' => $insert_data,
        ], 200);
    }

    public function update_data(Request $request, $id){
        $check_data = UkuranDetailKategoriModel::firstWhere('id_ukuran_detail_kategori', $id);

        if($check_data){
            //echo 'data yang anda cari tersedia'
            $data = UkuranDetailKategoriModel::find($id);

            $data->id_detail_kategori = $request->idDetailKategori;
            $data->id_ukuran = $request->idUkuran;
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

        $check_data = UkuranDetailKategoriModel::firstWhere('id_ukuran_detail_kategori', $id);
        
        if($check_data){
            //echo 'data yang anda cari tersedia'
            UkuranDetailKategoriModel::destroy($id);
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
