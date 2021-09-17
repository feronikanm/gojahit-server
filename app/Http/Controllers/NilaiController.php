<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiModel;
use App\Models\PenjahitModel;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        
        $result = DB::select("SELECT id_penjahit, (kriteria_1 + kriteria_2 + kriteria_3 + kriteria_4) AS NilaiAkhir
        FROM (
            SELECT id_penjahit, 
            (kriteria_1*(select normalisasi from kriteria WHERE id_kriteria = 1)) AS kriteria_1, 
            (kriteria_2*(select normalisasi from kriteria WHERE id_kriteria = 2)) AS kriteria_2, 
            (kriteria_3*(select normalisasi from kriteria WHERE id_kriteria = 3)) AS kriteria_3, 
            (kriteria_4*(select normalisasi from kriteria WHERE id_kriteria = 4)) AS kriteria_4
            FROM (
                SELECT id_penjahit, 
                ((kriteria_1-1)/(3-1)) as kriteria_1, 
                ((kriteria_2-1)/(3-1)) as kriteria_2, 
                ((kriteria_3-1)/(3-1)) as kriteria_3, 
                ((kriteria_4-1)/(3-1)) as kriteria_4
                FROM (
                    SELECT id_penjahit, 
                    AVG(kriteria_1) AS kriteria_1, 
                    AVG(kriteria_2) AS kriteria_2, 
                    AVG(kriteria_3) AS kriteria_3, 
                    AVG(kriteria_4) AS kriteria_4 
                    FROM rating 
                    GROUP BY id_penjahit) AS A ) 
                AS TABLENILAI ) 
            AS NORMALISASI
        GROUP BY id_penjahit
        ORDER BY (kriteria_1 + kriteria_2 + kriteria_3 + kriteria_4) DESC");
        // dd($result);


        $data = json_decode(json_encode($result), true);
        
        foreach ($data as $datas)
        {
            $hasil = NilaiModel::where('id_penjahit', $datas['id_penjahit'])->first();
            $hasil = NilaiModel::updateOrCreate(
                ['id_penjahit' =>  $datas['id_penjahit']],
                ['nilai_akhir' =>  $datas['NilaiAkhir']]
            );
        }


        $penilaian = DB::table('nilai')
        ->join('penjahit', function($join)
        {
            $join->on('nilai.id_penjahit', '=', 'penjahit.id_penjahit');
        })
        ->orderBy('nilai.nilai_akhir', 'desc')
        ->get();
        // dd($penilaian);
        return view('nilai.data_nilai', compact('penilaian'));

    }
}
