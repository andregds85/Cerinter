@extends('layouts3.app')
@section('content')

<!-- topo !-->
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title"><b>Manual de configuração do sistema</b></h5>
      <h6 class="card-title"><b></b></h6>
        <BR>
    </div>
  </div>

  <!-- Passo 1 !-->
  <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title"><b>Macros</b></h5>
        <h6 class="card-title"><b></b></h6>
          <BR>
        <p class="card-text"><b>Passo 1 </b></p>
        <p class="card-text">Cadastrar todas as Macros </p>
      </div>
    </div>


    <!-- Passo 2 !-->
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><b>Hospitais</b></h5>
          <h6 class="card-title"><b></b></h6>
            <BR>
          <p class="card-text"><b>Passo 2 </b></p>
          <p class="card-text">Cadastrar todos os Hospitais </p>
        </div>
      </div>


    <!-- Passo 3 !-->
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><b>Usuários com perfil de  Regulação</b></h5>
          <h6 class="card-title"><b></b></h6>
            <BR>
          <p class="card-text"><b>Ao cadastrar usuários </b></p>
          <p class="card-text">Selecionar as Macros e não selecionar Hospital</p>
        </div>
      </div>


    <!-- Passo 4 !-->
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><b>Usuários com perfil de Hospital</b></h5>
          <h6 class="card-title"><b></b></h6>
            <BR>
          <p class="card-text"><b>Ao cadastrar usuários </b></p>
          <p class="card-text">Selecionar a Macro e  selecionar seu Hospital</p>
        </div>
      </div>









@endsection



