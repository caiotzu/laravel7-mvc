@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-weight: bold; text-align: center; font-size: 1.5rem">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-4 col-lg-4 mt-3">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-header" style="font-weight: bold; text-align: center; font-size: 1rem">Estudos Atrasados</div>
                                <div class="card-body">
                                    <p style="font-size: 3rem; text-align: center;">
                                        {{ $atraso }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 mt-3">
                            <div class="card text-white bg-info">
                                <div class="card-header" style="font-weight: bold; text-align: center; font-size: 1rem">Estudos em Andamento</div>
                                <div class="card-body">
                                    <p style="font-size: 3rem; text-align: center;">
                                        {{ $andamento }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 mt-3">
                            <div class="card text-white bg-success">
                                <div class="card-header" style="font-weight: bold; text-align: center; font-size: 1rem">Estudos Concluidos</div>
                                <div class="card-body">
                                    <p style="font-size: 3rem; text-align: center;">
                                        {{ $concluido }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
