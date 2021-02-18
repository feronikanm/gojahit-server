<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPesananModel;
use App\Models\PesananModel;

class DetailPesananController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        //mengambil data dari tabel film
        $detail_pesanan = DetailPesananModel::all();
        $pesanan = PesananModel::all();

        return view('detail_pesanan.data_detail_pesanan', compact('detail_pesanan', 'pesanan'));
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
