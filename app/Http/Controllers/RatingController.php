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


        $rating_penjahit = DB::table('penjahit')
        ->join('rating', function($join)
        {
            $join->on('penjahit.id_penjahit', '=', 'rating.id_penjahit');
        })
        ->join('kriteria', function($join)
        {
            $join->on('kriteria.id_kriteria', '=', 'rating.id_kriteria');
        })
        ->get();


        $nilai_terbanyak = DB::table('rating')
        ->select('rating_penjahit')
        ->groupBy('rating_penjahit')
        ->orderByRaw('COUNT(*) DESC')
        ->limit(1)
        ->get();

        // $total_rating = DB::table('penjahit')
        // ->join('rating', function($join)
        // {
        //     $join->on('penjahit.id_penjahit', '=', 'rating.id_penjahit');
        // })
        // ->join('kriteria', function($join)
        // {
        //     $join->on('kriteria.id_kriteria', '=', 'rating.id_kriteria');
        // })
        // ->where('kriteria.id_kriteria', '=', 3)
        // ->sum('rating.rating_penjahit');


        // return view('rating.data_rating', ['rating' => $rating, 'penjahit' => $penjahit, 'kriteria' => $kriteria]);
        return view('rating.data_rating', compact('rating', 'penjahit', 'kriteria', 'rating_penjahit', 'nilai_terbanyak'));
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
