@extends('layouts.app')

@section('content')

<!-- Scripts -->
<script src="{{ asset('js/comercios.js') }}" defer></script>

<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                	<a href="{{url('/comercios/agregar')}}" class="btn btn-success float-right">Agregar Comercio</a>
                	<h3>{{ __('Lista de comercios') }}</h3>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>NIT</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Departamento</th>
                                <th>Municipio</th>
                                <th>Telefono</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comercios as $comercio)
                                <tr>
                                    <td>{{$comercio->nit}}</td>
                                    <td>{{$comercio->nombre}}</td>
                                    <td>{{$comercio->direccion}}</td>
                                    <td>{{$comercio->municipio->departamento->nombre}}</td>
                                    <td>{{$comercio->municipio->nombre}}</td>
                                    <td>{{$comercio->telefono}}</td>
                                    <td>
                                        <a href="{{url("/comercios/editar/$comercio->id")}}" class="editar" data-id="{{$comercio->id}}">
                                            <img src="https://www.iconfinder.com/data/icons/flat-business-icons/128/pencil-24.png" alt="">
                                        </a>
                                        <a href="#" class="eliminar" data-id="{{$comercio->id}}">
                                            <img src="https://www.iconfinder.com/data/icons/ui-navigation-1/152/close-24.png" alt="">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
