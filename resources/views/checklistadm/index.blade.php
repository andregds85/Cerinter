@extends('layouts4.app')
@section('content')
<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">Exportar CheckList em EXCEL</h5>
    <p class="card-text">
   <a class="nav-link" href="{{url('import_export') }}">Exportar CheckList</a>
    </p>
  </div>
</div>

<?php
    use App\Http\Controllers\ProdutoController;

?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Solicitação CheckList Seguro</h5>
            </div>
          
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<?php
    use App\Models\Checklist;
    $tabela = Checklist::all();
    $tabela = Checklist::orderby('id', 'desc')->paginate(50);

?>
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
<div class="box-body">
    <form action="{{ url('pesquisar') }}" method="GET" enctype="multipart/form-data" NAME="regform"
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
 <!--           
  <a class="btn btn-info" href="{{ route('checklistadm.show',$t->id) }}">Vizualizar</a>
-->
<td> 
<a class="btn btn-info" href="{{ url('checklistpdf',$id=Crypt::encrypt($t->id)) }}">Imprimir PDF</a></td>
        </tr>
        @endforeach 
      </tbody>
  </table>
  <div class="d-flex justify-content-center">

<?php echo $tabela->render(); ?>

</div>
</div>
</div>

</div>


<p class="text-center text-primary"><small>CheckList Seguro</small></p>
@endsection




