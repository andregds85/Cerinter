<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="language" content="pt-BR">
    <title>Cerinter SC</title>
    <meta name="description" content="Central de transporte da Secretária de Estado de Saúde do estado de Santa Catarina. Responsável por tranporte de pacientes de uti.">
    <meta name="robots" content="all">
    <meta name="author" content="Secretária de Estado de Saúde de Santa Catarina ">
    <meta name="keywords" content="Cerinter, Cerinter SC, CerinterSC, Central de Transporte, Central de Transporte SC, central de Transferencia, Central de Tranferencia SC, Transferencia SC, transferencia, transporte sc, transporte, ses sc, ses, secretaria de estado de saúde de santa catarina, secretaria de estado de saúde sc">

    <meta property="og:type" content="page">
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

</head>


    <!-- Left side column. contains the logo and sidebar -->

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

</div>



@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>