<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';


    public function municipio()
    {
    	return $this->belongsTo('App\Municipio', 'id_municipio');
    }

    public function comercio()
    {
    	return $this->belongsTo('App\Comercio', 'nit_comercio');
    }

    public function quejas()
    {
        return $this->hasMany(Queja::class, 'id_sucursal');
    }
}
