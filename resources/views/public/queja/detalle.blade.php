@extends('layouts.public-app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Datos de la queja') }}</div>
                    <div class="card-body">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>

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

                            <hr>
                            <button type="submit" class="btn btn-primary float-right">
                                Siguiente <img src="https://www.iconfinder.com/data/icons/essentials-pack/96/right_arrow_next_forward_navigation-24.png">
                            </button>
                        {{ Form::close() }}                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
