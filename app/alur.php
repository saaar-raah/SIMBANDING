<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alur extends Model
{
    protected $table = 'alur';
    protected $fillable = [
        'id', 'nama_alur', 'isi','urutan'
    ];

    protected $primaryKey = 'id';

}
