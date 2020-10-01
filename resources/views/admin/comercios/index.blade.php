@extends('layouts.app')

@section('content')

<!-- Scripts -->
<script src="{{ asset('js/comercios.js') }}" defer></script>

<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                	<a href="{{url('/comercios/agregar')}}" class="btn btn-success float-right">Agregar Comercio</a>
                	<h3>{{ __('Lista de comercios') }}</h3>
                </div>

                <div class="card-body">
                    <form class="form-inline my-2 my-lg-0" id="frm-buscar-comercio" >
                        <input id="search" class="form-control mr-sm-4 col-md-4" type="search" placeholder="Buscar" aria-label="Buscar" value="{{$q ?? ''}}">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                    <hr>
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>NIT</th>
                                <th>Nombre</th>
                                <th>Sucursal</th>
                                <th>Direccion</th>
                                <th>Departamento</th>
                                <th>Municipio</th>
                                <th>Telefono</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sucursal as $sucursal)

                            @if (isset($sucursal->id_sucursal))
                                @php
                                    $sucursal = App\Sucursal::find($sucursal->id_sucursal);
                                @endphp
                            @endif

                                <tr>
                                    <td>{{$sucursal->comercio->nit}}</td>
                                    <td>{{$sucursal->comercio->nombre}}</td>
                                    <td>{{$sucursal->nombre}}</td>
                                    <td>{{$sucursal->direccion}}</td>
                                    <td>{{$sucursal->municipio->departamento->nombre}}</td>
                                    <td>{{$sucursal->municipio->nombre}}</td>
                                    <td>{{$sucursal->telefono}}</td>
                                    <td>
                                        <a href="{{url("/comercios/editar/$sucursal->id")}}" class="editar" data-id="{{$sucursal->id}}">
                                            <img src="https://www.iconfinder.com/data/icons/flat-business-icons/128/pencil-24.png" alt="">
                                        </a>
                                        <a href="#" class="eliminar" data-id="{{$sucursal->id}}">
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
