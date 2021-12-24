<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UkuranDetailPesananModel;
use App\Models\DetailPesananModel;
use Illuminate\Support\Facades\DB;

class UkuranDetailPesananController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $ukuran_detail_pesanan = UkuranDetailPesananModel::all();


        $data_ukuran_detail_pesanan = DB::table('ukuran_detail_pesanan')
        ->join('ukuran', function($join)
        {
            $join->on('ukuran.id_ukuran', '=', 'ukuran_detail_pesanan.id_ukuran');
        })
        ->join('pesanan', function($join)
        {
            $join->on('pesanan.id_pesanan', '=', 'ukuran_detail_pesanan.id_pesanan');
        })
        ->join('detail_kategori', function($join)
        {
            $join->on('detail_kategori.id_detail_kategori', '=', 'pesanan.id_detail_kategori');
        })
        ->join('kategori', function($join)
        {
            $join->on('kategori.id_kategori', '=', 'detail_kategori.id_kategori');
        })
        ->get();


        return view('ukuran_detail_pesanan.data_ukuran_detail_pesanan', compact('ukuran_detail_pesanan', 'data_ukuran_detail_pesanan'));
    }


    public function store(Request $request){

        $insert_data = $request->all();
        UkuranDetailPesananModel::create($insert_data);
        
        return redirect()->back();
        
    }

    public function edit($id){
        $data = UkuranDetailPesananModel::find($id);

        $data_ukuran_detail_pesanan = DB::table('ukuran_detail_pesanan')
        ->join('ukuran', function($join)
        {
            $join->on('ukuran.id_ukuran', '=', 'ukuran_detail_pesanan.id_ukuran');
        })
        ->join('pesanan', function($join)
        {
            $join->on('pesanan.id_pesanan', '=', 'ukuran_detail_pesanan.id_pesanan');
        })
        ->join('detail_kategori', function($join)
        {
            $join->on('detail_kategori.id_detail_kategori', '=', 'pesanan.id_detail_kategori');
        })
        ->join('kategori', function($join)
        {
            $join->on('kategori.id_kategori', '=', 'detail_kategori.id_kategori');
        })
        ->where('ukuran_detail_pesanan.id_ukuran_detail_pesanan', '=', $id)
        ->get();

        return view('ukuran_detail_pesanan.edit_data_ukuran_detail_pesanan', compact('data', 'data_ukuran_detail_pesanan'));
    }

    public function update(Request $request, $id){

        $data = UkuranDetailPesananModel::find($id);

        $data->id_pesanan = $request->id_pesanan;
        $data->id_ukuran = $request->id_ukuran;
        $data->ukuran_pesanan = $request->ukuran_pesanan;
        $data->save();

        return redirect('/data_ukuran_detail_pesanan')->with('success', 'Data Ukuran Berhasil Diupdate');

    }

    public function destroy($id){

        $data = UkuranDetailPesananModel::find($id);
        $data->delete();

        return redirect()->back();

    }
}
