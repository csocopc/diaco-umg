@extends('layouts.public-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Datos del consumidor') }}</div>
                    <div class="card-body">
                        {{ Form::open(array('id' => 'formulario-agregar', 'url' => '/comercios/guardar')) }}

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
                                    {{Form::text('id_departamento', $id_departamento ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                                <div class="form-group col-md-6">
                                    {{Form::label('id_municipio', 'Municipio')}}
                                    {{Form::text('id_municipio', $id_municipio ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                            </div>
                            <div class="form-row">                                
                                <div class="form-group col-md-4">
                                    {{Form::label('genero', 'Genero')}}
                                    {{Form::text('genero', $genero ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                                <div class="form-group col-md-4">
                                    {{Form::label('telefono', 'Telefono')}}
                                    {{Form::text('telefono', $telefono ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                                <div class="form-group col-md-4">
                                    {{Form::label('correo', 'Correo')}}
                                    {{Form::text('correo', $correo ?? '',['class' => 'form-control', 'required' => 'required'])}}
                                </div>
                            </div>

                            {{Form::submit('Siguiente',['class' => 'btn btn-primary float-right'])}}
                        {{ Form::close() }}                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
