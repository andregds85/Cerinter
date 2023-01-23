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





<!--  HOSPITAL INSTITUTO DE CARDIOLOGIA-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL INSTITUTO DE CARDIOLOGIA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2302969");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




       

<!--  HOSPITAL IZOLDE HUBNER DALMORA-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL IZOLDE HUBNER DALMORA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691876");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--  HOSPITAL JOAO SCHREIBER-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL JOAO SCHREIBER
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/7847777");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



  <!--  HOSPITAL MAICE-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MAICE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2301830");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




  
 <!-- HOSPITAL MATEUS CALED PADOIN-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MATEUS CALED PADOIN
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/7278977");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




 <!-- HOSPITAL MISERICORDIA-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MISERICORDIA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2522209");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



  
 <!-- HOSPITAL MONDAI-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MONDAI
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378108");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



    
 <!-- HOSPITAL MONSENHOR JOSE LOCKS DE SAO JOAO BATISTA-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MONSENHOR JOSE LOCKS DE SAO JOAO BATISTA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2418967");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


   
 <!-- HOSPITAL MUNICIPAL BOM JESUS-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MUNICIPAL BOM JESUS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2491311");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




   <!-- HOSPITAL MUNICIPAL FREI ROGERIO-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MUNICIPAL FREI ROGERIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691892");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



   <!-- HOSPITAL MUNICIPAL NOSSA SENHORA DA GRACA-->  
   <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MUNICIPAL NOSSA SENHORA DA GRACA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/7105088");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


  
<!-- HOSPITAL MUNICIPAL RUTH CARDOSO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MUNICIPAL RUTH CARDOSO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/6854729");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!-- HOSPITAL MUNICIPAL SANTO ANTONIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MUNICIPAL SANTO ANTONIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2303167");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!-- HOSPITAL MUNICIPAL SANTO ANTONIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MUNICIPAL SANTO ANTONIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691833");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



  
<!-- HOSPITAL MUNICIPAL SÃO JOSÉ JOINVILLE-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MUNICIPAL SÃO JOSÉ JOINVILLE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2436469");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



  

<!-- HOSPITAL MUNICIPAL SAO LUCAS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL MUNICIPAL SAO LUCAS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2543079");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!-- HOSPITAL NEREU RAMOS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NEREU RAMOS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2664879");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!-- HOSPITAL NOSSA SENHORA DA CONCEICAO HNSC-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOSSA SENHORA DA CONCEICAO HNSC
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2419653");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!-- HOSPITAL NOSSA SENHORA DA IMACULADA CONCEICAO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOSSA SENHORA DA IMACULADA CONCEICAO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2778831");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





  
<!-- HOSPITAL NOSSA SENHORA DA PAZ-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOSSA SENHORA DA PAZ
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2380188");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!-- HOSPITAL NOSSA SENHORA DAS DORES-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOSSA SENHORA DAS DORES
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2380331");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>
 
  
  

<!-- HOSPITAL NOSSA SENHORA DAS GRACAS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOSSA SENHORA DAS GRACAS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2665085");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>
 



<!-- HOSPITAL NOSSA SENHORA DE FATIMA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOSSA SENHORA DE FATIMA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2305623");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>
 





<!-- HOSPITAL NOSSA SENHORA DO PATROCINIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOSSA SENHORA DO PATROCINIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691477");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>
 




<!--HOSPITAL NOSSA SENHORA DOS NAVEGANTES-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOSSA SENHORA DOS NAVEGANTES
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2674327");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL NOSSA SENHORA DOS PRAZERES-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOSSA SENHORA DOS PRAZERES
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2504316");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


 

<!-- HOSPITAL NOVA ERECHIM-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL NOVA ERECHIM
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2538148");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



  
<!-- HOSPITAL OASE-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL OASE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2537192");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


  
<!-- HOSPITAL OSVALDO CRUZ-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL OSVALDO CRUZ
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691493");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>

 

<!--  HOSPITAL PALMA SOLA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL PALMA SOLA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378213");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!-- HOSPITAL PALMITOS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL PALMITOS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2664984");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!-- HOSPITAL PIRATUBA IPIRA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL PIRATUBA IPIRA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691507");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>






<!-- HOSPITAL REGIONAL ALTO VALE-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL REGIONAL ALTO VALE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2568713");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>






<!-- HOSPITAL REGIONAL ARARANGUÁ-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL REGIONAL ARARANGUÁ
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691515");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>







