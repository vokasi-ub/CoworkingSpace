<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $table = "event";
     protected $primaryKey = 'id_event';
     protected $fillable = [
        'id', 'id_venue', 'nama_event','jenis','deskripsi_event','waktu_event',
        'pemateri','image_event'
    ];

}   