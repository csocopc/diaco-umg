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
        $datosGenerales = array();

        $quejas = DB::table('quejas')                     
                    ->join('sucursales', 'quejas.id_sucursal', '=', 'sucursales.id')   
                     ->join('comercios', 'sucursales.nit_comercio', '=', 'comercios.nit')   
                     ->join('municipios', 'sucursales.id_municipio', '=', 'municipios.id')
                     ->join('departamentos', 'municipios.id_departamento', '=', 'departamentos.id');


        
        if (!empty($fecha_inicio)) 
        {
            $quejas->whereDate('quejas.fecha_factura', '>=', $fecha_inicio);
            $datosGenerales['inicio'] = Carbon::parse($fecha_inicio)->toFormattedDateString();
        }

        if (!empty($fecha_final)) 
        {            
            $quejas->whereDate('quejas.fecha_factura', '<=', $fecha_final);
            $datosGenerales['fin'] = Carbon::parse($fecha_final)->toFormattedDateString();
        }        

        $datosGenerales['total'] = $quejas->get()->count();

        switch ($tipo) {
            case 'comercio':
                $quejas = $quejas->select(DB::raw('count(*) as conteo, sucursales.id, comercios.nombre, sucursales.nombre nombre_sucursal'))
                            ->groupBy('sucursales.id')->get();    

                $circular = $quejas->map(function ($item) {
                    $nombre = "$item->nombre - $item->nombre_sucursal";
                     return [$nombre,$item->conteo];
                });

                $barras = $quejas->map(function ($item) {
                    $nombre = "$item->nombre - $item->nombre_sucursal";
                    return [$nombre,$item->conteo, $this->random_color_part($nombre)];
                });

                $datosDelReporte = ["circular" => $circular, "barras" => $barras, "general" => $datosGenerales];
                break;
            case 'municipio':
                $quejas = $quejas->select(DB::raw('count(*) as conteo, municipios.id, municipios.nombre, departamentos.nombre nombre_departamento'))
                            ->groupBy('municipios.id')->get();

                $circular = $quejas->map(function ($item) {
                    $nombre = "$item->nombre_departamento - $item->nombre";
                     return [$nombre,$item->conteo];
                });

                $barras = $quejas->map(function ($item) {
                    $nombre = "$item->nombre_departamento - $item->nombre";
                     return [$nombre,$item->conteo, $this->random_color_part($nombre)];
                });


                $datosDelReporte = ["circular" => $circular, "barras" => $barras, "general" => $datosGenerales];
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


                $datosDelReporte = ["circular" => $circular, "barras" => $barras, "general" => $datosGenerales];
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

                $datosDelReporte = ["circular" => $circular, "barras" => $barras, "general" => $datosGenerales];
                break;
        }            
        return $datosDelReporte;    
    }


    function random_color_part($id) {
        return '#'.substr(md5($id), 0, 6);
    }
}
