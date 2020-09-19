<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{    
	protected $dates = [
		'fecha_factura'
	];

    public function consumidor()
    {
    	return $this->belongsTo('App\Consumidor', 'dpi_consumidor');
    }

    public function comercio()
    {
    	return $this->belongsTo('App\Comercio', 'nit_comercio');
    }    

    public function sucursal()
    {
    	return $this->belongsTo('App\Sucursal', 'id_sucursal');
    }        
}