<!-- HOSPITAL REGIONAL ARARANGUÁ-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL REGIONAL DE BIGUACU HELMUTH NASS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/7486596");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!-- HOSPITAL REGIONAL DO OESTE-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL REGIONAL DO OESTE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2537788");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL REGIONAL HANS DIETER-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL REGIONAL HANS DIETER
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2436450");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!--HOSPITAL REGIONAL SÃO PAULO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL REGIONAL SÃO PAULO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2411393");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>

  
<!--HOSPITAL RIO NEGRINHO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL RIO NEGRINHO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2521695");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>


  


  <!--HOSPITAL ROGACIONISTA EVANGELICO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL ROGACIONISTA EVANGELICO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2410834");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




  <!--HOSPITAL SAGRADA FAMILIA-->  
  <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAGRADA FAMILIA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2521792");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL SAGRADA FAMILIA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAGRADA FAMILIA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2521792");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL SAMARIA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAMARIA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2379627");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>






<!--HOSPITAL SANTA CASA RURAL-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA CASA RURAL
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2378167");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




  

<!--HOSPITAL SANTA CATARINA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA CATARINA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2522101");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>

  

<!--HOSPITAL SANTA CLARA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA CLARA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2300486");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL SANTA CRUZ-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA CRUZ
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2491249");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>



<!--HOSPITAL SANTA ISABEL-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA ISABEL
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2558246");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!--HOSPITAL SANTA JULIANA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA JULIANA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2302543");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!--HOSPITAL SANTA LUZIA DE DEOLINDO JOSE BAGGIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA LUZIA DE DEOLINDO JOSE BAGGIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2411164");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL SANTA TERESA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA TERESA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2302950");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!--HOSPITAL SANTA TERESINHA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA TERESINHA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2665883");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>






<!--HOSPITAL SANTA TERESINHA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTA TERESINHA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2560771");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>





<!--HOSPITAL SANTO ANTONIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTO ANTONIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2558254");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>




<!--HOSPITAL SANTO ANTONIO CAMPO ERE-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTO ANTONIO CAMPO ERE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2537850");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  





<!--HOSPITAL SANTO ANTONIO DE ITAIOPOLIS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTO ANTONIO DE ITAIOPOLIS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2665107");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  






<!--HOSPITAL SANTO ANTONIO GUARAMIRIM-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTO ANTONIO GUARAMIRIM
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2492342");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  



<!--HOSPITAL SANTO ANTONIO HSA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SANTO ANTONIO HSA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2550938");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  





<!--HOSPITAL SAO BENEDITO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO BENEDITO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2660717");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  




<!--HOSPITAL SAO BERNARDO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO BERNARDO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2538342");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  






  <!--HOSPITAL SÃO BRÁS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SÃO BRÁS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2543044");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  








  <!--HOSPITAL SAO CAMILO-->  
  <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO CAMILO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2385880");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  






  <!--HOSPITAL SAO CAMILO-->  
  <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO CAMILO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/6249604");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  




  <!--HOSPITAL SAO CRISTOVAO-->  
  <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO CRISTOVAO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2652099");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  





<!--HOSPITAL SÃO DONATO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SÃO DONATO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2420015");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  





<!--HOSPITAL SAO FRANCISCO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO FRANCISCO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2418177");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  





<!--HOSPITAL SAO FRANCISCO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO FRANCISCO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2303892");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  





  <!--HOSPITAL SAO JORGE LTDA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO JORGE LTDA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2557975");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  






<!--HOSPITAL SÃO JOSÉ CRICIUMA-->  
 <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SÃO JOSÉ CRICIUMA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2758164");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  

  



<!--HOSPITAL SAO JOSE DE URUBICI-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO JOSE DE URUBICI
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2300885");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  



<!--HOSPITAL SAO JOSE E MATERNIDADE CHIQUINHA GALLOTTI -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO JOSE E MATERNIDADE CHIQUINHA GALLOTTI
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2626659");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  




<!--HOSPITAL SÃO JOSÉ JARAGUA DO SUL -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SÃO JOSÉ JARAGUA DO SUL
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2306336");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  


<!--HOSPITAL SÃO JOSÉ MARAVILHA -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SÃO JOSÉ MARAVILHA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2538180");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  




<!--HOSPITAL SÃO JOSÉ MARAVILHA -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SÃO JOSÉ MARAVILHA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2538180");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  



<!--HOSPITAL SAO JUDAS TADEU -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO JUDAS TADEU
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2305534");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  




<!--HOSPITAL SAO LUCAS -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO LUCAS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2666138");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  


  

<!--HOSPITAL SAO LUIZ1 -->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO LUIZ
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2664992");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  



  

<!--HOSPITAL SAO MARCOS	NOVA VENEZA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO MARCOS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691558");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  




<!--HOSPITAL SAO MARCOS	NOVA VENEZA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO MARCOS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691558");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  




<!--HOSPITAL SAO PEDRO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>
HOSPITAL SAO PEDRO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691566");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  


  

<!--HOSPITAL SAO ROQUE DE LUZERNA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL SAO ROQUE DE LUZERNA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2300184");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  
  

<!--HOSPITAL SAO ROQUE DE SEARA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL SAO ROQUE DE SEARA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2304155");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  







