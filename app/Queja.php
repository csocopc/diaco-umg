<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{    

    public function consumidor()
    {
    	return $this->belongsTo('App\Consumidor', 'id_consumidor');
    }

    public function comercio()
    {
    	return $this->belongsTo('App\Comercio', 'id_comercio');
    }

    public function municipio()
    {
    	return $this->belongsTo('App\Municipio', 'id_municipio');
    }
}
