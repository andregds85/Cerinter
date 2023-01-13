



    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
<body>
<table class="table table-bordered">
  <tbody>
    <tr>
    <td>
    <img src="http://www.cerintersc.com.br/content/img/logo.png" width="100" height="100"> 
</td>
      <td align="center"><b>
      <br>Estado de Santa Catarina
      <br>Secretaria de Estado da Saúde 
      <br>Central Estadual de Serviços Especializado e Regulação
      <br>Central Estadual de Transferência Inter Hospitalares
      <br>Ocupação de Leitos do Sistema SES Leitos<br>
      Dados dos Hospitais </b>
     </td>
     </tr>
  </tbody>
</table>







     <?php
$curlHandler = curl_init();
$token = '';
curl_setopt_array($curlHandler, [
    CURLOPT_URL => 'http://api-leitos.saude.sc.gov.br:3000/csv/taxaOcupacao',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'Authorization: Bearer ' . $token
    ],
]);
$response = curl_exec($curlHandler);
curl_close($curlHandler);
/*
print_r($response);
*/
$hosp=(explode(',', $response)); 
?>
    
<table>

 

<thead>

<tr>


<?php
for ($x = 0; $x <= 10; $x++) {
  echo "<th>";
  echo $hosp[$x];
  echo "</th>"; 
}
?>
</tr>
</thead>


