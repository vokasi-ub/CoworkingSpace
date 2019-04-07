<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
     protected $table = "venue";
     protected $primaryKey = 'id_venue';
     protected $fillable = [
        'nama_tempat', 'harga', 'deskripsi','image'
    ];

}   