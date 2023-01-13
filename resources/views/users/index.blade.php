@extends('layouts4.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Gerenciamento de Usuários</h2>
        </div>
      
   </div>
 </div>

 <SCRIPT> 
<!--
function valida()
{
 if(document.regform.p_nome.value=="" || document.regform.p_nome.value.length < 4)
{
alert( "Preencha campo Nome da pesquisa corretamente!" );
regform.p_nome.focus();
return false;
}
 return true;
 
 }

//-->
</SCRIPT>
 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <div class="box-body">
        
    <form action="{{ url('buscaUsuario') }}" method="GET" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
        <div class="form-group">
            <label for="nome" class="col-sm-1 control-label">Nome</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="p_nome" value="" id="nome" placeholder="informe o nome">
            </div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-default">Pesquisar</button>                    
            </div>
        </div>
    </form>
</div>
        </div>
      
   </div>
 </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">

 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}
    {{ $user->name }}
    {{ $user->email }}
    
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
   


       <a class="btn btn-link" href="{{ route('users.show',$user->id) }}">Mostrar</a>
       <a class="btn btn-link" href="{{ route('users.edit',$user->id) }}">Editar</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'fas fa-trash text-danger mr-1']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
<div class="d-flex justify-content-center">

<?php echo $data->render(); ?>

</div>
</div>
</div>

</div>



<p class="text-center text-primary"><small>usuários</small></p>
@endsection



