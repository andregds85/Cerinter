@extends('layouts4.app')
@section('content')

<?php 

echo "Dados do monitoramento Apagados com Sucesso";

use App\Models\monitoramento;
use App\Http\Controllers\MonitoramentoController;

$tabela=monitoramento::truncate();

?>



@endsection


