<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    public $timestamps = false;
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'id_pesanan',
        'id_pelanggan',
        'id_penjahit',
        'tanggal_pesanan',
        'tanggal_pesanan_selesai',
        'lama_waktu_pengerjaan',
        'status_pesanan',
    ];


    
    public function tbl_detail_pesanan()
    {
        return $this->hasMany('App\Models\DetailPesananModel', 'id_pesanan');
    }
    
    public function tbl_pelanggan()
    {
        return $this->belongsTo('App\Models\PelangganModel', 'id_pelanggan');
    }

    public function tbl_penjahit()
    {
        return $this->belongsTo('App\Models\PenjahitModel', 'id_penjahit');
    }
}
