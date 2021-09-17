<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiModel extends Model
{

    protected $table = 'nilai';
    public $timestamps = false;
    protected $primaryKey = 'id_nilai';

    protected $fillable = [
        'id_nilai',
        'id_penjahit',
        'nilai_akhir',
    ];

    public function tbl_penjahit()
    {
        return $this->belongsTo('App\Models\PenjahitModel', 'id_penjahit');
    }

}
