@extends('layouts.app')

@section('content')

<!-- Scripts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{{ asset('js/reportes.js') }}" defer></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                	<h3>{{ __('Reportes') }}</h3>
                </div>

                <div class="card-body">

                    {{ Form::open(array('id' => 'form-reportes', 'url' => '/reportes/obtener')) }}
                    {{Form::token()}}

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{Form::label('tipo', 'Tipo de reporte')}}
                            {{Form::select('tipo', $tiposDeQueja, $genero ?? null, ['class' => 'form-control'])}} 
                        </div>
                        <div class="form-group col-md-3">
                            {{Form::label('fecha_inicio', 'Fecha de Inicio')}}
                            {{Form::date('fecha_inicio', $fecha_inicio ?? null, ['class' => 'form-control'])}} 
                        </div>
                        <div class="form-group col-md-3">
                            {{Form::label('fecha_final', 'Fecha Final')}}
                            {{Form::date('fecha_final', $fecha_final ?? null, ['class' => 'form-control'])}} 
                        </div>
                    </div>                    
                    <div class="form-row">
                        <div class="form-group col-md-9"></div>                        
                        <button type="submit" class="btn btn-primary float-right col-md-3">
                            Filtar 
                        </button>                        
                    </div>                    
                    {{ Form::close() }}

                </div>

                <div id="grafica-barras" style="width: 100%; height: 350px;"></div>
                <hr>
                <div id="grafica-circular" style="width: auto; height: 500px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection
