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
        'id_detail_kategori',
        'tanggal_pesanan',
        'tanggal_pesanan_selesai',
        'lama_waktu_pengerjaan',
        'catatan_pesanan',
        'desain_jahitan',
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
        'status_pesanan',
    ];

    
    public function tbl_pelanggan()
    {
        return $this->belongsTo('App\Models\PelangganModel', 'id_pelanggan');
    }

    public function tbl_penjahit()
    {
        return $this->belongsTo('App\Models\PenjahitModel', 'id_penjahit');
    }
}
