<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;

class ApiKategoriController extends Controller
{
    public function get_all_kategori(){
        return response()->json(KategoriModel::all(), 200);
    }

    public function insert_data_kategori(Request $request){
        $insert_kategori = new KategoriModel;

        $insert_kategori->nama_kategori = $request->namaKategori;
        $insert_kategori->gambar_kategori = $request->gambarKategori;
        $insert_kategori->save();

        return response([
            'status' => 'OK',
            'message' => 'Data Berhasil Ditambahkan',
            'data' => $insert_kategori,
        ], 200);
    }

    public function update_data_kategori(Request $request, $id){

        $check_kategori = KategoriModel::firstWhere('id_kategori', $id);

        if($check_kategori){
            //echo 'data yang anda cari tersedia';
            $data_kategori = KategoriModel::find($id);

            $data_kategori->nama_kategori = $request->namaKategori;
            $data_kategori->gambar_kategori = $request->gambarKategori;
            $data_kategori->save();

            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil Diupdate',
                'update-data' => $data_kategori,
            ], 200);
        
        }else{
            //echo 'data yang anda cari tidak ditemukan;
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

    }

    public function delete_data_kategori(Request $request, $id){

        $check_kategori = KategoriModel::firstWhere('id_kategori', $id);

        if($check_kategori){
            KategoriModel::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil Dihapus'
            ], 200);
        
        }else{
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
    }
}
