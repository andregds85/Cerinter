<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <title>Relatório de Transporte terrestre</title>
</head>
<body>
<img src="img/logo_menor.png" width="100" height="100">
<p>
    <h3 align="center">{{$title}}</h3>
    <h3 align="center">{{$date}}</h3>

  </p>


<?php
use App\Http\Controllers\TerrestreControlleradm;
use App\Models\Terrestre;

$tabela = Terrestre::all(); 
?>

   

     @foreach ($tabela as $t)
    <p><h3><B> Dados do Paciente</h3></B><p>
    <p align="center"><B>ID :</B>{{$t->id }}<p>
    <p align="center"><B>Data :</B>{{$t->created_at }}<p>
  
    <p><B> SISREG:</B>{{$t->sisreg }}<p>
    <p><B> CNSUS: </B>{{$t->CNSUS }}<p>
    <p><B> Usuário que preencheu: </B>{{$t->usuario }}<p>
     
    <p><B> Nome :</B>{{$t->nome }}<p>
    <p><B> Sexo :</B>{{$t->sexo }}<p>
    <p><B> Data de Nascimento :</B>{{$t->dataNasc }}<p>
    <p><B> Nome da Mãe :</B>{{$t->nomeDaMae }}<p>
    <p><B> CEP:</B>{{$t->cep }}<p>





    
    <p><B> Municipio de Origem  :</B>{{$t->cidade }}<p>  
    <p><B> Estado  :</B>{{$t->uf }}<p>   
    
    
    <p><B> Rua:</B>{{$t->rua }}<p>
    <p><B> Número:</B>{{$t->numero }}<p>  
    <p><B> Bairro:</B>{{$t->bairro }}<p>  
    <p><B> Complemento:</B>{{$t->complemento }}<p>  


    

    <p><B> Naturalidade:</B>{{$t->naturalidade }}<p>
    <p><B> Rg:</B>{{$t->rg }}<p>  
    <p><B> Orgao Expeditor:</B>{{$t->orgaoExpeditor }}<p>  
    <p><B> Estado do RG:</B>{{$t->ufrg }}<p>  

    <p><B> responsavel Contato Familiar:</B>{{$t->contatoFamiliar }}<p>  
    <p><B> Telefone Contato Familiar:</B>{{$t->telefoneContatoFamiliar }}<p>  


	    	
    
    <p><h3><B> Unidade / Hospital de Origem : {{$t->unidadeHo }}</h3></B><p>
    <p><B> Municipio:</B>{{$t->municipioHo }}<p>
    <p><B> Estado  :</B>{{$t->estadoHo }}<p>
    <p><B> Setor/Leito:  </B>{{$t->setorLeito }}<p>
    <p><B> Fone o Setor / Leito:  </B>{{$t->fone }}<p>
    <p><B> Médico Assistente  </B>{{$t->medicoA }}<p>
    <p><B> Data da Internação </B>{{$t->dataInternacao }}<p>



    <p><B> Diagnostico</B>{{$t->diagnostico }}<p>

   
    <p><B> Quadro Clínico </B>{{$t->quadroClinico }}<p>
    <p><B> Necessita de procedimento cirúrgico:</B>{{$t->npc }}<p>
    <p><B> PO:</B>{{$t->npc }}<p>
    <p><B> Data PO:</B>{{$t->dataPo}}<p>
    
    
        
    <p><B> Transferências Interestaduais: TFD – AUTORIZADO ? </B>{{$t->tfd}}<p>
    <p><B> CONDIÇOES DE TRANSFERENCIA FORA REGIÃO: </B>{{$t->transferenciaFR}}<p>
    <p><B> AUTORIZAÇÃO FAMILIAR:  </B>{{$t->autorizacaoFa}}<p>
    <p><B> Nome do Responsável FAMILIAR:  </B>{{$t->reponsavelFa}}<p>

   
   
    <p><B> PA:{{$t->pa}} X FC:{{$t->fc}} </b></p>  
    <p><B> FR:{{$t->fr}} | TEMP:{{$t->temp}} </b></p>  
    <p><B> SAT:</B>{{$t->sat}}%<p>
    <p><B> HGT:</B>{{$t->htg}}%<p>
    <p><B> Glasgow:</B>{{$t->glasgow}}<p>
    <p><B> Peso:</B>{{$t->peso}}<p>
    <p><B> Altura :</B>{{$t->altura}}<p>


    <p><B> Alergia: </B>{{$t->alergia}}<p>
    <p><B> Detalhando Alergias: </B>{{$t->detalergias}}<p>
   
   
    <p><B> Comorbidades: </B>{{$t->comorbidades}}<p>
    <p><B> Detalhamento das Comorbidades: </B>{{$t->detcomorbidades}}<p>
    
    <p><B> Medicações de Uso Domiciliar: </B>{{$t->medicacoesdomiciliar}}<p>
    <p><B> Qauis Medicações ? : </B>{{$t->detmedicacoesdomiciliar}}<p>
    

    <p><B> IOT- VM:</B>{{$t->iotvm}}<p>
    <p><B> O2:</B>{{$t->o2}}<p>
   
   
   
    <p><B> A CENTRAL:</B>{{$t->aCentral}}<p>
    <p><B> PAM:</B>{{$t->pam}}<p>


    <p><B>TABAGISTA:</B>{{$t->tabagismo}}<p>


    <p><h3><B> Se Gestante</h3></B><p>
   
  
    <p><B> Gestante: </B>{{$t->gestante}}<p>
    <p><B> Idade Gestacional (IG): </B>{{$t->idadeGestante}}<p>
    <p><B> Gesta : </B>{{$t->gesta}}<p>
    <p><B> P/ : </B>{{$t->p}}<p>
    <p><B> A : </B>{{$t->a}}<p>
    <p><B> Dilatação Uterina / : </B>{{$t->dilatacaouterina}} cm<p>
    <p><B> Dinâmica : </B>{{$t->dinamica}}<p>
   
   
    
     
   
    <p><B>  Bolsa Rota : </B>{{$t->bRota}} <p></B>
    <p><B>  Plano de Interrupção nas 24h: </B>{{$t->plano}} <p></B>
    <p><B>  BCF :</B>{{$t->bcf}} <p></B>
    <p><B>  FR :</B>{{$t->frg1}} <p></B>
    <p><B>  Tg :</B>{{$t->tg1}} <p></B>
    <p><B>  Peso :</B>{{$t->pesog1}} <p></B>
   

    <p><B>  Cipe :</B>{{$t->sipi}} | {{$t->sipi1}} <p></B>
  
 
 
    <p><B>  Outros :</B>{{$t->outros}} <p></B>
    <p><B>  Nome do responsável pelo preenchimento : </B>{{$t->responsavel}} <p></B>
    <p><B>  UNIDADE/HOSPITAL DE DESTINO: </B>{{$t->unidadeHd}} <p></B>
    <p><B>  Municipio  </B>{{$t->municipioHd}} <p></B>
    <p><B>  Estado  </B>{{$t->estadoHd}} <p></B>
    <p><B>  Setor Leito:   </B>{{$t->setorLeitoHd}} <p></B>
    <p><B>  Fone:   </B>{{$t->foneHd}} <p></B>
    <p><B>  Médico que receberá o paciente : </B>{{$t->medicoRecep}} <p></B>
    <p><B>  Evolução : </B>{{$t->evolucao}} <p></B>

    @endforeach


  
 
</body>
</html>  







  
