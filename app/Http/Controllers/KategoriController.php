<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use File;
use Symfony\Component\Console\Helper\Helper;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $kategoris = KategoriModel::all();

        return view('kategori.data_kategori', ['kategori' => $kategoris ]);
    }

    public function create(){
        return view('kategori.add_data_kategori');
    }

    public function store(Request $request){
        
        $insert_data = new KategoriModel();
        
        $insert_data->nama_kategori = $request->input('nama_kategori');

        // if($request->hasFile('gambar_kategori')){
        //     $file = $request->file('gambar_kategori');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('img_kategori', $filename);
        //     $insert_data->gambar_kategori = $filename;
        // }else{
        //     return $request;
        //     $insert_data->gambar_kategori = '';
        // }

        if($request->hasFile('gambar_kategori')){
            $file = $request->file('gambar_kategori');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_kategori', $filename);
            $insert_data->gambar_kategori = $filename;
        }

        // if($request->hasFile('gambar_kategori')){
        //     $file = $request->file('gambar_kategori');
        //     $extension = $file->getClientOriginalExtension();
        //     $fileName = time() . '.' . $extension;
        //     $path = $request->file('gambar_kategori')->move(public_path("img_kategori"), $fileName);
        //     $photoURL = url("/img_kategori/".$fileName);
        //     $insert_data->gambar_kategori = $photoURL;
        // }

        $insert_data->save();


        return redirect('/data_kategori');
    }

    public function edit($id){
        $data = KategoriModel::find($id);
        return view('kategori.edit_data_kategori', compact('data'));
    }

    public function update(Request $request, $id){
        
        // DB::table('kategori')->where('id_kategori', $request->id_kategori)->update([
        //     'nama_ketegori' => $request->nama_kategori,
        //     'gambar_kategori' => $request->gambar_kategori,
        // ]);

        $data = KategoriModel::find($id);

        $data->nama_kategori = $request->nama_kategori;
        // $data->gambar_kategori = $request->gambar_kategori;
        
        if($request->hasFile('gambar_kategori')){
            $file = $request->file('gambar_kategori');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img_kategori', $filename);
            $data->gambar_kategori = $filename;
        }

        // if($request->hasFile('gambar_kategori')){
        //     $file = $request->file('gambar_kategori');
        //     $extension = $file->getClientOriginalExtension();
        //     $fileName = time() . '.' . $extension;
        //     $path = $request->file('gambar_kategori')->move(public_path("img_kategori"), $fileName);
        //     $photoURL = url("/img_kategori/".$fileName);
        //     $data->gambar_kategori = $photoURL;
        // }

        $data->save();

        return redirect('/data_kategori')->with('success', 'Data Kategori Berhasil Diupdate');
    }

    public function destroy($id){

        // hapus data
        $data = KategoriModel::find($id);
        $data->delete();

        // hapus file
		// $data = KategoriModel::where('id_kategori',$id)->first();
		// File::delete('img_kategori/'.$gambar_kategori->file);
 
		// hapus data
		// KategoriModel::where('id',$id)->delete();
 
		// return redirect()->back();

        return redirect('/data_kategori')->with('success', 'Data Kategori Berhasil Diupdate');
    }
}
