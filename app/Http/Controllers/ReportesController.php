<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Queja;

class ReportesController extends Controller
{
    public function index()
    {
    	$tiposDeQueja = [
    		1 => 'Quejas por comercio', 
    		2 => 'Quejas por municipio',
    		3 => 'Quejas por departamento',
    		4 => 'Quejas por region'
    	];
    	return view('admin.reportes', compact('tiposDeQueja'));
    }

    public function obtenerDatos(Request $request)
    {
    	$tipo = $request->input('tipo');
    	$fecha_inicio = $request->input('fecha_inicio');
    	$fecha_final = $request->input('fecha_final');
    	//$quejas = Queja::with('comercio')->with('consumidor')->get()->toArray();

    	$quejas = array( array('a', 'b'), array('b','c') );

    	$quejas = DB::table('quejas')
                     ->select(DB::raw('count(*) as conteo, nit_comercio, comercios.nombre'))
                     ->join('comercios', 'quejas.nit_comercio', '=', 'comercios.nit')
                     ->groupBy('nit_comercio')
                     ->get();

     	$models = $quejas->map(function ($item) {
             return [$item->nombre,$item->conteo];
         })->toArray();

    	return json_encode($models);
    }
}
