<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $fillable = [
        'id', 'judul', 'isi','foto','penulis'
    ];

    protected $primaryKey = 'id';

}
