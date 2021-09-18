<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periode extends Model
{
    protected $table = 'periode';
    protected $fillable = [
        'id', 'judul', 'tanggal_awal','tanggal_akhir'
    ];

    protected $primaryKey = 'id';

}
