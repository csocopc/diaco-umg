@extends('layouts.public-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('DIACO') }}</div>
                    <div class="card-body">

                        <h3>Misión</h3>                        
                        <p>Educar e informar a los consumidores acerca de sus derechos y obligaciones.</p>                         

                        <h3>Visión</h3>
                        <p>Que los consumidores guatemaltecos conozcan y ejerzan sus derechos como consumidores y usuarios </p>
                         
                        <h3>Política de Calidad </h3>                         
                        <p>Defender los derechos de los consumidores y usuarios, cumpliendo con la legislación a través de procesos eficaces,aplicando la mejora continua; fomentando para ello relaciones equitativas entre consumidores y proveedores. </p>

                        <h3 class="text-center py-4">
                            <a href="{{url('/queja/consumidor')}}">Si quiere registrar una queja haga click aqui.</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
