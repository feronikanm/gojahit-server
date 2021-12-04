<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UkuranDetailPesananModel;
use App\Models\DetailPesananModel;

class UkuranDetailPesananController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        //mengambil data dari tabel film
        $ukuran_detail_pesanan = UkuranDetailPesananModel::all();

        return view('ukuran_detail_pesanan.data_ukuran_detail_pesanan', compact('ukuran_detail_pesanan'));
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
