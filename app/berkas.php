<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berkas extends Model
{
    protected $table = 'berkas';
    protected $fillable = [
        'id', 'judul', 'isi'
    ];

    protected $primaryKey = 'id';
}