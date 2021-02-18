<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelangganModel;
use App\Models\PesananModel;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $pelanggans = PelangganModel::all();
        return view('pelanggan.data_pelanggan', ['pelanggan' => $pelanggans ]);
    }

    public function show($id){
        $data = PelangganModel::find($id);
        // $pesanan = PesananModel::all();
        
        $pesanan = DB::table('pelanggan')
        ->join('pesanan', function($join)
        {
            $join->on('pesanan.id_pelanggan', '=', 'pelanggan.id_pelanggan');
        })
        ->join('penjahit', function($join)
        {
            $join->on('penjahit.id_penjahit', '=', 'pesanan.id_penjahit');
        })
        // ->select('pelanggan.nama_kategori', 'kategori.gambar_kategori')
        ->where('pelanggan.id_pelanggan', '=', $id)
        ->get();

        return view('pelanggan.show_data_pelanggan', ['pesanan' => $pesanan], compact('data', 'pesanan'));
    }
  
    public function create(){
        return view('pelanggan.add_data_pelanggan');
    }

    public function store(Request $request){
        
        $insert_data = new PelangganModel();
        
        $insert_data->nama_pelanggan = $request->nama_pelanggan;
        $insert_data->email_pelanggan = $request->email_pelanggan;
        $insert_data->password_pelanggan = $request->password_pelanggan;
        $insert_data->telp_pelanggan = $request->telp_pelanggan;
        $insert_data->latitude_pelanggan = $request->latitude_pelanggan;
        $insert_data->longitude_pelanggan = $request->longitude_pelanggan;
        $insert_data->alamat_pelanggan = $request->alamat_pelanggan;
        $insert_data->jk_pelanggan = $request->jk_pelanggan;

        if($request->hasFile('foto_pelanggan')){
            $file = $request->file('foto_pelanggan');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_pelanggan', $filename);
            $insert_data->foto_pelanggan = $filename;
        }else{
            return $request;
            $insert_data->foto_pelanggan = '';
        }

        $insert_data->save();

        return redirect('/data_pelanggan');
    }

    public function edit($id){
        $data = PelangganModel::find($id);
        return view('pelanggan.edit_data_pelanggan', compact('data'));
    }

    public function update(Request $request, $id){

        $data = PelangganModel::find($id);

        $data->nama_pelanggan = $request->nama_pelanggan;
        $data->email_pelanggan = $request->email_pelanggan;
        $data->password_pelanggan = $request->password_pelanggan;
        $data->telp_pelanggan = $request->telp_pelanggan;
        $data->latitude_pelanggan = $request->latitude_pelanggan;
        $data->longitude_pelanggan = $request->longitude_pelanggan;
        $data->alamat_pelanggan = $request->alamat_pelanggan;
        $data->jk_pelanggan = $request->jk_pelanggan;
        
        if($request->hasFile('foto_pelanggan')){
            $file = $request->file('foto_pelanggan');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_pelanggan', $filename);
            $data->foto_pelanggan = $filename;
        }

        $data->save();

        return redirect('/data_pelanggan')->with('success', 'Data Ukuran Berhasil Diupdate');
    }

    public function destroy($id){

        $data = PelangganModel::find($id);
        $data->delete();

        return redirect('/data_pelanggan')->with('success', 'Data Ukuran Berhasil Diupdate');
    }

    //====================


    // public function show($id){
    //     $pelanggans = PelangganModel::find($id);
    //     return view('pelanggan.show_data_pelanggan')->with('pelanggan', $pelanggans);
    // }


    // public function store(Request $request){
        
    //     $insert_pelanggan = new PelangganModel();

    //     $insert_pelanggan->nama_pelanggan = $request->namaPelanggan;
    //     $insert_pelanggan->email_pelanggan = $request->emailPelanggan;
    //     $insert_pelanggan->password_pelanggan = $request->passwordPelanggan;
    //     $insert_pelanggan->telp_pelanggan = $request->telpPelanggan;
    //     $insert_pelanggan->latitude_pelanggan = $request->latitudePelanggan;
    //     $insert_pelanggan->longitude_pelanggan = $request->longitudePelanggan;
    //     $insert_pelanggan->alamat_pelanggan = $request->alamatPelanggan;
    //     $insert_pelanggan->jk_pelanggan = $request->jkPelanggan;

    //     if($request->hasFile('foto_pelanggan')){
    //         $file = $request->file('foto_pelanggan');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('img_pelanggan', $filename);
    //         $insert_pelanggan->foto_pelanggan = $filename;
    //     }else{
    //         return $request;
    //         $insert_pelanggan->foto_pelanggan = '';
    //     }

    //     $insert_pelanggan->save();

    //     return redirect()->back();
    // }


    
    // public function edit($id){
    //     $pelanggans = PelangganModel::find($id);
    //     return view('pelanggan.edit_data_pelanggan')->with('pelanggan', $pelanggans);

    //     // menggunakan query builder
    //     // $pelanggans = DB::table('pelanggan')->where('id_pelanggan', $id)->get();
    //     // return view('show_data_pelanggan', ['pelanggan' => $pelanggans]);
    // }

    // public function update(Request $request, $id){

        
    //     $data_pelanggan = PelangganModel::find($id);

    //         $data_pelanggan->nama_pelanggan = $request->namaPelanggan;
    //         $data_pelanggan->email_pelanggan = $request->emailPelanggan;
    //         $data_pelanggan->password_pelanggan = $request->passwordPelanggan;
    //         $data_pelanggan->telp_pelanggan = $request->telpPelanggan;
    //         $data_pelanggan->latitude_pelanggan = $request->latitudePelanggan;
    //         $data_pelanggan->longitude_pelanggan = $request->longitudePelanggan;
    //         $data_pelanggan->alamat_pelanggan = $request->alamatPelanggan;
    //         $data_pelanggan->jk_pelanggan = $request->jkPelanggan;
        


    //     if($request->hasFile('foto_pelanggan')){
    //         $file = $request->file('foto_pelanggan');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('img_pelanggan', $filename);
    //         $data_pelanggan->foto_pelanggan = $filename;
    //     }

    //     $data_pelanggan->save();

    //     return redirect('/data_pelanggan');

    // }

    // public function destroy($id){
        
    //     $data_pelanggan = PelangganModel::destroy($id);
    //     return redirect('/data_pelanggan');
    // }

     
}
