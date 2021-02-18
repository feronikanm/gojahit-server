<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KriteriaModel extends Model
{
    protected $table = 'kriteria';
    public $timestamps = false;
    protected $primaryKey = 'id_kriteria';

    protected $fillable = [
        'id_kriteria',
        'nama_kriteria',
        'bobot_kriteria',
    ];

    public function tbl_rating()
    {
        return $this->hasMany('App\Models\RatingModel', 'id_kriteria');
    }
}
