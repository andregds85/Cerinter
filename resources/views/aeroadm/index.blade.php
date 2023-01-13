@extends('layouts4.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Solicitação de Transporte Aerio</h5>
            </div>
          
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <?php
    use App\Models\aerio;

    $tabela = aerio::all();
?>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
        </tr>

    @foreach ($tabela as $t)
	    <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->nomeCompleto }}</td>
            <td>{{$t->dataNascimento }}</td>
  
                @endforeach


     

          





    </table>

<p class="text-center text-primary"><small>Transporte Terrestre</small></p>
@endsection
