<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UkuranModel;
use App\Models\KategoriModel;

class UkuranController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        //mengambil data dari tabel film
        $ukuran = UkuranModel::all();
        $kategori = KategoriModel::all();

        return view('ukuran.data_ukuran', compact('ukuran', 'kategori'));
    }

    public function create(){
        return view('ukuran.add_data_ukuran');
    }

    public function store(Request $request){
        
        $insert_data = new UkuranModel();
        
        $insert_data->nama_ukuran = $request->input('nama_ukuran');

        if($request->hasFile('gambar_ukuran')){
            $file = $request->file('gambar_ukuran');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_ukuran', $filename);
            $insert_data->gambar_ukuran = $filename;
        }else{
            return $request;
            $insert_data->gambar_ukuran = '';
        }

        $insert_data->save();

        return redirect('/data_ukuran');
    }

    public function edit($id){
        $data = UkuranModel::find($id);
        return view('ukuran.edit_data_ukuran', compact('data'));
    }

    public function update(Request $request, $id){

        $data = UkuranModel::find($id);

        $data->nama_ukuran = $request->nama_ukuran;
        
        if($request->hasFile('gambar_ukuran')){
            $file = $request->file('gambar_ukuran');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_ukuran', $filename);
            $data->gambar_ukuran = $filename;
        }

        $data->save();

        return redirect('/data_ukuran')->with('success', 'Data Ukuran Berhasil Diupdate');
    }

    public function destroy($id){

        $data = UkuranModel::find($id);
        $data->delete();

        return redirect('/data_ukuran')->with('success', 'Data Ukuran Berhasil Diupdate');
    }
}
