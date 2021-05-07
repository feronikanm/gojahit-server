<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjahitModel;
use App\Models\KategoriModel;
use App\Models\DetailKategoriModel;
use App\Models\UkuranModel;
use App\Models\UkuranDetailKategoriModel;
use Illuminate\Support\Facades\DB;

class PenjahitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $penjahit = PenjahitModel::all();

        $hari_buka_penjahit = DB::table('penjahit')->select('hari_buka')->get();

        return view('penjahit.data_penjahit', compact('penjahit', 'hari_buka_penjahit'));
    }

    public function show($id){
        $data = PenjahitModel::find($id);
        $kategori = KategoriModel::all();
        $detail_kategori = DetailKategoriModel::all();

        $hari_bukas = DB::table('penjahit')
        ->select('penjahit.hari_buka')
        ->where('penjahit.id_penjahit', '=', $id)
        ->get();

        $kategori_penjahit = DB::table('penjahit')
        ->join('detail_kategori', function($join)
        {
            $join->on('detail_kategori.id_penjahit', '=', 'penjahit.id_penjahit');
        })
        ->join('kategori', function($join)
        {
            $join->on('kategori.id_kategori', '=', 'detail_kategori.id_kategori');
        })
        // ->select('kategori.nama_kategori', 'kategori.gambar_kategori')
        ->where('penjahit.id_penjahit', '=', $id)
        ->get();

        $pesanan = DB::table('penjahit')
        ->join('pesanan', function($join)
        {
            $join->on('penjahit.id_penjahit', '=', 'pesanan.id_penjahit');
        })
        ->join('pelanggan', function($join)
        {
            $join->on('pesanan.id_pelanggan', '=', 'pelanggan.id_pelanggan');
        })
        ->where('pelanggan.id_pelanggan', '=', $id)
        ->get();

        // ->toSql();
        // $kategori_penjahit = collect($kategori_penjahit)->map(function($x){ return (array) $x; })->toArray();
        // $kategori_penjahit = $kategori_penjahit->toArray();
        // $kategori_penjahit = json_decode($dataJson);

        // $kategori_penjahit = json_decode(json_encode($dataJson), true);
        
        // dd($kategori_penjahit);
        // dd($hari_bukas);
        return view('penjahit.show_data_penjahit', ['kategori_penjahit' => $kategori_penjahit, 'hari_buka' => $hari_bukas, 'pesanan' => $pesanan], compact('data', 'kategori', 'detail_kategori'));
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

        $ukurans = UkuranModel::all();

        return view('detail_kategori.show_detail_kategori_ukuran', ['kategori_penjahit' => $kategori_penjahit, 'ukuran_kategori_penjahit' => $ukuran_kategori_penjahit ], compact('ukurans'));

        // return view('penjahit.show_ukuran_kategori', ['kategori_penjahit' => $kategori_penjahit, 'ukuran_kategori_penjahit' => $ukuran_kategori_penjahit, ]);
    }

    public function detail_ukuran_destroy($id){
        $data = UkuranDetailKategoriModel::find($id);
        $data->delete();

        return redirect()->back();
    }
    
  
  
    public function create(){
        return view('penjahit.add_data_penjahit');
    }

    public function store(Request $request){
        
        // $insert_data = new PenjahitModel();
        
        // $insert_data->nama_penjahit = $request->nama_penjahit;
        // $insert_data->email_penjahit = $request->email_penjahit;
        // $insert_data->password_penjahit = $request->password_penjahit;
        // $insert_data->telp_penjahit = $request->telp_penjahit;
        // $insert_data->nama_toko = $request->nama_toko;
        // $insert_data->keterangan_toko = $request->keterangan_toko;
        // $insert_data->latitude_penjahit = $request->latitude_penjahit;
        // $insert_data->longitude_penjahit = $request->longitude_penjahit;
        // $insert_data->alamat_penjahit = $request->alamat_penjahit;
        // $insert_data->spesifikasi_penjahit = $request->spesifikasi_penjahit;
        // $insert_data->jangkauan_kategori_penjahit = $request->jangkauan_kategori_penjahit;
        // // $insert_data->hari_buka = $request->hari_buka;
        // $insert_data->jam_buka = $request->jam_buka;
        // $insert_data->jam_tutup = $request->jam_tutup;

        $insert_data = $request->all();
        $arrayTostring = implode(', ', $request->input('hari_buka'));
        // $insert_data['hari_buka'] = $request->input('hari_buka');
        $insert_data['hari_buka'] = $arrayTostring;

        if($request->hasFile('foto_penjahit')){
            $file = $request->file('foto_penjahit');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_penjahit', $filename);
            $insert_data['foto_penjahit'] = $filename;
        }else{
            return $request;
            $insert_data['foto_penjahit'] = '';
        }

        PenjahitModel::create($insert_data);
        
        return redirect('/data_penjahit');
    }

    public function edit($id){
        $data = PenjahitModel::find($id);
        return view('penjahit.edit_data_penjahit', compact('data'));
    }

    public function update(Request $request, $id){

        $data = PenjahitModel::find($id);

        $data->nama_penjahit = $request->nama_penjahit;
        $data->email_penjahit = $request->email_penjahit;
        $data->password_penjahit = $request->password_penjahit;
        $data->telp_penjahit = $request->telp_penjahit;
        $data->nama_toko = $request->nama_toko;
        $data->keterangan_toko = $request->keterangan_toko;
        $data->latitude_penjahit = $request->latitude_penjahit;
        $data->longitude_penjahit = $request->longitude_penjahit;
        $data->alamat_penjahit = $request->alamat_penjahit;
        $data->spesifikasi_penjahit = $request->spesifikasi_penjahit;
        $data->jangkauan_kategori_penjahit = $request->jangkauan_kategori_penjahit;
        $data->hari_buka = $request->hari_buka;
        $data->jam_buka = $request->jam_buka;
        $data->jam_tutup = $request->jam_tutup;
        
        if($request->hasFile('foto_penjahit')){
            $file = $request->file('foto_penjahit');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_penjahit', $filename);
            $data->foto_penjahit = $filename;
        }

        $data->save();

        return redirect('/data_penjahit')->with('success', 'Data Ukuran Berhasil Diupdate');
    }

    public function destroy($id){

        // $hapus = DB::table('tbl_penjahit')->where('id_penjahit', '=', $id)->delete();
        // if($hapus){
		// 	Session::flash('status','Data berhasil dihapus.');
		// }else{
		// 	Session::flash('status','Data gagal dihapus.');
		// }
    
    
        $data = PenjahitModel::find($id);
        $data->delete();

        return redirect('/data_penjahit')->with('success', 'Data Ukuran Berhasil Diupdate');
    }

    public function detail_kategori_create($id){

        $data = PenjahitModel::find($id);
        $detail_kategori = DetailKategoriModel::all();
        $penjahit = PenjahitModel::all();

        // $penjahit = PenjahitModel::pluck('nama_penjahit', 'id_penjahit');

        $kategori = KategoriModel::all();
        // $ukuran = UkuranModel::all();
        
        return view('penjahit.add_data_detail_kategori', compact('data','detail_kategori', 'penjahit', 'kategori'));
    }

    public function detail_kategori_store(Request $request){

        // $data = PenjahitModel::find($id);
        $insert_data = $request->all();
        DetailKategoriModel::create($insert_data);


        // return view('penjahit.add_data_detail_kategori', compact('data'));
        return redirect('/data_penjahit');
    }

    public function detail_kategori_edit($id){
        $data = DetailKategoriModel::find($id);
        $detail_kategori = DetailKategoriModel::all();
        $penjahit = PenjahitModel::all();
        $kategori = KategoriModel::all();

        return view('penjahit.edit_data_detail_kategori', compact('data','detail_kategori', 'penjahit', 'kategori'));
    }

    public function detail_kategori_update(Request $request, $id){
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
        return redirect('/data_penjahit');
    }


    public function detail_kategori_destroy($id){
        $data = DetailKategoriModel::find($id);
        $data->delete();

        return redirect()->back();
    }

    //====================================

    // public function show($id){
    //     $penjahits = PenjahitModel::find($id);
    //     return view('show_data_penjahit')->with('penjahit', $penjahits);
    // }

    
    // public function edit($id){
        
    //     // $penjahits = PenjahitModel::where('id_penjahit',$id)->get();
    //     // return view('edit_data_penjahit',compact('penjahit'));
        
    //     // $penjahits = PenjahitModel::find($id);
    //     // return view('edit_data_penjahit')->with('penjahit', $penjahits);

    //     //menggunakan query builder
    //     $penjahits = DB::table('penjahit')->where('id_penjahit', $id)->get();
    //     return view('edit_data_penjahit', ['penjahit' => $penjahits]);
    // }

    // public function update(Request $request, $id){


    //     // $data_penjahit = PenjahitModel::find($id);

    //     //     $data_penjahit->nama_penjahit = $request->namaPenjahit;
    //     //     $data_penjahit->email_penjahit = $request->emailPenjahit;
    //     //     $data_penjahit->password_penjahit = $request->passwordPenjahit;
    //     //     $data_penjahit->telp_penjahit = $request->telpPenjahit;
    //     //     $data_penjahit->nama_toko = $request->namaToko;
    //     //     $data_penjahit->keterangan_toko = $request->keteranganToko;
    //     //     $data_penjahit->latitude_penjahit = $request->latitudePenjahit;
    //     //     $data_penjahit->longitude_penjahit = $request->longitudePenjahit;
    //     //     $data_penjahit->alamat_penjahit = $request->alamatPenjahit;
    //     //     $data_penjahit->spesifikasi_penjahit = $request->spesifikasiPenjahit;
    //     //     $data_penjahit->jangkauan_kategori_penjahit = $request->jangkauanKategoriPenjahit;
    //     //     $data_penjahit->hari_buka = $request->hariBuka;
    //     //     $data_penjahit->jam_buka = $request->jamBuka;
    //     //     $data_penjahit->jam_tutup = $request->jamTutup;
        
    //     DB::table('penjahit')->where('id_penjahit', $request->id_penjahit)->update([
    //         'nama_penjahit' => $request->nama_penjahit,
    //         'email_penjahit' => $request->email_penjahit,
    //         'password_penjahit' => $request->password_penjahit,
    //         'telp_penjahit' => $request->telp_penjahit,
    //         'nama_toko' => $request->nama_toko,
    //         'keterangan_toko' => $request->keterangan_toko,
    //         'latitude_penjahit' => $request->latitude_penjahit,
    //         'longitude_penjahit' => $request->longitude_penjahit,
    //         'alamat_penjahit' => $request->alamat_penjahit,
    //         'spesifikasi_penjahit' => $request->spesifikasi_penjahit,
    //         'jangkauan_kategori_penjahit' => $request->jangkauan_kategori_penjahit,
    //         'hari_buka' => $request->hari_buka,
    //         'jam_buka' => $request->jam_buka,
    //         'jam_tutup' => $request->jam_tutup,

    //     ]);

    //     $data_penjahit = PenjahitModel::find($id);

    //     if($request->hasFile('foto_penjahit')){
    //         $file = $request->file('foto_penjahit');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('img_penjahit', $filename);
    //         $data_penjahit->foto_penjahit = $filename;
    //     }

    //     $data_penjahit->save();

    //     return redirect('/data_penjahit');

    // }

    // public function destroy($id){
        
    //     $data_penjahit = PenjahitModel::destroy($id);
    //     return redirect('/data_penjahit');
    // }
}
