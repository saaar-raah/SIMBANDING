<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fileberkas extends Model
{

    protected $table = 'fileberkas';
    protected $fillable = [
        'id', 'nama', 'link_file','file'
    ];

    protected $primaryKey = 'id';
}
