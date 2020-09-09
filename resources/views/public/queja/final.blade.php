@extends('layouts.public-app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Queja registrada') }}</div>
                    <div class="card-body">

                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>

                        <div class="alert alert-success" role="alert">
                            La queja se ha registrado exitosamente! su numero de referencia es: {{$id}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
