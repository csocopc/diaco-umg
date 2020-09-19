<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumidor extends Model
{
    protected $fillable = [
        'nombres',
        'apellidos'
    ];

    protected $primaryKey = 'dpi';

    protected $table = 'consumidores';

    public function municipio()
    {
    	return $this->belongsTo('App\Municipio', 'id_municipio');
    }
}
