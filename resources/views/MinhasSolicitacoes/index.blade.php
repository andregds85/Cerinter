@extends('layouts3.app')
@section('content')

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <?php
    use App\Models\Checklist;
    use App\Http\Controllers\MinhasSolicitacoesController;

    $tabela = Checklist::all();
?>

<div><td>Usuário:</td><td> {{Auth::user()->email}}</td> </div>
<?php $m=Auth::user()->email; ?>
<?php $itensP = Checklist::where('usuario',$m)->get(); ?> 


<!-- DataTales  -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>PDF</th>
          <th>Nome</th>
          <th>CPF</th>
         </tr>
      </thead>

      <tbody>
      @foreach ($itensP as $t)
         <tr>
            <td>

            <a class="btn btn-info" href="{{ url('checklistpdfs',$id=Crypt::encrypt($t->id)) }}">Imprimir PDF</a></td>

            <td>{{$t->nome}}</td>

            <td>{{$t->cpf}}</td>
        </tr>
        @endforeach 
      </tbody>
  </table>
</div>
</div>
</div>





<p class="text-center text-primary"><small>CheckList Seguro</small></p>
@endsection


