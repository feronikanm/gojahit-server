<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UkuranModel extends Model
{
    protected $table = 'ukuran';
    public $timestamps = false;
    protected $primaryKey = 'id_ukuran';

    protected $fillable = [
        'id_ukuran',
        'nama_ukuran',
        'gambar_ukuran',
    ];

    public function tbl_detail_kategori()
    {
        return $this->belongsToMany('App\Models\DetailKategoriModel');
    }

    public function tbl_ukuran_detail_pesanan()
    {
        return $this->hasMany('App\Models\UkuranDetailPesananModel', 'id_ukuran');
    }

}
