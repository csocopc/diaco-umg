<?php

namespace App\Http\Controllers;

use App\Comercio;
use Illuminate\Http\Request;
use App\Departamento;
use App\Municipio;
use App\Sucursal;

class ComerciosController extends Controller
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

            $sucursal = Sucursal::join('municipios', 'sucursales.id_municipio', '=', 'municipios.id')
                ->join('departamentos', 'municipios.id_departamento', '=', 'departamentos.id')
                ->join('comercios', 'sucursales.nit_comercio', '=', 'comercios.nit')
                ->where('sucursales.nombre', 'like', '%' . $q . '%')
                ->orWhere('sucursales.direccion', 'like', '%' . $q . '%')
                ->orWhere('sucursales.telefono', 'like', '%' . $q . '%')
                ->orWhere('municipios.nombre', 'like', '%' . $q . '%')
                ->orWhere('departamentos.nombre', 'like', '%' . $q . '%')
                ->orWhere('comercios.nombre', 'like', '%' . $q . '%')
                ->orWhere('comercios.nit', 'like', '%' . $q . '%')
                ->select(array('sucursales.id as id_sucursal'))
                ->get()->sortByDesc('created_at');           
                //dd($sucursal->first());
        }      
        else 
        {
            $sucursal = Sucursal::all()->sortByDesc('created_at');
        }
        

        return view('admin.comercios.index', compact('sucursal', 'q'));
    }

    public function agregar($id = null)
    {
        $comercio = null;
        $nit = null;
        $nombre = null;
        $nombre_sucursal = null;
        $direccion = null;
        $telefono = null;
        $id_departamento = null;
        $id_municipio = null;

        // Si el id esta presente significa que es una edicion de datos
        if ($id != null) {  
            // Cargar los datos que pertenecen al id proporcionado
            $sucursal = Sucursal::find($id);
            $nit = $sucursal->comercio->nit;
            $nombre = $sucursal->comercio->nombre;
            $nombre_sucursal = $sucursal->nombre;
            $direccion = $sucursal->direccion;
            $telefono = $sucursal->telefono;
            $id_departamento = $sucursal->municipio->departamento->id;
            $id_municipio = $sucursal->id_municipio;
        }

        $departamentos = Departamento::all()->sortBy('nombre');
        $listaDepartamentos = $departamentos->pluck('nombre','id');
        $idDepartamento = ($id != null) ? $id_departamento : $departamentos->first()->id;
        $listaMunicipios = Municipio::where('id_departamento', $idDepartamento)->get()->sortBy('nombre')->pluck('nombre', 'id');

        return view('admin.comercios.agregar',
            compact(
                'listaDepartamentos',
                'listaMunicipios',
                'id',
                'nit',
                'nombre',
                'nombre_sucursal',
                'direccion',
                'telefono',
                'id_municipio',
                'id_departamento'
             )
        );
    }

    public function guardar(Request $request)
    {
        if ($request->has('recargar') || $request->has('nit-actualizado'))
        {
            // Si la propiedad recargar esta presente significa que el usuario cambio de departamento
            // la lista de municipios se debe actualizar conservando los datos ingresados anteriormente
            $id = $request->input('id');
            $nit = $request->input('nit');
            $nombre = $request->input('nombre');
            $nombre_sucursal = $request->input('nombre_sucursal');
            $direccion = $request->input('direccion');
            $telefono = $request->input('telefono');
            $id_municipio = $request->input('id_municipio');
            $id_departamento = $request->input('id_departamento');

            if ($request->has('nit-actualizado')) {
                $comercio = Comercio::find($nit);
                if ($comercio != null) {
                    $nit = $comercio->nit;
                    $nombre = $comercio->nombre;
                }
                else 
                {
                    $nombre = "";
                }
            }

            $departamentos = Departamento::all()->sortBy('nombre');
            $listaDepartamentos = $departamentos->pluck('nombre','id');
            $idDepartamento = (isset($id_departamento)) ? $id_departamento : $departamentos->first()->id;
            $listaMunicipios = Municipio::where('id_departamento', $idDepartamento)->get()->sortBy('nombre')->pluck('nombre', 'id');
            return view('admin.comercios.agregar',
                compact(
                    'listaDepartamentos',
                    'listaMunicipios',
                    'nit',
                    'nombre',
                    'nombre_sucursal',
                    'direccion',
                    'telefono',
                    'id_departamento',
                    'id'
                 )
            );
        }
        else
        {
            if ($request->has('id'))
            {
                $sucursal = Sucursal::find($request->input('id'));
            }
            else
            {
                $sucursal = new Sucursal();
            }

            $comercio = Comercio::find($request->input('nit'));
            if ($comercio != null) {                    
                $comercio->nombre = $request->input('nombre');
                $comercio->save();
            }
            else 
            {
                $comercio = new Comercio();
                $comercio->nit = $request->input('nit');
                $comercio->nombre = $request->input('nombre');
                $comercio->save();
            }

            $sucursal->nombre = $request->input('nombre_sucursal');
            $sucursal->direccion = $request->input('direccion');
            $sucursal->telefono = $request->input('telefono');
            $sucursal->id_municipio = $request->input('id_municipio');
            $sucursal->nit_comercio = $request->input('nit');
            $sucursal->save();
            return redirect('/comercios/index');
        }
    }

    public function eliminar(Request $request)
    {
        $sucursal = Sucursal::find($request->input('id'));

        foreach ($sucursal->quejas as $queja) {
            $queja->delete();
        }

        $sucursal->delete();
    }
}
