<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'id_transaksi', 'id_pembeli', 'jumlah_tiket','status_jemput','tgl_keberangkatan','jam_keberangkatan','id_tujuan','total_harga','id_user'
    ];

    public $timestamps = true;
}
