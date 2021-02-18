<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';
    public $timestamps = false;
    protected $primaryKey = 'id_pelanggan';

    protected $fillable = [
        'id_pelanggan',
        'nama_pelanggan',
        'email_pelanggan',
        'password_pelanggan',
        'telp_pelanggan',
        'latitude_pelanggan',
        'longitude_pelanggan',
        'alamat_pelanggan',
        'jk_pelanggan',
        'foto_pelanggan',
    ];



    
    public function tbl_pesanan()
    {
        return $this->hasMany('App\Models\PesananModel', 'id_pelanggan');
    }
}
