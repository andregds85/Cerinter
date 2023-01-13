@extends('layouts3.app')
@section('content')


<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>Geo City Locator</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Cerinter/ Secretaria de Estado de Saúde ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    {{ __('Voce está Logodo no Sistema!') }}

                   <div><td>Id:</td><td> {{ Auth::user()->id}}</td> </div>
                   <div><td>Nome:</td><td> {{ Auth::user()->name}}</td> </div>
                   <div><td>Email:</td><td> {{ Auth::user()->email}}</td> </div>


               </div>
            </div>
        </div>
    </div>
</div>
@endsection

