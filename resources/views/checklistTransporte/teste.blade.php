@extends('layouts3.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Solicitação de Checklist Transporte Seguro') }}</div>

                <div class="card-body">
                <form action="{{ route('checklist.store') }}" method="POST" id="validate" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
 
                        @csrf


<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;
?>

 

{{ Auth::user()->name}}
<br>
{{ Auth::user()->email}}
<br>



                        </div>
                        </div>
                        </div>
                        </div>
                        </div>





    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dados do Paciente') }}</div>

                <div class="card-body">



                          <!--  nome -->
                          <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" required autocomplete="nome">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                             


                      <!--  dataSolicitacao -->
                       <div class="form-group row">
                            <label for="dataSolicitacao" class="col-md-4 col-form-label text-md-right">{{ __('Data da Solicitacao') }}</label>
                            <div class="col-md-6">
                                <input id="dataSolicitacao" type="date" class="form-control @error('dataSolicitacao') is-invalid @enderror" name="dataSolicitacao" required autocomplete="dataSolicitacao">
                                @error('dataSolicitacao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  cns -->
                       <div class="form-group row">
                            <label for="cns" class="col-md-4 col-form-label text-md-right">{{ __('CNS') }}</label>
                            <div class="col-md-6">
                                <input id="cns" type="text" class="form-control @error('cns') is-invalid @enderror" name="cns"  onkeypress="return onlynumber();" required autocomplete="cns">
                                @error('cns')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      <!--  DN -->
                       <div class="form-group row">
                            <label for="dn" class="col-md-4 col-form-label text-md-right">{{ __('DN') }}</label>
                            <div class="col-md-6">
                                <input id="dn" type="date" class="form-control @error('dn') is-invalid @enderror" name="dn"  required autocomplete="dn">
                                @error('dn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                       <!--  idade -->
                       <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('idade') }}</label>
                            <div class="col-md-6">
                                <input id="idade" type="text" class="form-control @error('idade') is-invalid @enderror" name="idade" onkeypress="return onlynumber();"  required autocomplete="idade">
                                @error('idade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                           
                     <!--  sexo -->
                     <div class="form-group row" required>
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>
                            <div class="col-md-6">
                            <select id="sexo" class="form-control" name="sexo">
                            <option selected></option>
                            <option value="masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            </select>    
                            </div>
                        </div>
                     <br>



                    <!--  cpf -->
                       <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('cpf') }}</label>
                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf"  onkeypress="return onlynumber();" required autocomplete="cpf">
                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      <!--  rg -->
                       <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">{{ __('RG') }}</label>
                            <div class="col-md-6">
                                <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" onkeypress="return onlynumber();" required autocomplete="rg">
                                @error('rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  orgaoEmissor -->
                       <div class="form-group row">
                            <label for="orgaoEmissor" class="col-md-4 col-form-label text-md-right">{{ __('Orgão Emissor') }}</label>
                            <div class="col-md-6">
                                <input id="orgaoEmissor" type="text" class="form-control @error('orgaoEmissor') is-invalid @enderror" name="orgaoEmissor"  required autocomplete="orgaoEmissor">
                                @error('orgaoEmissor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        
                         <!--  VACINA COVID -->
                         <div class="form-group row">
                            <label for="vacina" class="col-md-4 col-form-label text-md-right">{{ __('Vacina Covid 19') }}</label>
                            <div class="col-md-6">
                                <input id="vacina" type="text" class="form-control @error('vacina') is-invalid @enderror" name="vacina"  required autocomplete="vacina">
                                @error('vacina')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


         

                       <!--  estado -->
                       <div class="form-group row" required>
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                            <div class="col-md-6">
                            <select id="estado" class="form-control" name="estado">
                            <option selected></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goías</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraíma</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            </select>    
                            </div>
                        </div>


       <!--  diagnostico -->
       <div class="form-group row">
                            <label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico"  required autocomplete="diagnostico" rows="3"></textarea>
                                @error('diagnostico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>



                       <!--  GESTANTE   -->
                      <div class="form-group row" required>
                       <label for="gestante" class="col-md-4 col-form-label text-md-right">{{ __('Gestante') }}</label>
                            <div class="col-md-6">
                            <select id="gestante" class="form-control" name="gestante">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
                            </div>
                        </div>


                      
                      <!--  recebeGestante -->
                      <div class="form-group row">
                            <label for="recebeGestante" class="col-md-4 col-form-label text-md-right">{{ __('Quem Recebe') }}</label>
                            <div class="col-md-6">
                                <input id="recebeGestante" type="text" class="form-control @error('recebeGestante') is-invalid @enderror" name="recebeGestante"  required autocomplete="recebeGestante">
                                @error('recebeGestante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


                     
                     <!--  Se o Nascimento for no local de Destino  -->
                      <div class="form-group row">
                            <label for="nascDestino" class="col-md-4 col-form-label text-md-right">{{ __('Se o nascimento for no local de destino ?') }}</label>
                            <div class="col-md-6">
                                <input id="nascDestino" type="text" class="form-control @error('nascDestino') is-invalid @enderror" name="nascDestino"  required autocomplete="nascDestino">
                                @error('nascDestino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


                        
                     <!--  hospitalOrigem -->
                       <div class="form-group row">
                            <label for="hospitalOrigem" class="col-md-4 col-form-label text-md-right">{{ __('Hospital de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="hospitalOrigem" type="text" class="form-control @error('hospitalOrigem') is-invalid @enderror" name="hospitalOrigem"  required autocomplete="hospitalOrigem">
                                @error('hospitalOrigem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                     <!--  LeitoOrigem -->
                       <div class="form-group row">
                            <label for="LeitoOrigem" class="col-md-4 col-form-label text-md-right">{{ __('Leito de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="LeitoOrigem" type="text" class="form-control @error('LeitoOrigem') is-invalid @enderror" name="LeitoOrigem"  required autocomplete="LeitoOrigem">
                                @error('LeitoOrigem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      
                      
                        <!--  Setor de Origem -->
                         <div class="form-group row">
                            <label for="setorOrigem" class="col-md-4 col-form-label text-md-right">{{ __('Setor de Origem:') }}</label>
                            <div class="col-md-6">
                                <input id="setorOrigem" type="text" class="form-control @error('setorOrigem') is-invalid @enderror" name="setorOrigem" required autocomplete="setorOrigem">
                                @error('setorOrigem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
   



                       <!--  Médico responsavel  -->
                       <div class="form-group row">
                            <label for="medicoResponsavel" class="col-md-4 col-form-label text-md-right">{{ __('Médico Responsável') }}</label>
                            <div class="col-md-6">
                                <input id="medicoResponsavel" type="text" class="form-control @error('medicoResponsavel') is-invalid @enderror" name="medicoResponsavel" required autocomplete="medicoResponsavel">
                                @error('medicoResponsavel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                     <!--  hospitalDestino -->
                       <div class="form-group row">
                            <label for="hospitalDestino" class="col-md-4 col-form-label text-md-right">{{ __('Hospital de Destino') }}</label>
                            <div class="col-md-6">
                                <input id="hospitalDestino" type="text" class="form-control @error('hospitalDestino') is-invalid @enderror" name="hospitalDestino"  required autocomplete="hospitalDestino">
                                @error('hospitalDestino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                                                
                     <!--  LeitoDestino -->
                       <div class="form-group row">
                            <label for="LeitoDestino" class="col-md-4 col-form-label text-md-right">{{ __('Leito de Destino') }}</label>
                            <div class="col-md-6">
                                <input id="LeitoDestino" type="text" class="form-control @error('LeitoDestino') is-invalid @enderror" name="LeitoDestino"  required autocomplete="LeitoDestino">
                                @error('LeitoDestino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                 
                        
                    <!--  quemRecebe -->
                      <div class="form-group row">
                            <label for="quemRecebe" class="col-md-4 col-form-label text-md-right">{{ __('Quem Recebe') }}</label>
                            <div class="col-md-6">
                                <input id="quemRecebe" type="text" class="form-control @error('quemRecebe') is-invalid @enderror" name="quemRecebe"  required autocomplete="quemRecebe">
                                @error('quemRecebe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>





                    </div>
                        </div>
                        </div>
                        </div>
                        </div>


                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tipos de Precaução:') }}</div>
              
             
                <div class="card-body">



         <!--  padrão -->
         <div class="form-group row" required>
                            <label for="padrao" class="col-md-4 col-form-label text-md-right">{{ __('Padrão') }}</label>
                            <div class="col-md-6">
                            <select id="padrao" class="form-control" name="padrao">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
                            </div>
                        </div>

          
          <!--  contato -->
         <div class="form-group row" required>
                            <label for="contato" class="col-md-4 col-form-label text-md-right">{{ __('Contato') }}</label>
                            <div class="col-md-6">
                            <select id="contato" class="form-control" name="contato">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
                            </div>
                        </div>
    


                <!--  Motivo do Contato -->
       <div class="form-group row">
                            <label for="mcontato" class="col-md-4 col-form-label text-md-right">{{ __('Motivo do Contato ') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('mcontato') is-invalid @enderror" name="mcontato"  required autocomplete="mcontato" rows="3"></textarea>
                                @error('diagnostico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>



         <!--  respiratoria -->
         <div class="form-group row" required>
                            <label for="respiratoria" class="col-md-4 col-form-label text-md-right">{{ __('Respiratoria') }}</label>
                            <div class="col-md-6">
                            <select id="respiratoria" class="form-control" name="respiratoria">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
                            </div>
                        </div>




        <!--  Motivo do Contato -->
       <div class="form-group row">
                            <label for="mrespiratoria" class="col-md-4 col-form-label text-md-right">{{ __('Motivo: Respiratoria') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('mrespiratoria') is-invalid @enderror" name="mrespiratoria"  required autocomplete="mrespitartoria" rows="3"></textarea>
                                @error('mrespiratoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>

            

           <!--  covid -->
         <div class="form-group row" required>
                            <label for="covid" class="col-md-4 col-form-label text-md-right">{{ __('Covid') }}</label>
                            <div class="col-md-6">
                            <select id="covid" class="form-control" name="covid">
                            <option selected></option>
                            <option value="Supeito">Supeito</option>
                            <option value="Confirmado">Confirmado</option>
                            <option value="Não foi Testado">Não foi Testado</option>
                            </select>    
                            </div>
                        </div>

          
          
                  <!--  metodo -->
                   <div class="form-group row" required>
                            <label for="metodo" class="col-md-4 col-form-label text-md-right">{{ __('Método ') }}</label>
                            <div class="col-md-6">
                            <select id="metodo" class="form-control" name="metodo">
                            <option selected></option>
                            <option value="TR">TR</option>
                            <option value="TR">Antigeno</option>
                            <option value="PCR">PCR</option>
                            <option value="Não foi Testado">Não foi Testado</option>

                            </select>    
                            </div>
                        </div>



     <div class="container">
                      <!--  dataSolicitacao -->
                        <div class="form-group row">
                            <label for="data" class="col-md-4 col-form-label text-md-right">{{ __('Data ') }}</label>
                            <div class="col-md-6">
                            <input id="data" type="date" class="form-control @error('data') is-invalid @enderror" name="data" required autocomplete="data">

                                @error('data')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>



                       </div>
                        </div>
                        </div>

<!--  fim -->

  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dispositivos Invasivos:') }}</div>
              
             
                <div class="card-body">




                          <!--  SNG -->
                          <div class="form-group row">
                            <label for="sng" class="col-md-4 col-form-label text-md-right">{{ __('SNG') }}</label>
                            <div class="col-md-6">
                                <input id="sng" type="text" class="form-control @error('sng') is-invalid @enderror" name="sng" required autocomplete="sng">
                                @error('sng')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
              

                          <!--  SVD -->
                          <div class="form-group row">
                            <label for="svd" class="col-md-4 col-form-label text-md-right">{{ __('Svd') }}</label>
                            <div class="col-md-6">
                                <input id="svd" type="text" class="form-control @error('svd') is-invalid @enderror" name="svd" required autocomplete="svd">
                                @error('svd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
              
            
                <!--  Dreno -->
                    <div class="form-group row">
                            <label for="dreno" class="col-md-4 col-form-label text-md-right">{{ __('Dreno') }}</label>
                            <div class="col-md-6">
                                <input id="dreno" type="text" class="form-control @error('dreno') is-invalid @enderror" name="dreno" required autocomplete="dreno">
                                @error('dreno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
       

                <!--  DVE -->
                <div class="form-group row">
                            <label for="dve" class="col-md-4 col-form-label text-md-right">{{ __('DVE') }}</label>
                            <div class="col-md-6">
                                <input id="dve" type="text" class="form-control @error('dve') is-invalid @enderror" name="dve" required autocomplete="dve">
                                @error('dve')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        
             
                <!--  Acesso Venoso Central -->
                <div class="form-group row">
                            <label for="avc" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Venoso Central') }}</label>
                            <div class="col-md-6">
                                <input id="avc" type="text" class="form-control @error('avc') is-invalid @enderror" name="avc" required autocomplete="avc">
                                @error('avc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                
                <!-- Onde ? -->
                <div class="form-group row">
                            <label for="periferico" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Venoso Central Onde ?') }}</label>
                            <div class="col-md-6">
                                <input id="avconde" type="text" class="form-control @error('avconde') is-invalid @enderror" name="avconde" required autocomplete="avconde">
                                @error('avconde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        
                    
                    
                        <!--  Acesso Venoso Periférico -->
                         <div class="form-group row">
                            <label for="periferico" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Venoso Periférico') }}</label>
                            <div class="col-md-6">
                                <input id="periferico" type="text" class="form-control @error('periferico') is-invalid @enderror" name="periferico" required autocomplete="periferico">
                                @error('periferico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                           <!--  outrosdispo -->
                          <div class="form-group row">
                            <label for="outros" class="col-md-4 col-form-label text-md-right">{{ __('Outros') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('outrosdispo') is-invalid @enderror" name="outrosdispo"  required autocomplete="outrosdispo" rows="3"></textarea>
                                @error('outrosdispo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>






        
        
        

                      </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Suporte Hemodinâmico: Drogas em BIC') }}</div>
              
             
                <div class="card-body">


       


                <table class="table">
  <thead>
    <tr>
      <th scope="col">NORADRENALINA</th>
      <th scope="col">VASOPRESINA</th>
      <th scope="col">DOBUTAMINA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">me/h</th>
      <td>me/h</td>
      <td>me/h</td>
    </tr>
  </tbody>
</table>

     
               
       


                        
          

                           <!--  outros -->
                          <div class="form-group row">
                            <label for="outrosSuh" class="col-md-4 col-form-label text-md-right">{{ __('Outros') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('outros') is-invalid @enderror" name="outrosSuh"  required autocomplete="outrosSuh" rows="3"></textarea>
                                @error('outrosSuh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>


                           
                           <!--  Sedação -->
                          <div class="form-group row">
                            <label for="outros" class="col-md-4 col-form-label text-md-right">{{ __('Sedação') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('outros') is-invalid @enderror" name="sedacao"  required autocomplete="sedacao" rows="3"></textarea>
                                @error('sedacao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>










                         </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->



<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Suporte Ventilatorio:') }}</div>
                   <div class="card-body">

                 
                 
                   <!--  Suporte O2 -->
                     <div class="form-group row" required>
                            <label for="covid" class="col-md-4 col-form-label text-md-right">{{ __('suporteO2') }}</label>
                            <div class="col-md-6">
                            <select id="suporteO2" class="form-control" name="suporteO2">
                            <option selected></option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                            </select>    
                            </div>
                        </div>
              
           
                                         
                         <!--  cateter -->
                         <div class="form-group row">
                            <label for="sng" class="col-md-4 col-form-label text-md-right">{{ __('cateter') }}</label>
                            <div class="col-md-6">
                                <input id="sng" type="text" class="form-control @error('xx') is-invalid @enderror" name="cateter" required autocomplete="cateter">
                                @error('cateter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
              
              












                         </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->






<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Informações Complementares:') }}</div>
              
             
                <div class="card-body">




                          <!--  SNG -->
                          <div class="form-group row">
                            <label for="sng" class="col-md-4 col-form-label text-md-right">{{ __('SNG') }}</label>
                            <div class="col-md-6">
                                <input id="sng" type="text" class="form-control @error('xx') is-invalid @enderror" name="xx" required autocomplete="sng">
                                @error('sng')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
              

                     













                         </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->





<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Suporte Ventilatorio:') }}</div>
              
             
                <div class="card-body">




                          <!--  SNG -->
                          <div class="form-group row">
                            <label for="sng" class="col-md-4 col-form-label text-md-right">{{ __('SNG') }}</label>
                            <div class="col-md-6">
                                <input id="sng" type="text" class="form-control @error('xx') is-invalid @enderror" name="xx" required autocomplete="sng">
                                @error('sng')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
              

                     













                         </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->





























                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 



