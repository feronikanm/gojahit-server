<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UtilitasModel;

class UtilitasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $utilitas = UtilitasModel::all();

        return view('utilitas.data_utilitas', ['utilitas' => $utilitas ]);
    }

    public function create(){
        return view('utilitas.add_data_utilitas');
    }

    public function store(Request $request){
        
        $insert_data = new UtilitasModel();
        
        $insert_data->nama_utilitas = $request->input('nama_utilitas');
        $insert_data->save();

        // return redirect()->back();
        return redirect('/data_utilitas')->with('success', 'Data Utilitas Berhasil Ditambahkan');
    }

    public function edit($id){
        $data = UtilitasModel::find($id);
        return view('utilitas.edit_data_utilitas', compact('data'));
    }

    public function update(Request $request, $id){
        $data = UtilitasModel::find($id);

        $data->nama_utilitas = $request->nama_utilitas;
        $data->save();

        return redirect('/data_utilitas')->with('success', 'Data Utilitas Berhasil Diupdate');
    }

    public function destroy($id){

        $data = UtilitasModel::find($id);
        $data->delete();

        return redirect('/data_utilitas')->with('success', 'Data Utilitas Berhasil Diupdate');
    }
}
