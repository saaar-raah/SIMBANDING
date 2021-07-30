<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;
    protected $table = 'FAQ';
    protected $fillable = [
        'id', 'pertanyaan', 'jawaban'
    ];

    protected $primaryKey = 'id';

}
