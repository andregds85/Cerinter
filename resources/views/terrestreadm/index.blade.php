@extends('layouts4.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Solicitação de Transporte Terrestre</h5>
            </div>
          
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <?php
    use App\Models\Terrestre;

    $tabela = Terrestre::all();
?>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Solicitação</th>
            <th>idade</th>
        </tr>

    @foreach ($tabela as $t)
	    <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->nome }}</td>
            <td>{{$t->idade }}</td>
  
                @endforeach


     

          





    </table>

<p class="text-center text-primary"><small>Transporte Terrestre</small></p>
@endsection
