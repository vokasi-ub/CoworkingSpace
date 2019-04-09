<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Event extends Model
{
    use Notifiable;

     protected $table = "event";
     protected $primaryKey = 'id_event';
     protected $fillable = [
        'id', 'id_venue', 'nama_event','jenis','deskripsi_event','waktu_event',
        'pemateri','image_event'
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