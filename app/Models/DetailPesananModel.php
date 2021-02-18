<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPesananModel extends Model
{
    protected $table = 'detail_pesanan';
    public $timestamps = false;
    protected $primaryKey = 'id_detail_pesanan';

    
    protected $fillable = [
        'id_detail_pesanan',
        'id_pesanan',
        'catatan_pesanan',
        'kategori',
        'bahan_jahit',
        'asal_bahan',
        'panjang_bahan',
        'lebar_bahan',
        'status_bahan',
        'harga_bahan',
        'ongkos_penjahit',
        'jumlah_jahitan',
        'biaya_jahitan',
        'total_biaya',
        ];

        
    public function tbl_pesanan()
    {
        return $this->belongsTo('App\Models\PesananModel', 'id_pesanan');
    }

    public function tbl_ukuran_detail_pesanan()
    {
        return $this->hasMany('App\Models\UkuranDetailPesananModel', 'id_detail_pesanan');
    }

    

}
