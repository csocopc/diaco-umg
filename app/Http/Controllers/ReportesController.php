<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Queja;
use Carbon\Carbon;

class ReportesController extends Controller
{
    public function index()
    {
    	$tiposDeQueja = [
    		"comercio" => 'Quejas por comercio', 
    		"municipio" => 'Quejas por municipio',
    		"departamento" => 'Quejas por departamento',
    		"region" => 'Quejas por region'
    	];
    	return view('admin.reportes', compact('tiposDeQueja'));
    }

    public function obtenerDatos(Request $request)
    {
    	$tipo = $request->input('tipo');
    	$fecha_inicio = $request->input('fecha_inicio');
    	$fecha_final = $request->input('fecha_final');
    	//$quejas = Queja::with('comercio')->with('consumidor')->get()->toArray();
    
        $models = $this->GenerarReporte($tipo, $fecha_inicio, $fecha_final);

    	return json_encode($models);
    }

    

    public function GenerarReporte($tipo, $fecha_inicio, $fecha_final)
    {
        $datosDelReporte = null;
        $quejas = DB::table('quejas')                     
                     ->join('comercios', 'quejas.nit_comercio', '=', 'comercios.nit')   
                     ->join('municipios', 'comercios.id_municipio', '=', 'municipios.id')
                     ->join('departamentos', 'municipios.id_departamento', '=', 'departamentos.id');

        if (!empty($fecha_inicio)) 
        {
            $quejas->whereDate('quejas.created_at', '>=', Carbon::parse($fecha_inicio));
        }

        if (!empty($fecha_final)) 
        {            
            $quejas->whereDate('quejas.created_at', '<=', Carbon::parse($fecha_final));
        }

        switch ($tipo) {
            case 'comercio':
                $quejas = $quejas->select(DB::raw('count(*) as conteo, nit_comercio, comercios.nombre'))
                            ->groupBy('nit_comercio')->get();    

                $circular = $quejas->map(function ($item) {
                     return [$item->nombre,$item->conteo];
                });

                $barras = $quejas->map(function ($item) {
                     return [$item->nombre,$item->conteo, $this->random_color_part($item->nombre)];
                });

                $datosDelReporte = ["circular" => $circular, "barras" => $barras];
                break;
            case 'municipio':
                $quejas = $quejas->select(DB::raw('count(*) as conteo, municipios.id, municipios.nombre'))
                            ->groupBy('municipios.id')->get();

                $circular = $quejas->map(function ($item) {
                     return [$item->nombre,$item->conteo];
                });

                $barras = $quejas->map(function ($item) {
                     return [$item->nombre,$item->conteo, $this->random_color_part($item->nombre)];
                });


                $datosDelReporte = ["circular" => $circular, "barras" => $barras];
                break;
            case 'departamento':
                $quejas = $quejas->select(DB::raw('count(*) as conteo, departamentos.id, departamentos.nombre'))
                            ->groupBy('departamentos.id')->get();

                $circular = $quejas->map(function ($item) {
                     return [$item->nombre,$item->conteo];
                });

                $barras = $quejas->map(function ($item) {
                     return [$item->nombre,$item->conteo, $this->random_color_part($item->nombre)];
                });


                $datosDelReporte = ["circular" => $circular, "barras" => $barras];
                break;
            case 'region':
                $quejas = $quejas->select(DB::raw('count(*) as conteo, departamentos.region'))
                            ->groupBy('departamentos.region')->get();

                $circular = $quejas->map(function ($item) {
                     return [$item->region,$item->conteo];
                });

                $barras = $quejas->map(function ($item) {
                     return [$item->region,$item->conteo, $this->random_color_part($item->region)];
                });

                $datosDelReporte = ["circular" => $circular, "barras" => $barras];
                break;
        }            

        return $datosDelReporte;    
    }


    function random_color_part($id) {
        return '#'.substr(md5($id), 0, 6);
    }
}
