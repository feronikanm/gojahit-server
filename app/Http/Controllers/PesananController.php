<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesananModel;
use App\Models\PelangganModel;
use App\Models\PenjahitModel;

class PesananController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        //mengambil data dari tabel film
        $pesanan = PesananModel::all();
        $pelanggans = PelangganModel::all();
        $penjahits = PenjahitModel::all();

        return view('pesanan.data_pesanan', compact('pesanan', 'pelanggans', 'penjahits'));
    }

    public function store(Request $request){

        $insert_data = $request->all();
        PesananModel::create($insert_data);
        
        return redirect('/data_pesanan');
    }

    public function ukuran_destroy($id){
        $data = PesananModel::find($id);
        $data->delete();

        return redirect()->back();
    }


    public function edit(){

    }

    public function update(){

    }

    
}
