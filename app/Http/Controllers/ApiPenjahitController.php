<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjahitModel;

class ApiPenjahitController extends Controller
{
    public function get_all_penjahit(){
        // return response()->json(PenjahitModel::all(), 200);

        $response = DB::table('penjahit')
        ->join('penjahit', 'penjahit.id_penjahit', '=', 'nilai.id_penjahit')
        ->orderBy('nilai.nilai_akhir', 'desc')
        ->get();
        return response()->json($response, 200);
    }

    public function insert_data_penjahit(Request $request){

       
    
        // if(PenjahitModel::where('email_penjahit', '=', $request->get('email_penjahit'))->first()){
        //     // user found 
        //     return response([
        //         'status' => 'Cannot Add Data',
        //         'message' => 'Data Telah Didaftarkan',
        //     ], 404);
        // }
        // else{
            

            $insert_penjahit = new PenjahitModel;

            $insert_penjahit->nama_penjahit = $request->namaPenjahit;
            $insert_penjahit->email_penjahit = $request->emailPenjahit;
            $insert_penjahit->password_penjahit = $request->passwordPenjahit;
            $insert_penjahit->telp_penjahit = $request->telpPenjahit;
            $insert_penjahit->nama_toko = $request->namaToko;
            $insert_penjahit->keterangan_toko = $request->keteranganToko;
            $insert_penjahit->latitude_penjahit = $request->latitudePenjahit;
            $insert_penjahit->longitude_penjahit = $request->longitudePenjahit;
            $insert_penjahit->alamat_penjahit = $request->alamatPenjahit;
            $insert_penjahit->spesifikasi_penjahit = $request->spesifikasiPenjahit;
            $insert_penjahit->jangkauan_kategori_penjahit = $request->jangkauanKategoriPenjahit;
            $insert_penjahit->hari_buka = $request->hariBuka;
            $insert_penjahit->jam_buka = $request->jamBuka;
            $insert_penjahit->jam_tutup = $request->jamTutup;
            // $insert_penjahit->foto_penjahit = $request->fotoPenjahit;
            
            
            if($request->hasFile('foto_penjahit')){
                $file = $request->file('foto_penjahit');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('img_penjahit', $filename);
                $insert_penjahit->foto_penjahit = $filename;
            }
            
            // if($request->hasFile('foto_penjahit')){
            //     $file = $request->file('foto_penjahit');
            //     $extension = $file->getClientOriginalExtension();
            //     $fileName = time() . '.' . $extension;
            //     $path = $request->file('foto_penjahit')->move(public_path("img_penjahit"), $fileName);
            //     $photoURL = url("/img_penjahit/".$fileName);
            //     $insert_penjahit->foto_penjahit = $photoURL;
            // }

            

            $insert_penjahit->save();

            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil Ditambahkan',
                'data' => $insert_penjahit,
            ], 200);

        


       
    }

    public function update_data_penjahit(Request $request, $id){

        $check_penjahit = PenjahitModel::firstWhere('id_penjahit', $id);

        if($check_penjahit){
            
            //data tersedia
            $data_penjahit = PenjahitModel::find($id);

            $data_penjahit->nama_penjahit = $request->namaPenjahit;
            $data_penjahit->email_penjahit = $request->emailPenjahit;
            $data_penjahit->password_penjahit = $request->passwordPenjahit;
            $data_penjahit->telp_penjahit = $request->telpPenjahit;
            $data_penjahit->nama_toko = $request->namaToko;
            $data_penjahit->keterangan_toko = $request->keteranganToko;
            $data_penjahit->latitude_penjahit = $request->latitudePenjahit;
            $data_penjahit->longitude_penjahit = $request->longitudePenjahit;
            $data_penjahit->alamat_penjahit = $request->alamatPenjahit;
            $data_penjahit->spesifikasi_penjahit = $request->spesifikasiPenjahit;
            $data_penjahit->jangkauan_kategori_penjahit = $request->jangkauanKategoriPenjahit;
            $data_penjahit->hari_buka = $request->hariBuka;
            $data_penjahit->jam_buka = $request->jamBuka;
            $data_penjahit->jam_tutup = $request->jamTutup;
            // $data_penjahit->foto_penjahit = $request->fotoPenjahit;

            if($request->hasFile('foto_penjahit')){
                $file = $request->file('foto_penjahit');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('img_penjahit', $filename);
                $data_penjahit->foto_penjahit = $filename;
            }

            // if($request->hasFile('foto_penjahit')){
            //     $file = $request->file('foto_penjahit');
            //     $extension = $file->getClientOriginalExtension();
            //     $fileName = time() . '.' . $extension;
            //     $path = $request->file('foto_penjahit')->move(public_path("img_penjahit"), $fileName);
            //     $photoURL = url("/img_penjahit/".$fileName);
            //     $data_penjahit->foto_penjahit = $photoURL;
            // }

            $data_penjahit->save();

            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil Diupdate',
                'data' => $data_penjahit,
            ], 200);
        
        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => 'Data Tidak Ditemukan'
            ], 404);
        }
    }


    public function delete_data_penjahit(Request $request, $id){

        $check_penjahit = PenjahitModel::firstWhere('id_penjahit', $id);

        if($check_penjahit){
            //data tersedia

            PenjahitModel::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'Data Berhasil Dihapus'
            ], 200);
        }else{
            //data tidak tersedia
            return response([
                'status' => 'Not Found',
                'message' => 'Data Tidak Ditemukan'
            ], 404);
        }
    }
}
