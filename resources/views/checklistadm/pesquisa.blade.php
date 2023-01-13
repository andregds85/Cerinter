@extends('layouts4.app')
@section('content')

<?php
$nome=$_GET['p_nome'];

use App\Http\Controllers\ProdutoController;
use App\Models\Checklist;


$tabela = Checklist::all();
$tabela = Checklist::where('nome', 'LIKE', '%' . $nome . '%')->get();


?> 


<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
         <th>ID</th>
         <th>Nome / Data</th>
         <th>Ação</th>
        </tr>
      </thead>

      <tbody>
      @foreach ($tabela as $t)
         <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->nome}}<br>{{$t->created_at}}</td>


 <td>  <a class="btn btn-info" href="{{ route('checklistadm.show',$t->id) }}">Vizualizar</a>

<a class="btn btn-info" href="{{ url('checklistpdf',$t->id) }}">Imprimir PDF</a></td>
        </tr>
        @endforeach 
      </tbody>
  </table>
  <div class="d-flex justify-content-center">


</div>
</div>
</div>

</div>


<p class="text-center text-primary"><small>CheckList Seguro</small></p>
@endsection