<!--HOSPITAL SAO ROQUE DE SEARA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL SAO ROQUE DE SEARA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2304155");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  





<!--HOSPITAL SAO SEBASTIAO - ANITAPOLIS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL SAO SEBASTIAO - ANITAPOLIS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691574");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  







<!--HOSPITAL SAO SEBASTIAO - PAPANDUVA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL SAO SEBASTIAO - PAPANDUVA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2379163");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  






<!--HOSPITAL SAO SEBASTIAO - TREZE DE MAIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL SAO SEBASTIAO - TREZE DE MAIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2778858");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  





<!--HOSPITAL SÃO VICENTE DE PAULO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL SÃO VICENTE DE PAULO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2379333");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  



<!--HOSPITAL SAUDADES-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL SAUDADES
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2538229");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  




<!--HOSPITAL TEREZINHA GAIO BASO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL TEREZINHA GAIO BASO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/6683134");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>  




<!--HOSPITAL TROMBUDO CENTRAL-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL TROMBUDO CENTRAL
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2377373");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    



<!--HOSPITAL UNIVERSITÁRIO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL UNIVERSITÁRIO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/3157245");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    





<!--HOSPITAL UNIVERSITARIO PEQUENO ANJO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL UNIVERSITARIO PEQUENO ANJO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2744937");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    






  <!--HOSPITAL VIDAL RAMOS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL VIDAL RAMOS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2377187");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    




  <!--HOSPITAL WALDOMIRO COLAUTTI-->  
  <li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSPITAL WALDOMIRO COLAUTTI
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2691884");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    





<!--HOSP. NOSSA SENHORA CONCEIÇÃO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HOSP. NOSSA SENHORA CONCEIÇÃO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2491710");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    
  




<!--HPM HOSPITAL DA POLICIA MILITAR COMANDANTE LARA RIBAS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HPM HOSPITAL DA POLICIA MILITAR COMANDANTE LARA RIBAS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/3374548");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    
  
  

<!--HSS HOSPITAL SAO SEBASTIAO-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>HSS HOSPITAL SAO SEBASTIAO
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2305097");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    


<!--INSTITUTO DE PSIQUIATRIA IPQ-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>INSTITUTO DE PSIQUIATRIA IPQ
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2706369");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    




<!--INSTITUTO SANTE HOSPITAL DE DIONISIO CERQUEIRA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>INSTITUTO SANTE HOSPITAL DE DIONISIO CERQUEIRA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2658372");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    


  
 
<!--MATERNIDADE CARMELA DUTRA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>MATERNIDADE CARMELA DUTRA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/19283");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    
      


 
<!--MATERNIDADE DARCY VARGAS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>MATERNIDADE DARCY VARGAS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2436477");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    




 
<!--MATERNIDADE DONA CATARINA KUSS-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>MATERNIDADE DONA CATARINA KUSS
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2379341");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    



 
<!--MATERNO INFANTIL SANTA CATARINA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>MATERNO INFANTIL SANTA CATARINA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2594277");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    





<!--PRONTO ATENDIMENTO 24 HORAS ITAPOA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>PRONTO ATENDIMENTO 24 HORAS ITAPOA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2658275");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    






<!--SOCIEDADE CULTURAL E BENEFICENTE SAO JOSE-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>SOCIEDADE CULTURAL E BENEFICENTE SAO JOSE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2377462");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    














  
<!--SOCIEDADE HOSPITALAR ITAPIRANGA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>SOCIEDADE HOSPITALAR ITAPIRANGA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/5749018");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    


 
<!--UNIDADE DE PRONTO ATENDIMENTO UPA 24 H PADRE ALDO SEIDEL-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>UNIDADE DE PRONTO ATENDIMENTO UPA 24 H PADRE ALDO SEIDEL
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/9202269");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    


  
<!--UNIDADE DE PRONTO ATENDIMENTO UPA VIDEIRA-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>UNIDADE DE PRONTO ATENDIMENTO UPA VIDEIRA
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/9649735");
       /* echo $hg; */
        $hosp=(explode(',',$hg)); 
        for ($x = 0; $x <= 36; $x++) {
         echo $hosp[$x];
         echo "<br>";
       }
    ?>
  </div>
  </li>    



<!--UNIDADE MISTA DE SAUDE NOSSA SENHORA DE SALETE-->  
<li>
<div class="collapsible-header">
<i class="material-icons">local_hospital
</i>UNIDADE MISTA DE SAUDE NOSSA SENHORA DE SALETE
<span class="new badge"></span></div>
    <div class="collapsible-body">
    <form>
    <input type="button" value="Imprimir" onClick="window.print()" />
    </form>   
    <?php
        $hg = file_get_contents("https://apidadosabertos.saude.gov.br/cnes/estabelecimentos/2380242");
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








