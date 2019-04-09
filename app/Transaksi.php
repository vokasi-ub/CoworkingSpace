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

    public function get_users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function get_venue()
    {
        return $this->belongsTo(Venue::class,'id_venue');
    }

}   