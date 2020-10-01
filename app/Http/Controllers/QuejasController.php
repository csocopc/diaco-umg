<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queja;

class QuejasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($q = null)
    {
        if ($q != null) {
            $quejas = Queja::join('sucursales', 'quejas.id_sucursal', '=', 'sucursales.id')
                    ->join('consumidores', 'quejas.dpi_consumidor', '=', 'consumidores.dpi')
                    ->join('municipios', 'sucursales.id_municipio', '=', 'municipios.id')
                    ->join('departamentos', 'municipios.id_departamento', '=', 'departamentos.id')
                    ->join('comercios', 'sucursales.nit_comercio', '=', 'comercios.nit')
                    ->where('quejas.factura', 'like', '%' . $q . '%')
                    ->orWhere('quejas.fecha_factura', 'like', '%' . $q . '%')
                    ->orWhere('quejas.detalle_queja', 'like', '%' . $q . '%')
                    ->orWhere('quejas.detalle_solucion', 'like', '%' . $q . '%')
                    ->orWhere('comercios.nombre', 'like', '%' . $q . '%')
                    ->orWhere('comercios.nit', 'like', '%' . $q . '%')
                    ->orWhere('sucursales.nombre', 'like', '%' . $q . '%')
                    ->orWhere('sucursales.direccion', 'like', '%' . $q . '%')
                    ->orWhere('sucursales.telefono', 'like', '%' . $q . '%')
                    ->orWhere('municipios.nombre', 'like', '%' . $q . '%')
                    ->orWhere('departamentos.nombre', 'like', '%' . $q . '%')
                    ->orWhere('consumidores.nombres', 'like', '%' . $q . '%')
                    ->orWhere('consumidores.apellidos', 'like', '%' . $q . '%')
                    ->select(array('quejas.id as id_queja'))
                    ->get()->sortByDesc('created_at');                       
        }
        else 
        {
            $quejas = Queja::all()->sortByDesc('created_at');
        }
        return view('admin.quejas.index', compact('quejas', 'q'));
    }


    public function detalles($id)
    {
        $queja = Queja::find($id);

        return view('admin.quejas.detalles', compact('queja'));
    }
}