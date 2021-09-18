<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{

    protected $table = 'FAQ';
    protected $fillable = [
        'id', 'pertanyaan', 'jawaban'
    ];

    protected $primaryKey = 'id';

}
