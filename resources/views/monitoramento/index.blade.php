@extends('layouts3.app')
@section('content')

<?php 

echo "CheckList de Transporte cadastrado com Sucesso";
echo "<Br>";


use App\Models\monitoramento;
use App\Http\Controllers\MonitoramentoController;


$tabela=monitoramento::all();
$idM=1;

/*
monitoramento::where('id', $idM)->update(['solicitacao' => 'S']); 
*/
monitoramento::insert(['solicitacao' => 'Chegou Nova Solicitacao']); 



?>
















@endsection


