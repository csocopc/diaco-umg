@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar una queja') }}</div>

                <div class="card-body">
                    {{ Form::open(array('url' => 'foo/bar')) }}
                    <div class="form-group">
                        {{Form::label('nombre', 'Nombre Completo')}}
                        {{Form::text('nombre', '',array('class' => 'form-control', 'required' => 'required'))}}
                    </div>
                    <div class="form-group">
                        {{Form::label('establecimiento', 'Establecimiento')}}
                        {{Form::text('establecimiento', '',array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        {{Form::label('municipio', 'Municipio')}}
                        {{Form::text('municipio', '',array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        {{Form::label('departamento', 'Departamento')}}
                        {{Form::text('departamento', '',array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        {{Form::label('sucursal', 'Sucursal')}}
                        {{Form::text('sucursal', '',array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        {{Form::label('queja', 'Queja')}}
                        {{Form::textarea('queja', '',array('class' => 'form-control'))}}
                    </div>

                    {{Form::submit('Enviar',array('class' => 'btn btn-success float-right'))}}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
