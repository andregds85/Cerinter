@extends('especial.app')
@section('content')
<?php 
use App\Http\Controllers\TaxaController;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>CerinterSC</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://www.cerintersc.com.br" class="brand-logo">CerinterSC</a>
      <ul class="right hide-on-med-and-down">
    
        <li><a href="http://www.cerintersc.com.br">Inicio</a></li>   
     

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


<div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">people</i>
      {{ Auth::user()->name}}
      <span class="new badge"></span></div>
    <div class="collapsible-body"><p>{{ Auth::user()->email}}</p>
   <p>{{ Auth::user()->id}}</p>
  </div>
  </li>
</ul>
</div>

      <h1 class="header center orange-text">Dados dos Hospitais </h1>
      <div class="row center">
        <h5 class="header col s12 light"> CNES <p> DATASUS</p></h5>

      </div>

      <br><br>
    </div>
  </div>



<!-- ASSOCIACAO BENEFICENTE HOSPITALAR SAO CAMILO PERITIBA  -->  
<div class="container">
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
      ASSOCIACAO BENEFICENTE HOSPITALAR SAO CAMILO PERITIBA
      <span class="new badge"></span></div>
      <div class="collapsible-body">

    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2689863");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!-- ASSOCIACAO BENEFICENTE HOSPITAL SAO LUCAS  -->  
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
      ASSOCIACAO BENEFICENTE HOSPITAL SAO LUCAS
      <span class="new badge"></span></div>
    <div class="collapsible-body">
      <form>
      <input type="button" value="Imprimir" onClick="window.print()" />  
      </form>
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378116");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


 

<!-- ASSOCIACAO HOSPITALAR ANGELINA MENEGHELLI  -->  
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
      ASSOCIACAO HOSPITALAR ANGELINA MENEGHELLI
      <span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
     <input type="button" value="Imprimir" onClick="window.print()" />
    </form>    
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2377659");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!-- ACENI -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
      ACENI
      <span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>    
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/7274351");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>






<!-- ASSOCIACAO HOSPITALAR DE VARGEAO -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
      ASSOCIACAO HOSPITALAR DE VARGEAO
      <span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>
     <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2411245");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


<!-- ASSOCIACAO HOSPITALAR PE JOAO BERTHIER -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
ASSOCIACAO HOSPITALAR PE JOAO BERTHIER
      <span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form> 
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2538571");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!-- ASSOCIACAO HOSPITAL E MATERNIDADE DOM JOAQUIM -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
ASSOCIACAO HOSPITAL E MATERNIDADE DOM JOAQUIM
      <span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2522489");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



 
  
<!-- CENTRO DE CONVIVENCIA SANTANA -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
CENTRO DE CONVIVENCIA SANTANA
    <span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2778785");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>






  <!-- CENTRO HOSPITALAR UNIMED -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
CENTRO HOSPITALAR UNIMED
    <span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2521431");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!-- CEPON-->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
CEPON
    <span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/19445");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!-- FUNDACAO HOSPITALAR HENRIQUE LAGE-->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
FUNDACAO HOSPITALAR HENRIQUE LAGE
    <span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2419246");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



 <!-- FUNDACAO HOSPITALAR MUNICIPAL DE CANELINHA-->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
FUNDACAO HOSPITALAR MUNICIPAL DE CANELINHA

<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2596784");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!-- FUNDACAO HOSPITALAR SANTA OTILIA -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
FUNDACAO HOSPITALAR SANTA OTILIA

<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2555840");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!-- FUNDACAO MEDICA -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
FUNDACAO MEDICA

<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378876");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>








<!-- FUNDACAO MEDICA ASSISTENCIAL DO TRABALHADOR RURAL -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
FUNDACAO MEDICA ASSISTENCIAL DO TRABALHADOR RURAL

<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378876");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!-- FUNDACAO MEDICO SOCIAL RURAL DE SANTA CATARINA -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
FUNDACAO MEDICO SOCIAL RURAL DE SANTA CATARINA

<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378000");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



  <!-- FUNDACAO MEDICO SOCIAL RURAL DE SAO MARTINHO -->  
<li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
FUNDACAO MEDICO SOCIAL RURAL DE SAO MARTINHO

<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2550881");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     



 <!-- HOSPITAL AZAMBUJA -->  
  <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
HOSPITAL AZAMBUJA

<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2522411");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     




 <!-- HOSPITAL BAIA SUL -->  
 <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
HOSPITAL BAIA SUL

<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/6680305");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     






 <!--HOSPITAL BEATRIZ RAMOS -->  
 <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
HOSPITAL BEATRIZ RAMOS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2521873");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   





 <!--HOSPITAL BEIRA MAR -->  
 <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
HOSPITAL BEIRA MAR
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/3373398");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     


 <!--HOSPITAL BENEFICENTE SAO ROQUE
 -->  
 <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
HOSPITAL BENEFICENTE SAO ROQUE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2302780");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     


   <!-- HOSPITAL BETHESDA  -->  
 <li>
    <div class="collapsible-header">
      <i class="material-icons">local_hospital
</i>
HOSPITAL BETHESDA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2521296");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     



<!-- HOSPITAL BOM JESUS  -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL BOM JESUS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2377829");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     



<!-- HOSPITAL CAIBI  -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL CAIBI
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2538083");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     



  

<!-- HOSPITAL CEDRO  -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL CEDRO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378809");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     





<!-- HOSPITAL CIRURGICO CAMBORIU -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL CIRURGICO CAMBORIU
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691523");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>     




<!-- HOSPITAL CUNHA PORA -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL CUNHA PORA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2626667");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   


  

