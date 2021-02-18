<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UkuranDetailKategoriModel extends Model
{
    protected $table = 'ukuran_detail_kategori';
    public $timestamps = false;
    protected $primaryKey = 'id_ukuran_detail_kategori';

    protected $fillable = [
        'id_ukuran_detail_kategori',
        'id_detail_kategori',
        'id_ukuran',
    ];
}
