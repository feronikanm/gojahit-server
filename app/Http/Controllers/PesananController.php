<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesananModel;
use App\Models\PelangganModel;
use App\Models\PenjahitModel;
use App\Models\DetailKategoriModel;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data_kategori_by_penjahit = DB::table('detail_kategori')
        ->join('penjahit', function($join)
        {
            $join->on('penjahit.id_penjahit', '=', 'detail_kategori.id_penjahit');
        })
        ->join('kategori', function($join)
        {
            $join->on('kategori.id_kategori', '=', 'detail_kategori.id_kategori');
        })
        ->get();

        $data_pesanan = DB::table('pesanan')
        ->join('penjahit', function($join)
        {
            $join->on('penjahit.id_penjahit', '=', 'pesanan.id_penjahit');
        })
        ->join('pelanggan', function($join)
        {
            $join->on('pelanggan.id_pelanggan', '=', 'pesanan.id_pelanggan');
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

        $pesanan = PesananModel::all();
        $pelanggans = PelangganModel::all();
        $penjahits = PenjahitModel::all();

        $detail_kategori = DB::table('detail_kategori')
        ->join('kategori', function($join)
        {
            $join->on('detail_kategori.id_kategori', '=', 'kategori.id_kategori');
        })
        ->get();


        return view('pesanan.data_pesanan', compact('pesanan', 'pelanggans', 'penjahits', 'detail_kategori', 'data_pesanan'));
    }

    public function detail_kategori_by_penjahit($id){

        $penjahit = PenjahitModel::find($id);

        $detail_kategori_penjahit = DB::table('penjahit')
        ->join('detail_kategori', function($join)
        {
            $join->on('detail_kategori.id_penjahit', '=', 'penjahit.id_penjahit');
        })
        ->join('kategori', function($join)
        {
            $join->on('kategori.id_kategori', '=', 'detail_kategori.id_kategori');
        })
        ->where('penjahit.id_penjahit', '=', $id)
        ->get();


        return view('pesanan.show_data_detail_kategori_by_penjahit', compact('detail_kategori_penjahit','penjahit'));
    }

    public function create($id){
        $data = DetailKategoriModel::find($id);
        $penjahit = PenjahitModel::all();
        $pelanggans = PelangganModel::all();

        return view('pesanan.add_data_pesanan', compact('data', 'penjahit', 'pelanggans'));
    }

    public function store(Request $request){

        $insert_data = $request->all();
        PesananModel::create($insert_data);
        
        return redirect('/data_pesanan');
    }

    public function destroy($id){
        $data = PesananModel::find($id);
        $data->delete();

        return redirect()->back();
    }


    public function edit($id){
        $data = PesananModel::find($id);
        $penjahit = PenjahitModel::all();
        $pelanggans = PelangganModel::all();

        $data_pesanan = DB::table('pesanan')
        ->join('penjahit', function($join)
        {
            $join->on('penjahit.id_penjahit', '=', 'pesanan.id_penjahit');
        })
        ->join('pelanggan', function($join)
        {
            $join->on('pelanggan.id_pelanggan', '=', 'pesanan.id_pelanggan');
        })
        ->join('detail_kategori', function($join)
        {
            $join->on('detail_kategori.id_detail_kategori', '=', 'pesanan.id_detail_kategori');
        })
        ->join('kategori', function($join)
        {
            $join->on('kategori.id_kategori', '=', 'detail_kategori.id_kategori');
        })
        ->where('pesanan.id_pesanan', '=', $id)
        ->get();

        return view('pesanan.edit_data_pesanan', compact('data', 'penjahit', 'pelanggans', 'data_pesanan'));
    }

    public function update(Request $request, $id){
        $data = PesananModel::find($id);

        $data->id_pelanggan = $request->id_pelanggan;
        $data->id_penjahit = $request->id_penjahit;
        $data->id_detail_kategori = $request->id_detail_kategori;
        $data->tanggal_pesanan = $request->tanggal_pesanan;
        $data->tanggal_pesanan_selesai = $request->tanggal_pesanan_selesai;
        $data->lama_waktu_pengerjaan = $request->lama_waktu_pengerjaan;
        $data->catatan_pesanan = $request->catatan_pesanan;
        $data->desain_jahitan = $request->desain_jahitan;
        $data->bahan_jahit = $request->bahan_jahit;
        $data->asal_bahan = $request->asal_bahan;
        $data->panjang_bahan = $request->panjang_bahan;
        $data->lebar_bahan = $request->lebar_bahan;
        $data->status_bahan = $request->status_bahan;
        $data->harga_bahan = $request->harga_bahan;
        $data->ongkos_penjahit = $request->ongkos_penjahit;
        $data->jumlah_jahitan = $request->jumlah_jahitan;
        $data->biaya_jahitan = $request->biaya_jahitan;
        $data->total_biaya = $request->total_biaya;
        $data->status_pesanan = $request->status_pesanan;
        $data->save();

        return redirect('/data_pesanan')->with('success', 'Data Ukuran Berhasil Diupdate');
    
    }

    public function show($id){
        $data = PesananModel::find($id);
        $penjahit = PenjahitModel::all();
        $pelanggans = PelangganModel::all();
        $detail_kategori = DetailKategoriModel::all();
        $kategori = KategoriModel::all();

        $data_pesanan = DB::table('pesanan')
        ->join('penjahit', function($join)
        {
            $join->on('penjahit.id_penjahit', '=', 'pesanan.id_penjahit');
        })
        ->join('pelanggan', function($join)
        {
            $join->on('pelanggan.id_pelanggan', '=', 'pesanan.id_pelanggan');
        })
        ->join('detail_kategori', function($join)
        {
            $join->on('detail_kategori.id_detail_kategori', '=', 'pesanan.id_detail_kategori');
        })
        ->join('kategori', function($join)
        {
            $join->on('kategori.id_kategori', '=', 'detail_kategori.id_kategori');
        })
        ->where('pesanan.id_pesanan', '=', $id)
        ->get();

        $data_ukuran_detail_kategori = DB::table('ukuran_detail_kategori')
        ->join('detail_kategori', function($join)
        {
            $join->on('detail_kategori.id_detail_kategori', '=', 'ukuran_detail_kategori.id_detail_kategori');
        })
        ->join('kategori', function($join)
        {
            $join->on('kategori.id_kategori', '=', 'detail_kategori.id_kategori');
        })
        ->join('ukuran', function($join)
        {
            $join->on('ukuran.id_ukuran', '=', 'ukuran_detail_kategori.id_ukuran');
        })
        ->where('ukuran_detail_kategori.id_detail_kategori', '=', $id)
        ->get();

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
        ->where('ukuran_detail_pesanan.id_pesanan', '=', $id)
        ->get();

        return view('pesanan.show_data_pesanan', compact('data', 'penjahit', 'pelanggans', 'data_pesanan', 'detail_kategori', 'kategori', 'data_ukuran_detail_kategori', 'data_ukuran_detail_pesanan'));
    }

    
}
