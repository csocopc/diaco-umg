<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{    

    public function consumidor()
    {
    	return $this->belongsTo('App\Consumidor', 'dpi_consumidor');
    }

    public function comercio()
    {
    	return $this->belongsTo('App\Comercio', 'nit_comercio');
    }

    public function municipio()
    {
    	return $this->belongsTo('App\Municipio', 'id_municipio');
    }
}
