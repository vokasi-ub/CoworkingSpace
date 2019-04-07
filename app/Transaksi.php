<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
     protected $table = "transaksi";
     protected $primaryKey = 'id_transaksi';
     protected $fillable = [
        'kode_transaksi', 'id', 'id_venue','tgl_sewa','tgl_selesai','total_pembayaran',
        'bukti_pembayaran','status_booking'
    ];

}   