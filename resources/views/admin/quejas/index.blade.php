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
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>Factura</th>
                                <th>Fecha Factura</th>
                                <th>Queja</th>
                                <th>Solucion Propuesta</th>
                                <th>Consumidor</th>
                                <th>Comercio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quejas as $queja)
                                <tr>
                                    <td>{{$queja->factura}}</td>
                                    <td>{{$queja->fecha_factura}}</td>
                                    <td>{{$queja->detalle_queja}}</td>
                                    <td>{{$queja->detalle_solucion}}</td>
                                    <td>{{$queja->consumidor->nombres}} {{$queja->consumidor->apellidos}}</td>
                                    <td>{{$queja->comercio->nit}} -{{$queja->comercio->nombre}}</td>
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
