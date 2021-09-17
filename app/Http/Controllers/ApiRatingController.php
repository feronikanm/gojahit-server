<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingModel;

class ApiRatingController extends Controller
{
    public function get_all_rating(){
        return response()->json(RatingModel::all(), 200);
    }

    public function insert_data_rating(Request $request){
        $insert_rating = new RatingModel;

        $insert_rating->id_penjahit = $request->idPenjahit;
        $insert_rating->kriteria_1 = $request->kriteria1;
        $insert_rating->kriteria_2 = $request->kriteria2;
        $insert_rating->kriteria_3 = $request->kriteria3;
        $insert_rating->kriteria_4 = $request->kriteria4;
        $insert_rating->save();
        
        return response([
            'status' => 'OK',
            'message' => "Data berhasil ditambah",
            'data' => $insert_rating,
        ], 200);
    }

    public function update_data_rating(Request $request, $id){
        $check_rating = RatingModel::firstWhere('id_rating', $id);

        if($check_rating){
            //data tersedia
            $data_rating = RatingModel::find($id);

            $data_rating->id_penjahit = $request->idPenjahit;
            $data_rating->kriteria_1 = $request->kriteria1;
            $data_rating->kriteria_2 = $request->kriteria2;
            $data_rating->kriteria_3 = $request->kriteria3;
            $data_rating->kriteria_4 = $request->kriteria4;
            $data_rating->save();

            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil diupdate',
                'data' => $data_rating,
            ], 200);
        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }
    }

    public function delete_data_rating(Request $request, $id){
        $check_rating = RatingModel::firstWhere('id_rating', $id);

        if($check_rating){
            //data tersedia
            $data_rating = RatingModel::destroy($id);
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
