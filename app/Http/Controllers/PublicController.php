<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Consumidor;
use App\Comercio;
use App\Municipio;
use App\Queja;

class PublicController extends Controller
{

    public function index () 
    {
        return view('public.index');
    }    

    public function consumidor (Request $request) 
    {

        $nit = $request->input('nit');
        $dpi = $request->input('dpi');
        $nombres = $request->input('nombres');
        $apellidos = $request->input('apellidos');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $genero = $request->input('genero');
        $id_municipio = $request->input('id_municipio');
        $id_departamento = $request->input('id_departamento');


        $departamentos = Departamento::all()->sortBy('nombre');
        $idDepartamento = (isset($id_departamento) != null) ? $id_departamento : $departamentos->first()->id;
        $departamentos = $departamentos->pluck('nombre','id');
        $municipios = Municipio::where('id_departamento', $idDepartamento)->get()->sortBy('nombre')->pluck('nombre', 'id');

        return view('public.queja.consumidor', 
            compact(
                'departamentos',
                'municipios',
                'nit',
                'dpi',
                'nombres',
                'apellidos',
                'direccion',
                'telefono',
                'genero',
                'id_departamento'
            )
        );
    }     

    public function consumidorGuardar (Request $request) 
    {
        $nit = $request->input('nit');
        $dpi = $request->input('dpi');
        $nombres = $request->input('nombres');
        $apellidos = $request->input('apellidos');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $genero = $request->input('genero');
        $id_municipio = $request->input('id_municipio');

        if (!empty($dpi)) {
            $consumidor = Consumidor::find($dpi);            
            if ($consumidor == null && 
                !empty($dpi) &&
                !empty($nombres) &&
                !empty($apellidos) &&
                !empty($direccion) &&
                !empty($telefono) &&
                !empty($genero) &&
                !empty($id_municipio))  // el consumidor no esta registrado
            {
                $consumidor = new Consumidor();                
            }

            if ($consumidor != null) {
                // GUARDAR Informacion.
                $consumidor->dpi = $dpi;
                $consumidor->nit = $nit;
                $consumidor->nombres = $nombres;
                $consumidor->apellidos = $apellidos;
                $consumidor->direccion = $direccion;
                $consumidor->telefono = $telefono;
                $consumidor->genero = $genero;
                $consumidor->id_municipio = $id_municipio;
                $consumidor->save();
            }                
        }      

        $request->session()->put('quejaConsumidor', (isset($consumidor)) ? $consumidor->dpi : 'na');
        return redirect('/queja/comercio');  
    }    

    public function comercio (Request $request) 
    {        
        $nit = $request->input('nit');
        $nombre = $request->input('nombre');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');        
        $id_municipio = $request->input('id_municipio');
        $id_departamento = $request->input('id_departamento');

        $departamentos = Departamento::all()->sortBy('nombre');
        $idDepartamento = (isset($id_departamento) != null) ? $id_departamento : $departamentos->first()->id;
        $departamentos = $departamentos->pluck('nombre','id');
        $municipios = Municipio::where('id_departamento', $idDepartamento)->get()->sortBy('nombre')->pluck('nombre', 'id');

        return view('public.queja.comercio', 
            compact(
                'departamentos',
                'municipios',
                'nit',
                'nombre',
                'direccion',
                'telefono',
                'id_departamento'
             )
        );
    } 

    public function comercioGuardar (Request $request) 
    {        
        $nit = $request->input('nit');
        $nombre = $request->input('nombre');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $id_municipio = $request->input('id_municipio');
        //$id_departamento = $request->input('id_departamento');

        $comercio = Comercio::find($nit);

        if ($comercio == null) {
            $comercio = new Comercio();
        }

        $comercio->nit = $nit;
        $comercio->nombre = $nombre;
        $comercio->direccion = $direccion;
        $comercio->telefono = $telefono;
        $comercio->id_municipio = $id_municipio;
        //$comercio->id_departamento = $id_departamento;
        $comercio->save();

        $request->session()->put('quejaComercio', (isset($comercio)) ? $comercio->nit : 'na');
        return redirect('/queja/detalle');  
    }    


    public function detalle (Request $request)
    {
        return view('public.queja.detalle');
    }

    public function detalleGuardar (Request $request)
    {
        
        $factura = $request->input('factura');
        $fecha_factura = $request->input('fecha_factura');
        $detalle_queja = $request->input('detalle_queja');
        $detalle_solucion = $request->input('detalle_solucion');        

        $dpi_consumidor = 1; //$request->session()->get('quejaConsumidor');
        $nit_comercio = 2;// $request->session()->get('quejaComercio');

        //dd($request->session());
        
        $queja = new Queja();                
        $queja->factura = $factura;
        $queja->fecha_factura = $fecha_factura;
        $queja->detalle_queja = $detalle_queja;
        $queja->detalle_solucion = $detalle_solucion;
        $queja->nit_comercio = $nit_comercio;
        $queja->dpi_consumidor = $dpi_consumidor;
        $queja->save();

        return redirect('/queja/final/' . $queja->id);
    }

    public function paginaFinal($id, Request $request)
    {
        // Eliminar variables de session
        $request->session()->flush();
        return view('public.queja.final', compact('id'));
    }
}
