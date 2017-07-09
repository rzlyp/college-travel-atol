<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kendaraan extends Model
{
    protected $table = 'kendaraan';
    protected $fillable = [
        'id_kendaraan', 'nama_kendaraan', 'kapasitas_kendaraan','id_users'
    ];

    public $timestamps = false;
}
