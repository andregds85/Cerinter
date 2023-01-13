@extends('layouts4.app')
@section('content')

<?php
$nome=$_GET['p_nome'];

use App\Http\Controllers\UserController;
use App\Models\User;

$tabela = User::all();
$tabela = User::where('name', 'LIKE', '%' . $nome . '%')->get();

?> 


<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
         <th>ID</th>
         <th>Name / Data</th>
         <th>Ação</th>
        </tr>
      </thead>

      <tbody>
      @foreach ($tabela as $t)
         <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->name}}<br>{{$t->created_at}}</td>


 <td>  <a class="btn btn-info" href="{{ route('users.show',$t->id) }}">Vizualizar</a>
 <a class="btn btn-info" href="{{ route('users.edit',$t->id) }}">Editar</a>
 {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $t->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'fas fa-trash text-danger mr-1']) !!}
        {!! Form::close() !!}

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

