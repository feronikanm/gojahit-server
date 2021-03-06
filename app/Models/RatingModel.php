<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RatingModel extends Model
{
    protected $table = 'rating';
    public $timestamps = false;
    protected $primaryKey = 'id_rating';

    protected $fillable = [
        'id_rating',
        'id_penjahit',
        'kriteria_1',
        'kriteria_2',
        'kriteria_3',
        'kriteria_4',
    ];

    public function tbl_penjahit()
    {
        return $this->belongsTo('App\Models\PenjahitModel', 'id_penjahit');
    }

    public function tbl_kriteria()
    {
        return $this->belongsTo('App\Models\KriteriaModel', 'id_kriteria');
    }
}
