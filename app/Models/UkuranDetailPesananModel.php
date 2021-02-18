<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UkuranDetailPesananModel extends Model
{
    protected $table = 'ukuran_detail_pesanan';
    public $timestamps = false;
    protected $primaryKey = 'id_ukuran_detail_pesanan';

    protected $fillable = [
        'id_ukuran_detail_pesanan',
        'id_detail_pesanan',
        'nama_ukuran',
        'ukuran_pesanan',
    ];

    public function tbl_detail_pesanan()
    {
        return $this->belongsTo('App\Models\DetailPesananModel', 'id_detail_pesanan');
    }
}
