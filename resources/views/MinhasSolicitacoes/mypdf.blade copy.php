<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;

$tabela = Checklist::all(); 



$itensP = Checklist::where('id',$id)->get(); 

?>
    @foreach ($itensP  as $t)

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
      <td align="center"><b>
      <br>Estado de Santa Catarina
      <br>Secretaria de Estado da Saúde 
      <br>Central Estadual de Serviços Especializado e Regulação
      <br>Central Estadual de Transferência Inter Hospitalares
      <br>Checklist Transporte Seguro<br>
      Dados do Paciente </b>
     </td>
     </tr>
  </tbody>
</table>

<table class="table table-bordered">
  <tbody>
    <tr>
      <td><img src="img/logo_menor.png" width="100" height="100">
</td>
      <td colspan="5"><b>ID</b> :{{$t->id }} <br>
    <b>Data :</b>{{$t->created_at }} <br>
    <b> Data da Solicitação:</b> {{$t->dataSolicitacao }} <br>
    <b> Nome: </b>{{$t->nome }}<br>
    </td>
    </tr>
  </tbody>
  </table>

  <table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>CNS:</b>{{$t->cns }} <br>
          <b>Dn:</b>{{$t->dn }}<br>
           <b>Sexo: </b> {{$t->sexo }}<br>
           <b>CPF:</b>{{$t->cpf }}<br>
           <b>RG:</b>{{$t->rg }}<br>
     <b>Orgão Emissor: </b> {{$t->orgaoEmissor }}<br>
     </td>
     <td>
    
    <b> Estado: </b> {{$t->estado}}<br>
    <b> Diagnóstico:</b> {{$t->diagnostico}}</td>
    
    </tr>

  </tbody>
</table>

<table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>Macro de Origem::</b>{{$t->macroOrigem }} <br>
          <b>Hospital de Origem:</b>{{$t->hospitalOrigem }}<br>
           <b>Leito de Origem:</b> {{$t->LeitoOrigem }}<br>
      </td>
          <td><b>Macro de Destino:</b>{{$t->macroDestino }}<br>
          <b>Hospital de Destino:</b>{{$t->hospitalDestino }}<br>
           <b>Leito de Destino:</b> {{$t->LeitoDestino }}<br>
        </td>
    
    </tr>

  </tbody>
</table>



<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b> Tipo de Precaução</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Padrão:</b>{{$t->padrao }} <br>
          <b>Contato:</b>{{$t->contato }}<br>
           <b>Respiratória: </b> {{$t->respiratoria }}<br>
      </td>
     <td>
    
    <b> Suspeito de Covid: </b> {{$t->covid}}<br>
    <b> Método PR ou PCR:</b> {{$t->metodo}}/<br>
    <b> Data:</b> {{$t->data}}</td>
    </tr>

  </tbody>
</table>


<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b>Dispositivos Invasivos</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Sng:</b>{{$t->sng }} <br>
          <b>Svd:</b>{{$t->svd }}<br>
           <b>Dreno: </b> {{$t->dreno }}<br>
           <b>Tottqd: </b> {{$t->tottqd }}<br>
           <b>Gtt: </b> {{$t->gtt }}<br>
           <b>DVE: </b> {{$t->dve }}<br>


      </td>
      <td><b>Pai:</b>{{$t->pai }} <br>
          <b>kehr:</b>{{$t->kehr }}<br>
           <b>Acesso Venoso Central: </b> {{$t->acessoVenosoCentral }}<br>
           <b>Acesso Venoso Periférico: </b> {{$t->acessoVenosoPeriferico }}<br>
           <b>Cateter Dialise: </b> {{$t->cateterDialise }}<br>
           <b>Outros: </b> {{$t->outros }}<br>

      </td>
    </tr>
  </tbody>
</table>    


<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b>Suporte Hemodinâmico</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Drogas : </b>Vazão<br>
         <b>NORADRENALINA:</b>mcg / kg / min<br>
         <b>Vasopressina:</b>UI / min<br>
  
         </td>
         
      <td><b>DOBUTAMINA:  mcg / Kg / min <br> Outros (Espceficar Drogas e Vazão ):</b>{{$t->drogas }} <br>
     </td>
    </tr>
  </tbody>
</table>    

<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b>Suporte Ventilatório</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Suporte O2:</b>{{$t->suporteo2 }} <br>
          <b>Cateter:</b>{{$t->cateter }}<br>
           <b>Mascara: </b> {{$t->mascara }}<br>
           <b>outroSu: </b> {{$t->outroSu }}<br>
           <b>vm: </b> {{$t->vm }}<br>
           <b>Fio: </b> {{$t->fiO2 }}<br>
      </td>
      <td><b>vm: </b> {{$t->vm }}<br>
          <b>Peep:</b>{{$t->peep }} <br>
          <b>Spo2:</b>{{$t->spO2 }}<br>
           <b>Prona:</b> {{$t->prona }}<br>
           <b>Classificação de Risco do Transporte: </b> {{$t->risco }}<br>
        </td>
    </tr>
  </tbody>
</table>   


<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b>Informações Complementares</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Disfusão Renal Aguda :</b>{{$t->aguda}} <br>
          <b>Funcionalidade Prévia:</b>{{$t->funcionalidade }}<br>
           <b>PA: </b> {{$t->pa}}<br>
           <b>FC: </b> {{$t->fc}}<br>
           <b>SPO2: </b> {{$t->spo2c }}<br>

      </td>
      <td><b>Temp: </b> {{$t->temp }}<br>
          <b>Peso :</b>{{$t->peso }} <br>
          <b>Altura:</b>{{$t->altura }}<br>
           <b>Outros:</b> {{$t->outrosIC }}<br>
        </td>
    </tr>
  </tbody>
</table> 


<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>História Clínica / Comorbidades:</b>{{$t->comorbidades}} <br>
          <b>Médico / Assistente / Nir :</b>{{$t->nir }}<br>
      </td>
    </tr>
  </tbody>
</table> 


<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b>Regulação Estadual</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Médico Regulador:</b>{{$t->regulador}} <br>
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

    @endforeach
 

    </html>








 