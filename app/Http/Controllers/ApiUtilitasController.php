<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtilitasModel;

class ApiUtilitasController extends Controller
{
    public function get_all_utilitas(){
        return response()->json(UtilitasModel::all(), 200);
    }

    public function insert_data_utilitas(Request $request){
        $insert_utilitas = new UtilitasModel;

        $insert_utilitas->nama_utilitas = $request->namaUtilitas;
        $insert_utilitas->save();

        return response([
            'status' => 'OK',
            'message' => 'Data Berhasil ditambahkan',
            'data' => $insert_utilitas,
        ], 200);
    }

    public function update_data_utilitas(Request $request, $id){
        $check_utilitas = UtilitasModel::firstWhere('id_utilitas', $id);

        if($check_utilitas){
            //echo 'data yang anda cari tersedia'
            $data_utilitas = UtilitasModel::find($id);

            $data_utilitas->nama_utilitas = $request->namaUtilitas;
            $data_utilitas->save();
            
            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil diupdate',
                'update_data' => $data_utilitas,
            ], 200);
        }else{
            //echo 'data yang anda cari tidak ditemukan'
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }
    }

    public function delete_data_utilitas(Request $request, $id){

        $check_utilitas = UtilitasModel::firstWhere('id_utilitas', $id);
        if($check_utilitas){
            //echo 'data yang anda cari tersedia'
            UtilitasModel::destroy($id);
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
