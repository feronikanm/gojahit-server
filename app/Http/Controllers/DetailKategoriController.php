<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailKategoriModel;
use App\Models\PenjahitModel;
use App\Models\KategoriModel;
use App\Models\UkuranModel;
use App\Models\UkuranDetailKategoriModel;
use Illuminate\Support\Facades\DB;

class DetailKategoriController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $penjahit = PenjahitModel::all();
        $kategori_penjahit = DetailKategoriModel::all();

        $detail_kategori = DB::table('detail_kategori')
        ->join('penjahit', function($join)
        {
            $join->on('detail_kategori.id_penjahit', '=', 'penjahit.id_penjahit');
        })
        ->join('kategori', function($join)
        {
            $join->on('detail_kategori.id_kategori', '=', 'kategori.id_kategori');
        })
        ->orderBy('penjahit.nama_penjahit', 'asc')
        ->orderBy('kategori.nama_kategori', 'asc')
        // ->groupBy('detail_kategori.id_detail_kategori')
        ->get();
        
        return view('detail_kategori.data_detail_kategori', compact('detail_kategori', 'penjahit', 'kategori_penjahit'));
    }

    public function detail_ukuran($id){

        $kategori_penjahit = DB::table('penjahit')
        ->join('detail_kategori', function($join)
        {
            $join->on('penjahit.id_penjahit', '=', 'detail_kategori.id_penjahit');
        })
        ->join('kategori', function($join)
        {
            $join->on('detail_kategori.id_kategori', '=', 'kategori.id_kategori');
        })
        ->where('detail_kategori.id_detail_kategori', '=', $id)
        ->get();

        $ukuran_kategori_penjahit = DB::table('detail_kategori')
        ->join('ukuran_detail_kategori', function($join)
        {
            $join->on('ukuran_detail_kategori.id_detail_kategori', '=', 'detail_kategori.id_detail_kategori');
        })
        ->join('ukuran', function($join)
        {
            $join->on('ukuran.id_ukuran', '=', 'ukuran_detail_kategori.id_ukuran');
        })
        ->where('detail_kategori.id_detail_kategori', '=', $id)
        ->get();

        // $ukuran = DB::table('ukuran')
        // ->select('id_ukuran', 'nama_ukuran')
        // ->get();

        $ukurans = UkuranModel::all();

        return view('detail_kategori.show_detail_kategori_ukuran', ['kategori_penjahit' => $kategori_penjahit, 'ukuran_kategori_penjahit' => $ukuran_kategori_penjahit ], compact('ukurans'));
        // return view('detail_kategori.show_detail_kategori_ukuran', ['kategori_penjahit' => $kategori_penjahit, 'ukuran_kategori_penjahit' => $ukuran_kategori_penjahit, 'ukuran_kategori_penjahit' => $ukuran_kategori_penjahit]);
    }

    public function create(){

        $detail_kategori = DetailKategoriModel::all();
        $penjahit = PenjahitModel::all();
        $kategori = KategoriModel::all();
        $ukuran = UkuranModel::all();
        
        return view('detail_kategori.add_data_detail_kategori', compact('detail_kategori', 'penjahit', 'kategori', 'ukuran'));
    }

    public function store(Request $request){

        $insert_data = $request->all();
        DetailKategoriModel::create($insert_data);
        
        return redirect('/data_detail_kategori')->with('success', 'Data Detail Kategori Berhasil Ditambahkan');
    }

    public function edit($id){
        $data = DetailKategoriModel::find($id);
        $detail_kategori = DetailKategoriModel::all();
        $penjahit = PenjahitModel::all();
        $kategori = KategoriModel::all();

        return view('detail_kategori.edit_data_detail_kategori', compact('data','detail_kategori', 'penjahit', 'kategori'));
    }

    public function update(Request $request, $id){
        $data = DetailKategoriModel::find($id);

        $data->id_penjahit = $request->id_penjahit;
        $data->id_kategori = $request->id_kategori;
        $data->keterangan_kategori = $request->keterangan_kategori;
        $data->bahan_jahit = $request->bahan_jahit;
        $data->harga_bahan = $request->harga_bahan;
        $data->ongkos_penjahit = $request->ongkos_penjahit;
        $data->perkiraan_lama_waktu_pengerjaan = $request->perkiraan_lama_waktu_pengerjaan;
        $data->save();

        // $data = $request->all();
        
        // DetailKategoriModel::find($data);
        return redirect('/data_detail_kategori');
    }

    public function destroy($id){
        $data = DetailKategoriModel::find($id);
        $data->delete();

        return redirect('/data_detail_kategori');
    }

    public function ukuran_store(Request $request){

        $insert_data = $request->all();
        UkuranDetailKategoriModel::create($insert_data);
        
        return redirect()->back();
    }

    public function ukuran_destroy($id){
        $data = UkuranDetailKategoriModel::find($id);
        $data->delete();

        return redirect()->back();
    }
}
