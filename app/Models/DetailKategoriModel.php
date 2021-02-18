<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DetailKategoriModel extends Model
{
    protected $table = 'detail_kategori';
    public $timestamps = false;
    protected $primaryKey = 'id_detail_kategori';

    protected $fillable = [
        'id_detail_kategori',
        'id_penjahit',
        'id_kategori',
        'keterangan_kategori',
        'bahan_jahit',
        'harga_bahan',
        'ongkos_penjahit',
        'perkiraan_lama_waktu_pengerjaan',
    ];



    public function tbl_penjahit()
    {
        return $this->belongsTo('App\Models\PenjahitModel', 'id_penjahit');
        // return $this->belongsToMany('App\Models\PenjahitModel');
        

    }

    public function tbl_kategori()
    {
        return $this->belongsTo('App\Models\KategoriModel', 'id_kategori');
    }

    public function tbl_ukuran()
    {
        return $this->belongsToMany('App\Models\UkuranModel', 'ukuran_detail_kategori', 'id_detail_kategori', 'id_ukuran');
    }



}
