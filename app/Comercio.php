<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    protected $fillable = [
        'nombre', 'id_municipio'
    ];

    protected $primaryKey = 'nit';

    public function municipio()
    {
    	return $this->belongsTo('App\Municipio', 'id_municipio');
    }
}
