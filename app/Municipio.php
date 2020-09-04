<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function departamento()
    {
    	return $this->belongsTo('App\Departamento', 'id_departamento');
    }
}
