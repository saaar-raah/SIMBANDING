<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alur extends Model
{
    use HasFactory;
    protected $table = 'alur';
    protected $fillable = [
        'id', 'nama_alur', 'isi','link','urutan'
    ];

    protected $primaryKey = 'id';

}
