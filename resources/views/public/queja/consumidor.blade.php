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
                        {{ Form::open(array('id' => 'formulario-agregar', 'url' => '/queja/consumidor-guardar')) }}

                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('nit', 'NIT')}}
                                    {{Form::text('nit', $nit ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>                                
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('dpi', 'Documento de identification')}}
                                    {{Form::text('dpi', $dpi ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('nombres', 'Nombres')}}
                                    {{Form::text('nombres', $nombres ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('apellidos', 'Apellidos')}}
                                    {{Form::text('apellidos', $apellidos ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('direccion', 'Direccion')}}
                                    {{Form::text('direccion', $direccion ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('id_departamento', 'Departamento')}}
                                    {!! Form::select('id_departamento', $departamentos, $id_departamento ?? null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('id_municipio', 'Municipio')}}
                                    {{Form::select('id_municipio', $municipios, $id_municipio ?? null, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-6">
                                    {{Form::label('telefono', 'Telefono')}}
                                    {{Form::text('telefono', $telefono ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>                                
                                <div class="form-group col-md-6">
                                    {{Form::label('genero', 'Genero')}}
                                    {{Form::select('genero', [1=>'Masculino', 2=>'Femenino'], $genero ?? null, ['class' => 'form-control'])}}                                    
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
