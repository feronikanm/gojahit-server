<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UtilitasModel extends Model
{
    protected $table = 'utilitas';
    public $timestamps = false;
    protected $primaryKey = 'id_utilitas';

    protected $fillable = [
        'id_utilitas',
        'nama_utilitas',
    ];

}