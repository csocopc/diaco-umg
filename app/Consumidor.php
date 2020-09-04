<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumidor extends Model
{
    protected $fillable = [
        'nombres',
        'apellidos'
    ];

    protected $table = 'consumidores';
}
