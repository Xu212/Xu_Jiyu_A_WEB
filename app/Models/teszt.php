<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teszt extends Model
{
    protected $table = 'teszt';
    protected $fillable = [
        'kerdes',
        'v1',
        'v2',
        'v3',
        'v4',
        'kategoriaId',
    ];
}
