<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UkuranModel;
use App\models\DetailKategoriModel;
use App\Models\PenjahitModel;
use App\Models\KategoriModel;

class UkuranDetailKategoriController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $ukuran = UkuranModel::all();
        $detail_kategori = DetailKategoriModel::all();
        $penjahit = PenjahitModel::all();
        $kategori = KategoriModel::all();

        return view('ukuran_detail_kategori.data_ukuran_detail_kategori', compact('ukuran', 'detail_kategori', 'penjahit', 'kategori' ));
    }

    public function create(){

    }

    public function store(){
        
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
