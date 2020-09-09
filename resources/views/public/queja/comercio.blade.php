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
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>

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
