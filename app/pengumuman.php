<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = [
        'id', 'judul', 'isi','foto','penulis'
    ];

    protected $primaryKey = 'id';

}
