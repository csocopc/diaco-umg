<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Consumidor;
use App\Comercio;
use App\Municipio;
use App\Queja;
use App\Sucursal;

class PublicController extends Controller
{

    public function index () 
    {
        return view('public.index');
    }    

    public function consumidor (Request $request) 
    {
        $actualizado = false;
        if ($request->has('identificador-actualizado')) 
        {
           $consumidor = Consumidor::find($request->input('dpi'));
           if ($consumidor != null ) {
                $dpi = $consumidor->dpi;
                $nit = $consumidor->nit;
                $nombres = $consumidor->nombres;
                $apellidos = $consumidor->apellidos;
                $direccion = $consumidor->direccion;
                $telefono = $consumidor->telefono;
                $genero = $consumidor->genero;
                $id_municipio = $consumidor->id_municipio;
                $id_departamento = $consumidor->municipio->departamento->id;
                $actualizado = true;
           }
        }

        if (!$actualizado) {
            $nit = $request->input('nit');
            $dpi = $request->input('dpi');
            $nombres = $request->input('nombres');
            $apellidos = $request->input('apellidos');
            $direccion = $request->input('direccion');
            $telefono = $request->input('telefono');
            $genero = $request->input('genero');
            $id_municipio = $request->input('id_municipio');
            $id_departamento = $request->input('id_departamento');
        }        

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
                'id_departamento',
                'id_municipio'
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

        if ($request->has('anonimo')) 
        {
            $dpi = null;
        } 
        else
        {
            if (!empty($dpi)) {
                $consumidor = Consumidor::find($dpi);            
                if ($consumidor == null)  // el consumidor no esta registrado
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
        }            

        $request->session()->put('dpi', (isset($dpi) && !is_null($dpi)) ? $dpi : 'na');
        $request->session()->save();
        return redirect('/queja/comercio');  
    }    

    public function comercio (Request $request) 
    {    
        if ($request->has('identificador-actualizado')) 
        {
           $comercio = Comercio::find($request->input('nit'));
           if ($comercio != null ) {
                $nit = $comercio->nit;
                $nombre = $comercio->nombre;                
                $sucursales = $comercio->sucursales->pluck('nombre', 'id');
           }

           $sucursal = Sucursal::find($request->input('id_sucursal'));
           if ($sucursal != null) {
                $direccion = $sucursal->direccion;
                $telefono = $sucursal->telefono;        
                $id_municipio = $sucursal->id_municipio;                
                $id_departamento = $sucursal->municipio->departamento->id;                
                $nombre_sucursal = $sucursal->nombre;
                $id_sucursal = $sucursal->id;
           }
        }

        $nit = isset($nit) ? $nit : $request->input('nit');
        $nombre = isset($nombre) ? $nombre : $request->input('nombre');
        $direccion = isset($direccion) ? $direccion : $request->input('direccion');
        $telefono = isset($telefono) ? $telefono : $request->input('telefono');        
        $id_municipio = isset($id_municipio) ? $id_municipio : $request->input('id_municipio');
        $id_departamento = isset($id_departamento) ? $id_departamento : $request->input('id_departamento');   
        $id_sucursal = isset($id_sucursal) ? $id_sucursal : $request->input('id_sucursal');   
        $nombre_sucursal = isset($nombre_sucursal) ? $nombre_sucursal : $request->input('nombre_sucursal');   
        $sucursales = isset($sucursales) ? $sucursales : array();


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
                'id_departamento',
                'id_municipio',
                'sucursales',
                'id_sucursal',
                'nombre_sucursal'
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
        $id_sucursal = $request->input('id_sucursal');
        $nombre_sucursal = $request->input('nombre_sucursal');

        $comercio = Comercio::find($nit);
        if ($comercio == null) {
            $comercio = new Comercio();
        }
        
        $comercio->nit = $nit;
        $comercio->nombre = $nombre;
        $comercio->save();

        $sucursal = Sucursal::find($id_sucursal);
        if ($sucursal == null) {
            $sucursal = new Sucursal();
        }

        $sucursal->nombre = $nombre_sucursal;        
        $sucursal->direccion = $direccion;
        $sucursal->telefono = $telefono;
        $sucursal->id_municipio = $id_municipio;        
        $sucursal->nit_comercio = $nit;
        $sucursal->save();

        $request->session()->put('id_sucursal', $sucursal->id);
        $request->session()->save();
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

        $dpi = $request->session()->get('dpi');
        $id_sucursal = $request->session()->get('id_sucursal');
        
        $queja = new Queja();                
        $queja->factura = $factura;
        $queja->fecha_factura = $fecha_factura;
        $queja->detalle_queja = $detalle_queja;
        $queja->detalle_solucion = $detalle_solucion;
        $queja->id_sucursal = $id_sucursal;        

        if ($dpi != 'na') {
            $queja->dpi_consumidor = $dpi;
        }
        else 
        {
            $queja->dpi_consumidor = null;
        }

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
