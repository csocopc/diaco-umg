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
                    <a href="{{url('/quejas/index')}}" class="btn btn-primary float-right">Regresar</a>
                	<h3>{{ __('Detalles de la queja') }}</h3>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>                            
                            <tr>
                                <td>Factura</td>                                
                                <td>{{$queja->factura}}</td>                                
                            </tr>
                            <tr>
                                <td>Fecha Factura</td>                                
                                <td>{{$queja->fecha_factura->toFormattedDateString()}}</td>
                            </tr>
                            <tr>
                                <td>Detalle Queja</td>                                                                
                                <td>{{$queja->detalle_queja}}</td>
                            </tr>
                            <tr>
                                <td>Detalle Solucion</td>                                
                                <td>{{$queja->detalle_solucion}}</td>
                            </tr>
                            <tr>
                                <td>Consumidor</td>                                                                
                                <td>
                                    @if($queja->consumidor != null)
                                        <table class="table table-striped table-bordered table-sm">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th></th>
                                                    <th></th>                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>NIT</td>
                                                    <td>{{$queja->consumidor->nit}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nombres</td>
                                                    <td>{{$queja->consumidor->nombres}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Apellidos</td>
                                                    <td>{{$queja->consumidor->apellidos}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Direccion</td>
                                                    <td>{{$queja->consumidor->direccion}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telefono</td>
                                                    <td>{{$queja->consumidor->telefono}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Genero</td>
                                                    <td>{{($queja->consumidor->gernero) ? 'Hombre' : 'Mujer'}}</td>
                                                </tr>
                                            </tbody>                                        
                                        </table>        
                                    @else  
                                        ANONIMO
                                    @endif                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Comercio</td>                                                                
                                <td>
                                    @if($queja->sucursal->comercio != null)
                                        <table class="table table-striped table-bordered table-sm">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th></th>
                                                    <th></th>                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>NIT</td>
                                                    <td>{{$queja->sucursal->comercio->nit}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nombre</td>
                                                    <td>{{$queja->sucursal->comercio->nombre}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Sucursal</td>
                                                    <td>{{$queja->sucursal->nombre}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Direccion</td>
                                                    <td>{{$queja->sucursal->direccion}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Telefono</td>
                                                    <td>{{$queja->sucursal->telefono}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Departamento</td>
                                                    <td>{{$queja->sucursal->municipio->departamento->nombre}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Municipio</td>
                                                    <td>{{$queja->sucursal->municipio->nombre}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha de creacion</td>
                                <td>{{$queja->created_at->toFormattedDateString()}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
