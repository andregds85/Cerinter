@extends('layouts.app')
@section('content')

<head>
<meta charset="utf-8">
    <meta name="language" content="pt-BR">
    <title>cerinter sc</title>
    <meta name="description" content="Central de transferência de pacientes, junto a secretaria de estado de saúde. ">
    <meta name="robots" content="all">
    <meta name="author" content="Secretaria de Estado de Saúde de Santa Catarina">
    <meta name="keywords" content="Cerinter, cerinter, cerintersc, Cerinter sc, secretaria de estado de saúde sc, ">

    <meta property="og:type" content="page">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">

    <meta property="article:author" content="">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:description" content="">

</head>









<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cerinter @ Secretaria de Estado de Saúde') }}</div>
                <div class="card-header"><img src="img/ambulancia.jpg"> Transporte Terrestre</div>
                <br>

                <br>
                <div class="card-header"><img src="img/3.gif"> </div>


                <br>
                <!--
                <div class="card-header"><img src="img/aereo.jpg"> Transporte Aero (Modal em Breve)
                </div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
         
            </div>
        </div>
    </div>
</div>






@endsection



