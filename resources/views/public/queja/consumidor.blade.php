@extends('layouts.public-app')

@section('content')

    <!-- Scripts -->
    <script src="{{ asset('js/cambio-departamento.js') }}" defer></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Datos del consumidor') }}</div>
                    <div class="card-body">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>

                        {{ Form::open(array('id' => 'formulario-agregar', 'url' => '/queja/consumidor-guardar')) }}

                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('dpi', 'Documento de identificacion')}}
                                    {{Form::number('dpi', $dpi ?? '',['class' => 'form-control identificacion'])}}
                                </div>
                            </div>
                            
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('nit', 'NIT')}}
                                    {{Form::number('nit', $nit ?? '',['class' => 'form-control'])}}
                                </div>                                
                            </div>
                            
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('nombres', 'Nombres')}}
                                    {{Form::text('nombres', $nombres ?? '',['class' => 'form-control'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('apellidos', 'Apellidos')}}
                                    {{Form::text('apellidos', $apellidos ?? '',['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('direccion', 'Direccion')}}
                                    {{Form::text('direccion', $direccion ?? '',['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('id_departamento', 'Departamento')}}
                                    {{Form::select('id_departamento', $departamentos, $id_departamento ?? null, ['class' => 'form-control'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('id_municipio', 'Municipio')}}
                                    {{Form::select('id_municipio', $municipios, $id_municipio ?? null, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('telefono', 'Telefono')}}
                                    {{Form::number('telefono', $telefono ?? '',['class' => 'form-control number-length', 'minlength' => 8, 'maxlength' => 8])}}
                                </div>                                
                                <div class="form-group col-md-6">
                                    {{Form::label('genero', 'Genero')}}
                                    {{Form::select('genero', [1=>'Masculino', 2=>'Femenino'], $genero ?? null, ['class' => 'form-control'])}}                                    
                                </div>
                            </div>

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
