<?php

namespace App\Http\Controllers;

use App\Comercio;
use Illuminate\Http\Request;
use App\Departamento;
use App\Municipio;

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

    public function index()
    {
        $comercios = Comercio::all()->sortByDesc('created_at');
        return view('admin.comercios.index', compact('comercios', 'ids'));
    }

    public function agregar($id = null)
    {
        // Si el id esta presente significa que es una edicion de datos
        if ($id != null) {  
            // Cargar los datos que pertenecen al id proporcionado
            $comercio = Comercio::find($id);
            $nit = $comercio->nit;
            $nombre = $comercio->nombre;
            $direccion = $comercio->direccion;
            $telefono = $comercio->telefono;
            $id_departamento = $comercio->municipio->departamento->id;
            $id_municipio = $comercio->id_municipio;
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
                'direccion',
                'telefono',
                'id_municipio',
                'id_departamento'
             )
        );
    }

    public function guardar(Request $request)
    {
        if ($request->has('recargar'))
        {
            // Si la propiedad recargar esta presente significa que el usuario cambio de departamento
            // la lista de municipios se debe actualizar conservando los datos ingresados anteriormente
            $id = $request->input('id');
            $nit = $request->input('nit');
            $nombre = $request->input('nombre');
            $direccion = $request->input('direccion');
            $telefono = $request->input('telefono');
            $id_municipio = $request->input('id_municipio');
            $id_departamento = $request->input('id_departamento');

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
                $comercio = Comercio::find($request->input('id'));
            }
            else
            {
                $comercio = new Comercio();
            }
            $comercio->nit = $request->input('nit');
            $comercio->nombre = $request->input('nombre');
            $comercio->direccion = $request->input('direccion');
            $comercio->telefono = $request->input('telefono');
            $comercio->id_municipio = $request->input('id_municipio');
            $comercio->save();
            return redirect('/comercios/index');
        }
    }

    public function eliminar(Request $request)
    {
        Comercio::destroy($request->input('id'));
    }
}
