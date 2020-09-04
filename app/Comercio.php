<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    protected $fillable = [
        'nombre', 'id_municipio'
    ];

    public function municipio()
    {
    	return $this->belongsTo('App\Municipio', 'id_municipio');
    }
}
