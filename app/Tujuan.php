<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
  	 protected $table = 'tujuan';
    protected $fillable = [
        'id_tujuan', 'kode_tujuan', 'nama_tujuan','tarif','id_user','id_kendaraan'
    ];

    public $timestamps = false;
}
