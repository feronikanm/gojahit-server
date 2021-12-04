<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PelangganModel;

class ApiPelangganController extends Controller
{
    public function get_all_pelanggan(){
        $pelanggan = PelangganModel::all();

        // foreach($pelanggan as $data_pelanggan)          
        // { 
        //     response()->download(public_path('img_pelanggan/'.$data_pelanggan->foto_pelanggan), 'User Image');
        // }
        return response()->json($pelanggan, 200);
    }

    public function get_data_pelanggan_by_id($id){
        $response = DB::table('pelanggan')
        ->where('pelanggan.id_pelanggan', '=', $id)
        ->get();

        return response()->json($response, 200);
    }

    // public function img_pelanggan(){
    //     return response()->download(public_path('img_pelanggan/'.$data->foto_pelanggan), 'User Image');
    // }

    public function insert_data_pelanggan(Request $request){

    
        // if(PelangganModel::where('email_pelanggan', '=', $request->get('email_pelanggan'))->first()){
        //     // user found 
        //     return response([
        //         'status' => 'Cannot Add Data',
        //         'message' => 'Data Telah Didaftarkan',
        //     ], 404);
        // }
        // else{
            
            
            $insert_pelanggan = new PelangganModel;

            $insert_pelanggan->nama_pelanggan = $request->namaPelanggan;
            $insert_pelanggan->email_pelanggan = $request->emailPelanggan;
            $insert_pelanggan->password_pelanggan = $request->passwordPelanggan;
            $insert_pelanggan->telp_pelanggan = $request->telpPelanggan;
            $insert_pelanggan->latitude_pelanggan = $request->latitudePelanggan;
            $insert_pelanggan->longitude_pelanggan = $request->longitudePelanggan;
            $insert_pelanggan->alamat_pelanggan = $request->alamatPelanggan;
            $insert_pelanggan->jk_pelanggan = $request->jkPelanggan;
            // $insert_pelanggan->foto_pelanggan = $request->fotoPelanggan;
            // $insert_pelanggan->save();

            if($request->hasFile('foto_pelanggan')){
                $file = $request->file('foto_pelanggan');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('img_pelanggan', $filename);
                $insert_pelanggan->foto_pelanggan = $filename;
            }

            // if($request->hasFile('foto_pelanggan')){
            //     $file = $request->file('foto_pelanggan');
            //     $extension = $file->getClientOriginalExtension();
            //     $fileName = time() . '.' . $extension;
            //     $path = $request->file('foto_pelanggan')->move(public_path("img_pelanggan"), $fileName);
            //     $photoURL = url("/img_pelanggan/".$fileName);
            //     $insert_pelanggan->foto_pelanggan = $photoURL;
            // }
    
            $insert_pelanggan->save();
    

            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil Ditambahkan',
                'data' => $insert_pelanggan,
            ], 200);
        
    }

    public function update_data_pelanggan(Request $request, $id){

        $check_pelanggan = PelangganModel::firstWhere('id_pelanggan', $id);

        if($check_pelanggan){
            //data tersedia

        

            $data_pelanggan = PelangganModel::find($id);

            $data_pelanggan->nama_pelanggan = $request->namaPelanggan;
            $data_pelanggan->email_pelanggan = $request->emailPelanggan;
            $data_pelanggan->password_pelanggan = $request->passwordPelanggan;
            $data_pelanggan->telp_pelanggan = $request->telpPelanggan;
            $data_pelanggan->latitude_pelanggan = $request->latitudePelanggan;
            $data_pelanggan->longitude_pelanggan = $request->longitudePelanggan;
            $data_pelanggan->alamat_pelanggan = $request->alamatPelanggan;
            $data_pelanggan->jk_pelanggan = $request->jkPelanggan;
            // $data_pelanggan->foto_pelanggan = $request->fotoPelanggan;

            if($request->hasFile('foto_pelanggan')){
                $file = $request->file('foto_pelanggan');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('img_pelanggan', $filename);
                $data_pelanggan->foto_pelanggan = $filename;
            }
            

            // if($request->hasFile('foto_pelanggan')){
            //     $file = $request->file('foto_pelanggan');
            //     $extension = $file->getClientOriginalExtension();
            //     $fileName = time() . '.' . $extension;
            //     $path = $request->file('foto_pelanggan')->move(public_path("img_pelanggan"), $fileName);
            //     $photoURL = url("/img_pelanggan/".$fileName);
            //     $data_pelanggan->foto_pelanggan = $photoURL;
            // }


        // $fileName = "user_image.jpg";
        // $path = $request->file('photo')->move(public_path("img_pelanggan"), $fileName);
        // $photoURL = url('/'.$fileName);
        // return response()->json(['url' => $photoURL], 200);
    


            $data_pelanggan->save();


            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil Diupdate',
                'data' => $data_pelanggan,
            ], 200);

        }else{
            //data tidak tersedia

            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }
    }

    public function delete_data_pelanggan(Request $request, $id){

        $check_pelanggan = PelangganModel::firstWhere('id_pelanggan', $id);

        if($check_pelanggan){
            //data tersedia
            $data_pelanggan = PelangganModel::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil Dihapus',
            ], 200);
        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => 'Data tidak ditemukan',
            ], 404);
        }
    }

    // public function file(){
    //     return response()->download(public_path('img_pelanggan/user.jpg'), 'User Image');
    // }

    // public function fileSave(Request $request){
    //     $fileName = "user_image.jpg";
    //     $path = $request->file('photo')->move(public_path("img_pelanggan"), $fileName);
    //     $photoURL = url('/'.$fileName);
    //     return response()->json(['url' => $photoURL], 200);
    // }

}
