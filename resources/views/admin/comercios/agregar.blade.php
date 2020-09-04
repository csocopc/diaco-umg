@extends('layouts.app')

@section('content')

<!-- Scripts -->
<script src="{{ asset('js/comercios.js') }}" defer></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	<a href="{{url('/comercios/index')}}" class="btn btn-primary float-right">Regresar</a>
                	<h3>{{ __('Agregar comercio') }}</h3>
                </div>

                <div class="card-body">

                    {{ Form::open(array('id' => 'formulario-agregar', 'url' => '/comercios/guardar')) }}
                    
                        @if (isset($id))
                            {{Form::hidden('id', $id)}}    
                        @endif

                        <div class="form-group">
                            {{Form::label('nit', 'NIT')}}
                            {{Form::text('nit', $nit ?? '',['class' => 'form-control', 'required' => 'required'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('nombre', 'Nombre')}}
                            {{Form::text('nombre', $nombre ?? '',['class' => 'form-control', 'required' => 'required'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('direccion', 'Direccion')}}
                            {{Form::text('direccion', $direccion ?? '',['class' => 'form-control', 'required' => 'required'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('telefono', 'Telefono')}}
                            {{Form::text('telefono', $telefono ?? '',['class' => 'form-control', 'required' => 'required', 'minlength' => 8, 'maxlength' => 8])}}
                        </div>

                        <div class="form-group">
                            {!! Form::Label('id_departamento', 'Departamento') !!}
                            {!! Form::select('id_departamento', $listaDepartamentos, $id_departamento ?? null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::Label('id_municipio', 'Municipio') !!}
                            {!! Form::select('id_municipio', $listaMunicipios, $id_municipio ?? null, ['class' => 'form-control']) !!}
                        </div>

                        {{Form::submit('Agregar',['class' => 'btn btn-primary float-right'])}}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
