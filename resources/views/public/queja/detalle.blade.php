@extends('layouts.public-app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Datos de la queja') }}</div>
                    <div class="card-body">
                        {{ Form::open(array('id' => 'formulario-agregar', 'url' => '/queja/detalle-guardar')) }}

                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('factura', 'Factura')}}
                                    {{Form::text('factura', $factura ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>                  
                                <div class="form-group col-md-6">
                                    {{Form::label('fecha_factura', 'Fecha Factura')}}
                                    {{Form::date('fecha_factura', $fecha_factura ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>              
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-12">
                                    {{Form::label('detalle_queja', 'Detalles de la queja')}}
                                    {{Form::textarea('detalle_queja', $detalle_queja ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-12">
                                    {{Form::label('detalle_solucion', 'Solucion')}}
                                    {{Form::textarea('detalle_solucion', $detalle_queja ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                            </div>                        

                            {{Form::submit('Siguiente',['class' => 'btn btn-primary float-right'])}}
                            <a href="{{url('/queja/comercio')}}">Comercio</a>
                        {{ Form::close() }}                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
