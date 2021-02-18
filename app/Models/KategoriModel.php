<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    public $timestamps = false;
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'id_kategori',
        'nama_kategori',
        'gambar_kategori',
    ];


    public function tbl_detail_kategori()
    {
        return $this->belongsTo('App\Models\DetailKategoriModel', 'id_kategori');
    }

    public function tbl_penjahit()
    {
        return $this->hasMany('App\Models\PenjahitModel');
        // return $this->belongsTo('App\Models\PenjahitModel');
    }
    
}
