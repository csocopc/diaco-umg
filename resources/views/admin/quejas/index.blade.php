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
                	<h3>{{ __('Lista de quejas') }}</h3>
                </div>

                <div class="card-body">
                    <form class="form-inline my-2 my-lg-0" id="frm-buscar-queja" >
                        <input id="search" class="form-control mr-sm-4 col-md-4" type="search" placeholder="Search" aria-label="Search" value="{{$q ?? ''}}">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <hr>
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>Factura</th>
                                <th>Fecha Factura</th>                                
                                <th>Consumidor</th>
                                <th>NIT</th>
                                <th>Comercio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quejas as $queja)
                                <tr>
                                    <td>{{$queja->factura}}</td>
                                    <td>{{$queja->fecha_factura->toFormattedDateString()}}</td>
                                    <td>
                                        @if($queja->consumidor != null)
                                            {{$queja->consumidor->nombres}} {{$queja->consumidor->apellidos}}
                                        @else 
                                            ANONIMO
                                        @endif
                                    </td>
                                    <td>
                                        @if($queja->sucursal->comercio != null)
                                            {{$queja->sucursal->comercio->nit}}
                                        @endif                                                                     
                                    </td>
                                    <td>
                                        @if($queja->sucursal->comercio != null)
                                            {{$queja->sucursal->comercio->nombre}}
                                        @endif                                        
                                    </td>                                    
                                    <td>
                                        <a href="{{url("/quejas/detalles/$queja->id")}}">Detalles</a>
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