<!-- HOSPITAL DA CRIANCA AUGUSTA MULLER BOHNER -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DA CRIANCA AUGUSTA MULLER BOHNER
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/7286082");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   




<!-- HOSPITAL DA FUNDACAO -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DA FUNDACAO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2553155");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   





<!-- HOSPITAL DE ALFREDO WAGNER -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE ALFREDO WAGNER
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2418630");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   




<!--HOSPITAL DE CARIDADE -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE CARIDADE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/19402");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   



 
  <!--HOSPITAL DE CARIDADE CORACAO DE JESUS -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE CARIDADE CORACAO DE JESUS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2300516");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   



<!--HOSPITAL DE CARIDADE DE JAGUARUNA -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE CARIDADE DE JAGUARUNA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2550962");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   




<!--HOSPITAL DE CARIDADE SAO ROQUE -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE CARIDADE SAO ROQUE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2419378");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   


  

<!-- HOSPITAL DE CARIDADE S B J DOS PASSOS -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE CARIDADE S B J DOS PASSOS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2558017");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   



  
<!-- HOSPITAL DE CLINICAS DR BERMIRO SAGGIORATTO LTDA -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE CLINICAS DR BERMIRO SAGGIORATTO LTDA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2500388");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   




  
<!-- HOSPITAL DE GASPAR -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE GASPAR
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691485");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   








  <!-- HOSPITAL DE IPORA -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE IPORA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378183");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   






  <!-- HOSPITAL DE MODELO -->  
  <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE MODELO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2553066");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   




<!-- HOSPITAL DE Penha -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE PENHA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691469");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>   






<!-- HOSPITAL DE PINHALZINHO	PINHALZINHO -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE PINHALZINHO	PINHALZINHO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2537826");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!-- HOSPITAL DE RIO FORTUNA	RIO FORTUNA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE RIO FORTUNA	RIO FORTUNA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2386038");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



  
<!-- HOSPITAL DE SAO BONIFACIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE SAO BONIFACIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2596792");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





 <!-- HOSPITAL DE  TUNAPOLIS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DE TUNAPOLIS	
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378140");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



 <!-- HOSPITAL DIVINO SALVADOR-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DIVINO SALVADOR
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2302500");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



 <!-- HOSPITAL DOM JOAQUIM IMAS-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DOM JOAQUIM IMAS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2672839");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




 <!-- HOSPITAL DONA HELENA-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DONA HELENA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2521385");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



   <!-- HOSPITAL DR JOSE ATHANAZIO-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL DR JOSE ATHANAZIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2379767");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!--HOSPITAL E MATERNIDADE DONA LISETTE	TAIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MATERNIDADE DONA LISETTE	TAIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2377616");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!--HOSPITAL E MATERNIDADE DR CARLOS CORREA	FLORIANOPOLIS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MATERNIDADE DR CARLOS CORREA	FLORIANOPOLIS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/3426572");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL E MATERNIDADE JARAGUÁ-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MATERNIDADE JARAGUÁ
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2306344");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!--HOSPITAL E MATERNIDADE MARIA AUXILIADORA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MATERNIDADE MARIA AUXILIADORA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2377330");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


  

<!--HOSPITAL E MATERNIDADE NOSSA SENHORA DA CONCEICAO	ANGELINA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MATERNIDADE NOSSA SENHORA DA CONCEICAO	ANGELINA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2418304");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>






<!--HOSPITAL E MATERNIDADE RIO DO TESTO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MATERNIDADE RIO DO TESTO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2513838");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL E MATERNIDADE SANTA CECILIA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MATERNIDADE SANTA CECILIA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2302748");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




  
<!--HOSPITAL E MATERNIDADE SANTA TEREZINHA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MATERNIDADE SANTA TEREZINHA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2377632");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!--HOSPITAL E MATERNIDADE TEREZA RAMOS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MATERNIDADE TEREZA RAMOS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2504332");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!--HOSPITAL E MAT. MARIETA K. BORNHAUSEN-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL E MAT. MARIETA K. BORNHAUSEN
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2522691");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


      
<!--HOSPITAL FELIX DA COSTA GOMES-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL FELIX DA COSTA GOMES
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2490935");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>

 
  
<!--HOSPITAL FLORIANÓPOLIS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL FLORIANÓPOLIS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/19305");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!--HOSPITAL FREI BRUNO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL FREI BRUNO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2411415");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


<!--HOSPITAL FREI ROGERIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL FREI ROGERIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2300435");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL GERAL JOINVILLE-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL GERAL JOINVILLE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/9757090");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




  <!--HOSPITAL GOVERNADOR CELSO RAMOS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL GOVERNADOR CELSO RAMOS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691841");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





  <!--HOSPITAL GUARUJA-->  
  <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL GUARUJA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378175");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!--HOSPITAL HELIO ANJO ORTIZ-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL HELIO ANJO ORTIZ
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2302101");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL HOSCOLA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL HOSCOLA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2672154");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL INFANTIL DR JESER AMARANTE FARIA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL INFANTIL DR JESER AMARANTE FARIA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/6048692");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!--HOSPITAL INFANTIL JOANA DE GUSMAO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL INFANTIL JOANA DE GUSMAO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691868");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





  <!--HOSPITAL INFANTIL SEARA DO DO BEM-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL INFANTIL SEARA DO DO BEM
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2662914");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>










  

</ul>
</div>












  <footer class="page-footer orange">
    <div class="container">
    <div class="footer-copyright">
      <div class="container">
       <a class="orange-text text-lighten-3" href="http://cerintersc.com.br">CerinterSC</a>
      </div>
    </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="../js/init.js"></script>
    <script src="../js/materialize.js"></script>
  </body>
</html>



@endsection








