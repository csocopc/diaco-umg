@extends('layouts.public-app')

@section('content')
    <!-- Scripts -->
    <script src="{{ asset('js/cambio-departamento.js') }}" defer></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Datos del comercio') }}</div>
                    <div class="card-body">
                        

                        {{ Form::open(array('id' => 'formulario-agregar', 'url' => '/queja/comercio-guardar')) }}                                    

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {{Form::label('nit', 'NIT')}}
                                {{Form::text('nit', $nit ?? '',['class' => 'form-control', 'required' => 'required'])}}
                            </div>                        
                        </div>

                        <div class="form-group">
                            {{Form::label('nombre', 'Nombre')}}
                            {{Form::text('nombre', $nombre ?? '',['class' => 'form-control', 'required' => 'required'])}}
                        </div>

                        <div class="form-row">                            
                            <div class="form-group col-md-6">
                                {{Form::label('direccion', 'Direccion')}}
                                {{Form::text('direccion', $direccion ?? '',['class' => 'form-control', 'required' => 'required'])}}
                            </div>

                            <div class="form-group col-md-6">
                                {{Form::label('telefono', 'Telefono')}}
                                {{Form::text('telefono', $telefono ?? '',['class' => 'form-control', 'required' => 'required', 'minlength' => 8, 'maxlength' => 8])}}
                            </div>
                        </div>                        

                        <div class="form-row">                            
                            <div class="form-group col-md-6">
                                {!! Form::Label('id_departamento', 'Departamento') !!}
                                {!! Form::select('id_departamento', $departamentos, $id_departamento ?? null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::Label('id_municipio', 'Municipio') !!}
                                {!! Form::select('id_municipio', $municipios, $id_municipio ?? null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        {{Form::submit('Agregar',['class' => 'btn btn-primary float-right'])}}
                    {{ Form::close() }}                      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
