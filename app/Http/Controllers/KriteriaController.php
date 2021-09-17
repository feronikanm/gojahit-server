<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KriteriaModel;

use Illuminate\Support\Facades\DB;

class KriteriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function get_normal_kriteria(){
        // $kriteria = KriteriaModel::all();
        $bobot_kriteria = DB::table('kriteria')->pluck('bobot_kriteria');
        $total_bobot_kriteria = DB::table('kriteria')->sum('kriteria.bobot_kriteria');

        $normalisasi = array();
        foreach($bobot_kriteria as $value)          
        {              
          $total = $value/$total_bobot_kriteria;
          array_push($normalisasi, $total);
        }
        dd($normalisasi);
        // dump($normalisasi);
        return view('data_kriteria', compact('total', 'normalisasi'));

    }

    public function index(Request $request){

        $kriteria = KriteriaModel::all();

        // $bobot_kriteria = DB::table('kriteria')->select('bobot_kriteria')->get();
        $bobot_kriteria = DB::table('kriteria')->pluck('bobot_kriteria');

        $total_bobot_kriteria = DB::table('kriteria')->sum('kriteria.bobot_kriteria');

        // $normalisasi = array();
        // foreach($bobot_kriteria as $value)          
        // {              
        //   $total = $value/$total_bobot_kriteria;
        //   array_push($normalisasi, $total);
        // }

        foreach ($kriteria as $key => $value) {
            $kriteria[$key]->normalisasi = $value->bobot_kriteria / $total_bobot_kriteria;
            $kriteria[$key]->save(); 

        }

        // return view('kriteria.data_kriteria', compact('kriteria', 'total_bobot_kriteria', 'bobot_kriteria', 'normalisasi', 'total'));
        return view('kriteria.data_kriteria', compact('kriteria', 'total_bobot_kriteria'));
    }

    public function create(){
        return view('kriteria.add_data_kriteria');
    }

    public function store(Request $request){
        
        $insert_data = new KriteriaModel();
        
        $insert_data->nama_kriteria = $request->input('nama_kriteria');
        $insert_data->bobot_kriteria = $request->input('bobot_kriteria');
        $insert_data->save();

        // return redirect()->back();
        return redirect('/data_kriteria')->with('success', 'Data kriteria Berhasil Ditambahkan');
    }

    public function get_data_utilitas(){

        $utilitas = UtilitasModel::all();

        return view('kriteria.edit_data_kriteria', compact('utilitas'));
    }

    public function edit($id){
        $data = KriteriaModel::find($id);
        return view('kriteria.edit_data_kriteria', compact('data'));
    }

    public function update(Request $request, $id){
        $data = KriteriaModel::find($id);

        $data->nama_kriteria = $request->nama_kriteria;
        $data->bobot_kriteria = $request->bobot_kriteria;
        $data->save();

        return redirect('/data_kriteria')->with('success', 'Data kriteria Berhasil Diupdate');
    }

    public function destroy($id){

        $data = KriteriaModel::find($id);
        $data->delete();

        return redirect('/data_kriteria')->with('success', 'Data kriteria Berhasil Diupdate');
    }
    
}
