<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <title>Hi</title>
</head>
<body>
<img src="img/logo_menor.png" width="100" height="100">
<p>
    <h3 align="center">{{$title}}</h3>
    <h3 align="center">{{$date}}</h3>
  </p>


<?php
use App\Http\Controllers\TerrestreControlleradm;
use App\Models\aerio;

$tabela = aerio::all(); 
?>
   
       @foreach ($tabela as $t)
    
    <p align="center"><b>CheckList de Acionamento Asa Fixa </p></b>
    <p align="center"><B>ID :</B>{{$t->id }}<p>
    <p align="center"><B>Data :</B>{{$t->created_at }}<p>

    <p><h3> 1. Dados de Identificação do Paciente </h3></p>
    <p><B>a. Nome Completo :</B>{{$t->nomeCompleto }}<p>
    <p><B>b. Data do Nascimento :</B>{{$t->dataNascimento }}<p>
    <p><B>c. Endereço :</B>{{$t->endereco }}<p>
    <p><B>d. Telefone :</B>{{$t->telefone }}<p>
    <p><B>e. altura :</B>{{$t->altura  }}<p>
    <p><B>e. peso :</B>{{$t->peso }}<p>
    <p><B>f. Autorização para T.A.M desaconpanhado :</B>{{$t->tam }}<p>
    <p><B>f. Rensponsável:</B>{{$t->tamResponsavel }}<p>
    <p><B>f. Autorização do uso da Imagem :</B>{{$t->imagem }}<p>
    <p><B>f. Responsavel  :</B>{{$t->imagemResponsavel }}<p>
    <p><h3> 2. Dados da Origem </h3></p>
    <p><h3> 2 a).Unidade de Saúde </h3></p>

    <p><B>I. Hospital:</B>{{$t->hospital }}<p>
    <p><B>II. Setor e Leito:</B>{{$t->setorLeito }}<p>
    <p><B>III. Médico e CRM :</B>{{$t->medicoCrm }}<p>
    <p><B>IV. Telefone da unidade:</B>{{$t->telefoneUnidade }}<p>
    <p><B>V. Endereco da Unidade : </B>{{$t->enderecoUnidade }}<p>
    <p><h3> VI - Apoio Solo: Unidade A, B, C ou D  </h3></p>
    <p><B> 1. 192, Se B ou D ( Abrir a Ficha na CR)  :</B>{{$t->seis1 }}<p>
    <p><B> 1. Qni da Ocorrência  :</B>{{$t->qni61 }}<p>
    <p><B> 1. MR :</B>{{$t->mr61 }}<p>




    <p><B> 1. 192, Se B ou D ( Abrir a Ficha na CR)  :</B>{{$t->seis1 }}<p>
    <p><B> 1. Qni da Ocorrência  :</B>{{$t->qni61 }}<p>
    <p><B> 1. MR :</B>{{$t->mr61 }}<p>



    <p><B>2. 193, Se C ( Abrir a Ficha no Cobom)   :</B>{{$t->seis2 }}<p>
    <p><B>2. Qni da Ocorrência  :</B>{{$t->qni62 }}<p>
    <p><B>2. Despachante  :</B>{{$t->despachante }}<p>



    <p><B>3. Responsavel pela Frota do Hospital   :</B>{{$t->seis2 }}<p>
    <p><B>3. SE A  :</B>{{$t->a63 }}<p>
    <p><B>3. telefone  :</B>{{$t->telefone63 }}<p>
    




  



    <p><B>Médico Regulador Estadual  :</B>{{$t->mReguladorEstadual }}<p>
    <p><B>Sis Regui: </B>{{$t->sisreg }}<p>
    <p><B>Data e Hora  :</B>{{$t->dh }}<p>
    <p><B>Bagagem do Paciente max 5kg   :</B>{{$t->bagagem }}<p>

    



    
    <p><B>História da Doença Atual e há quanto Tempo :</B>{{$t->hdaqt }}<p>
    <p><B>Exame Físico: </B>{{$t->exameFisico }}<p>
    <p><B>Antecedentes Pessoais e Familiares  :</B>{{$t->apef }}<p>
    <p><B>Exames Laboratoriais :</B>{{$t->exameLabor }}<p>
    <p><B>Exame de Imagem :</B>{{$t->exameImagem }}<p>
    <p><B>Preescrição Médica :</B>{{$t->prescM }}<p>
    <p><B>Evolução Clinica Atualizda :</B>{{$t->eca }}<p>


            
    <p><B>SSVV :</B>{{$t->ssvv }}<p>
    <p><B>FC</B>{{$t->fc }}<p>
    <p><B>PA  :</B>{{$t->pa }}<p>
    <p><B>G :</B>{{$t->g }}<p>
    <p><B>temp :</B>{{$t->temp }}<p>
    <p><B>Hgt :</B>{{$t->hgt }}<p>
    <p><B>sp02 :</B>{{$t->sp02 }}<p>
    <p><B>Modalidade :</B>{{$t->Modalidade}}<p>

    
    <p><B>AR Ambiente :</B>{{$t->arAmbiente }}<p>
    <p><B>Cateter Tipo Óculos ? :</B>{{$t->cateterto }}<p>
    <p><B>Mascara Reservatório :</B>{{$t->mascreservatorio }}<p>
    <p><B>VNI :</B>{{$t->vni }}<p>
    <p><B>IOT traqueo Fio 2 :</B>{{$t->iot }}<p>
    <p><B>PEEP :</B>{{$t->peep }}<p>
    <p><B>Voic :</B>{{$t->voic }}<p>
    <p><B>Pinsp :</B>{{$t->pinsp }}<p>
    <p><B>IE :</B>{{$t->ie }}<p>
    <p><B>Observação :</B>{{$t->obs5 }}<p>
    <p><B>Circulatório :</B> <p>
    <p><B>ECG :</B>{{$t->ecg }}<p>
    <p><B>MPC :</B>{{$t->mpc }}<p>
    <p><B>Observação :</B>{{$t->obsCirculatorio }}<p>
    <p><B>Crise Convulsiva :</B>{{$t->cc }}<p>
    <p><B>Observação /  Crise Convulsiva :</B>{{$t->obscc }}<p>
    <p><B>HIC :</B>{{$t->hic }}<p>
    <p><B>Observação /  HIC :</B>{{$t->obsHic }}<p>
    <p><B>Isolamento : Contato  HIC :</B>{{$t->isolamento }}<p>
    <p><B>Respiratório :  </B>{{$t->respiratorio }}<p>
    <p><B>Agente Etiológico : </B>{{$t->agenteEt }}<p>
    <p><B>Antibiograma :  </B>{{$t->antibiograma }}<p>
    <p><B>Dieta :  /</B>{{$t->dieta }}<p>
    <p><B>Acesso EV /IO :  </B>{{$t->acessoEV}}<p>
    <p><B>Sondas e Drenos :  </B>{{$t->sondasDrenos}}<p>
    <p><B>Drogas Bic :  </B>{{$t->drogasBic}}<p>
    <p><B>Profilaxia de Aerocinetose :  /</B>{{$t->aerocinetose}}<p>
    <p><B>Alergias :  </B>{{$t->alergias3}}<p>
    <p><B>Fobias :  </B>{{$t->fobias3}}<p>
    <p><B>Doenças Pisiquiatricas :  /</B>{{$t->dpisiquiatra}}<p>
    <p><B>Hospital :  </B>{{$t->hospital4}}<p>
    <p><B>Setor e Leito :  </B>{{$t->setorLeito4}}<p>
    <p><B>Médico Responsavel e CRM :  </B>{{$t->medicoResponsavel4}}<p>
    <p><B>Telefone  :  </B>{{$t->telefone4}}<p>
    <p><B>Endereço  : </B>{{$t->endereco4}}<p>
    <p>Apoio Solo  / Unidade tipo A, B, C, D<p>
    <br>
    <p>192, SE B OU D Abrir a Ficha na CR <p>
    <p><B>QNI: </B>{{$t->qni4}}<p>
    <p><B>MR: </B>{{$t->mr4}}<p>
    <br>
    <p>193, SE B OU D Abrir a Ficha na CR <p>
    <p><B>QNI: </B>{{$t->qni42}}<p>
    <p><B>MR: </B>{{$t->despachante4}}<p>
    <br>
    <p>Responsavel pela  <p>
    <p><B>SE A: </B>{{$t->Sea4}}<p>
    <p><B>Telefone: </B>{{$t->telefoneSea4}}<p>

    <p>Preenchido pela Equipe de Saúde Aeromédica  <p>
    <p><B>Cálculo de Correção da Fio: </B>{{$t->ccfio}}<p>
    <p><B>Calculo de Consumo O2:: </B>{{$t->cco2}}<p>
    <p><B>Fio O2 Maior Altitude:: </B>{{$t->fioMaiorAl}}<p>

    <p>Preenchimento Pelos Comandantes <p>
    <p>AéroDromo de Origem<p>
    

    <p><B>Nome / Prefixo: </B>{{$t->nomePrefixo}}<p>
    <p><B>Tipo de Pista: </B>{{$t->tipoPista}}<p>
    <p><B>Homologado Noturno: </B>{{$t->Hnoturna}}<p>
    <p><B>Horário Limite para Decolagem: </B>{{$t->horarioDecolagem}}<p>
    <p><B>Endereço: </B>{{$t->enderecoAo}}<p>
    <p><B>Telefone: </B>{{$t->telefoneAo}}<p>
    <p><B>Distancia e tempo do destino do Paciente : </B>{{$t->distanciaDP}}<p>
    
    <p>Preenchimento Pelos Comandantes <p>
    <p>AéroDromo de Destino <p>

    <p><B>Nome / Prefixo: </B>{{$t->nomePrefixod}}<p>
    <p><B>Tipo de Pista: </B>{{$t->tipoPistad}}<p>
    <p><B>Homologado Noturno: </B>{{$t->Hnoturnad}}<p>
    <p><B>Horário Limite para Decolagem: </B>{{$t->horarioDecolagemd}}<p>
    <p><B>Endereço: </B>{{$t->enderecoAod}}<p>
    <p><B>Telefone: </B>{{$t->telefoneAod}}<p>
    <p><B>Distancia e tempo do destino do Paciente : </B>{{$t->distanciaDPd}}<p>

    <p>Preenchimento Pelos Comandantes <p>

    <p><B> c:)Meteoro: </B>{{$t->meteoro}}<p>
    <p><B> d:)Altura de Origem: </B>{{$t->altOrigem}}<p>
    <p><B> e:)Altura de Máxima: </B>{{$t->altMaxima}}<p>
    <p><B> Observação 1 : </B>{{$t->obsu1}}<p>
    <p><B> Observação 2 : </B>{{$t->obsu2}}<p>
    <p><B> Observação 3 : </B>{{$t->obsu3}}<p>
    <p><B> Observação 4 : </B>{{$t->obsu4}}<p>

   @endforeach
  
</body>
</html>  






