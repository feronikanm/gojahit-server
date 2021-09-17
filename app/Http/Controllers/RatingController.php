<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingModel;
use App\Models\PenjahitModel;
use App\Models\KriteriaModel;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $rating = RatingModel::all();
        $penjahit = PenjahitModel::all();
        $kriteria = KriteriaModel::all();

        $rating_penjahit = DB::table('rating')
        ->join('penjahit', function($join)
        {
            $join->on('rating.id_penjahit', '=', 'penjahit.id_penjahit');
        })
        ->get();

        return view('rating.data_rating', compact('rating_penjahit'));
    }

    public function create(){
        return view('rating.add_data_rating');
    }

    public function store(Request $request){
        
        $insert_data = new RatingModel();
        
        $insert_data->id_penjahit = $request->id_penjahit;
        $insert_data->id_kriteria = $request->id_kriteria;
        $insert_data->rating_penjahit = $request->rating_penjahit;

        $insert_data->save();

        return redirect('/data_rating');
    }

    public function edit($id){
        $data = RatingModel::find($id);
        return view('rating.edit_data_rating', compact('data'));
    }

    public function update(Request $request, $id){

        $data = RatingModel::find($id);

        $data->id_penjahit = $request->id_penjahit;
        $data->id_kriteria = $request->id_kriteria;
        $data->rating_penjahit = $request->rating_penjahit;

        
        $data->save();

        return redirect('/data_rating')->with('success', 'Data Rating Berhasil Diupdate');
    }

    public function destroy($id){

        $data = RatingModel::find($id);
        $data->delete();

        return redirect('/data_rating')->with('success', 'Data Rating Berhasil Diupdate');
    }
}