<tbody>
<tr>
<?php
for ($x = 11; $x <= 21; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 22; $x <= 32; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr> 
<?php
for ($x = 33; $x <= 43; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr> 
<?php
for ($x = 44; $x <= 54; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 55; $x <= 65; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 66; $x <= 76; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 77; $x <= 87; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 88; $x <= 98; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 99; $x <= 109; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 110; $x <= 120; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 121; $x <= 131; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 132; $x <= 142; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 143; $x <= 153; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 154; $x <= 164; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 165; $x <= 175; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 176; $x <= 186; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 187; $x <= 197; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 198; $x <= 208; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 209; $x <= 219; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 220; $x <= 230; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 231; $x <= 241; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 242; $x <= 252; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 253; $x <= 263; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 264; $x <= 274; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 275; $x <= 285; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 286; $x <= 296; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 297; $x <= 307; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 308; $x <= 318; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 319; $x <= 329; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 330; $x <= 340; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 341; $x <= 351; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 352; $x <= 362; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 363; $x <= 373; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 374; $x <= 384; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 385; $x <= 395; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 396; $x <= 406; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 407; $x <= 417; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 418; $x <= 428; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 429; $x <= 439; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 440; $x <= 450; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 451; $x <= 461; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 462; $x <= 472; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 473; $x <= 483; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 484; $x <= 494; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 495; $x <= 505; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 506; $x <= 516; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 517; $x <= 527; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 528; $x <= 538; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 539; $x <= 549; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 550; $x <= 560; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 561; $x <= 571; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 572; $x <= 582; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 583; $x <= 593; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 594; $x <= 604; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 605; $x <= 615; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 616; $x <= 626; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 627; $x <= 637; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 638; $x <= 648; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>

<tr>
<?php
for ($x = 649; $x <= 659; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 660; $x <= 670; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 671; $x <= 681; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 682; $x <= 692; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 693; $x <= 703; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 704; $x <= 714; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 715; $x <= 725; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 726; $x <= 736; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 737; $x <= 747; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 737; $x <= 747; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 748; $x <= 758; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 759; $x <= 769; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 770; $x <= 780; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 781; $x <= 791; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 792; $x <= 802; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 803; $x <= 813; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 814; $x <= 824; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>

<tr>
<?php
for ($x = 814; $x <= 824; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>

<tr>
<?php
for ($x = 825; $x <= 835; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 836; $x <= 846; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 847; $x <= 857; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 858; $x <= 868; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 869; $x <= 879; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 880; $x <= 890; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 891; $x <= 901; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 902; $x <= 912; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 913; $x <= 923; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 924; $x <= 934; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 935; $x <= 945; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 946; $x <= 956; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 957; $x <= 967; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 968; $x <= 978; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 979; $x <= 989; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 990; $x <= 1000; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1001; $x <= 1011; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1012; $x <= 1022; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>

<tr>
<?php
for ($x = 1034; $x <= 1044; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1045; $x <= 1055; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1056; $x <= 1066; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1067; $x <= 1077; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>





<tr>
<?php
for ($x = 1078; $x <= 1088; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1089; $x <= 1099; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1100; $x <= 1110; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1111; $x <= 1121; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1122; $x <= 1132; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1133; $x <= 1143; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1144; $x <= 1154; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1155; $x <= 1165; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1166; $x <= 1176; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1177; $x <= 1187; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1188; $x <= 1198; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1199; $x <= 1209; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1210; $x <= 1220; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1221; $x <= 1231; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1232; $x <= 1242; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1243; $x <= 1253; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1254; $x <= 1264; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1265; $x <= 1275; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1276; $x <= 1286; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1287; $x <= 1297; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1298; $x <= 1308; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1309; $x <= 1319; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1309; $x <= 1319; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>





<tr>
<?php
for ($x = 1320; $x <= 1330; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1331; $x <= 1341; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1342; $x <= 1352; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1353; $x <= 1363; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1364; $x <= 1374; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1375; $x <= 1385; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x =1386; $x <= 1396; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x =1397; $x <= 1407; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x =1408; $x <= 1418; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x =1419; $x <= 1429; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x =1430; $x <= 1440; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x =1441; $x <= 1451; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1452; $x <= 1462; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1463; $x <= 1473; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1474; $x <= 1484; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1485; $x <= 1495; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1496; $x <= 1506; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1507; $x <= 1517; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1518; $x <= 1528; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1529; $x <= 1539; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1540; $x <= 1550; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1551; $x <= 1561; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1562; $x <= 1572; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1573; $x <= 1583; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1584; $x <= 1594; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1595; $x <= 1605; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1606; $x <= 1616; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1617; $x <= 1627; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1628; $x <= 1638; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1639; $x <= 1649; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1650; $x <= 1660; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1650; $x <= 1660; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1672; $x <= 1682; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1683; $x <= 1693; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>

<tr>
<?php
for ($x = 1694; $x <= 1704; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1705; $x <= 1715; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1716; $x <= 1726; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1727; $x <= 1737; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1738; $x <= 1748; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1749; $x <= 1759; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1760; $x <= 1770; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1771; $x <= 1781; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1782; $x <= 1792; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1793; $x <= 1803; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1804; $x <= 1814; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1815; $x <= 1825; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1826; $x <= 1836; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1837; $x <= 1847; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1848; $x <= 1858; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1859; $x <= 1869; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1870; $x <= 1880; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1881; $x <= 1891; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1892; $x <= 1902; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1903; $x <= 1913; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1914; $x <= 1924; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1925; $x <= 1935; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1936; $x <= 1946; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1947; $x <= 1957; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 1958; $x <= 1968; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 1969; $x <= 1979; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1980; $x <= 1990; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 1991; $x <= 2001; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 2002; $x <= 2012; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 2013; $x <= 2023; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 2024; $x <= 2034; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>




<tr>
<?php
for ($x = 2035; $x <= 2045; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>



<tr>
<?php
for ($x = 2046; $x <= 2056; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 2057; $x <= 2067; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>


<tr>
<?php
for ($x = 2068; $x <= 2078; $x++) {
  echo "<td>";
  echo $hosp[$x];
  echo "</td>"; 
}
?>
</tr>

      </td>
   </tr>
  </tbody>
</table>

<table class="table table-bordered">
  <tbody>
  <tr>
      </td>
    </tr>
  </tbody>
</table> 





    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

 

    </html>









 