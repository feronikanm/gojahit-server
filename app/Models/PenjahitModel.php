<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenjahitModel extends Model
{
    protected $table = 'penjahit';
    public $timestamps = false;
    protected $primaryKey = 'id_penjahit';

    // protected $casts = [
    //     'hari_buka' => 'array',
    // ];

    protected $fillable = [
        'id_penjahit',
        'nama_penjahit',
        'email_penjahit',
        'password_penjahit',
        'telp_penjahit',
        'nama_toko',
        'keterangan_toko',
        'latitude_penjahit',
        'longitude_penjahit',
        'alamat_penjahit',
        'spesifikasi_penjahit',
        'jangkauan_kategori_penjahit',
        'hari_buka',
        'jam_buka',
        'jam_tutup',
        'foto_penjahit',
    ];


    public function setHariBukaAttribute($value)
    {
        $this->attributes['hari_buka'] = json_encode($value);
    }

    public function getHariBukaAttribute($value)
    {
        return $this->attributes['hari_buka'] = json_decode($value);
    }


    public function tbl_pesanan()
    {
        return $this->hasMany('App\Models\PesananModel', 'id_penjahit');
    }

    public function tbl_detail_kategori()
    {
        return $this->hasMany('App\Models\DetailKategoriModel', 'id_penjahit');
        // return $this->belongsToMany('App\Models\DetailKategoriModel', 'detail_kategori',  'id_penjahit', 'id_kategori');
    }

    public function tbl_rating()
    {
        return $this->hasMany('App\Models\RatingModel', 'id_penjahit');
    }

    public function tbl_kategori()
    {
        return $this->belongsToMany('App\Models\KategoriModel', 'detail_kategori', 'id_penjahit', 'id_kategori');
        // return $this->hasMany('App\Models\KategoriModel', 'id_kategori');
    }

    public function tbl_nilai()
    {
        return $this->hasMany('App\Models\NilaiModel', 'id_penjahit');
    }

}
