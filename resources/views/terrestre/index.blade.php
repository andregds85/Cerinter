@extends('layouts3.app')
@section('content')


    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Solicitação de Transporte Terrestre') }}</div>

                <div class="card-body">
                <form action="{{ route('terrestre.store') }}" method="POST">
                        @csrf


<?php 
use App\Models\Terrestre;
use App\Http\Controllers\TerrestreController;
?>

   

                    
{{ Auth::user()->name}}





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






                          <!--  sisreg -->
                          <div class="form-group row">
                            <label for="sisreg" class="col-md-4 col-form-label text-md-right">{{ __('Sisreg') }}</label>
                            <div class="col-md-6">
                                <input id="sisreg" type="text" class="form-control @error('sisreg') is-invalid @enderror" name="sisreg" required autocomplete="sisreg">
                                @error('sisreg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                             

                      <!--  CNSUS -->
                       <div class="form-group row">
                            <label for="sisreg" class="col-md-4 col-form-label text-md-right">{{ __('CNSUS') }}</label>
                            <div class="col-md-6">
                                <input id="CNSUS" type="text" class="form-control @error('CNSUS') is-invalid @enderror" name="CNSUS" required autocomplete="CNSUS">
                                @error('CNSUS')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  usuário -->
                       <div class="form-group row">
                            <label for="medicoRegulador" class="col-md-4 col-form-label text-md-right">{{ __('Usuário') }}</label>
                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control @error('medicoRegulador') is-invalid @enderror" name="usuario" value="{{ Auth::user()->email}}" required autocomplete="usuario">
                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


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


                       <!--  sexo -->
                       <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>
                            <div class="col-md-6">
                                <input id="sexo" type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo" required autocomplete="sexo">
                                @error('sexo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  Data de Nascimento -->
                       <div class="form-group row">
                            <label for="dataNasc" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>
                            <div class="col-md-6">
                                <input id="dataNasc" type="date" class="form-control @error('dataNasc') is-invalid @enderror" name="dataNasc" required autocomplete="dataNasc">
                                @error('dataNasc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                      <!--  Nome da Mãe -->
                       <div class="form-group row">
                            <label for="nomeDaMae" class="col-md-4 col-form-label text-md-right">{{ __('Nome da Mãe') }}</label>
                            <div class="col-md-6">
                                <input id="nomeDaMae" type="text" class="form-control @error('dataNasc') is-invalid @enderror" name="nomeDaMae" required autocomplete="nomeDaMae">
                                @error('nomeDaMae')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        
                      <!--  CEP -->
                       <div class="form-group row">
                            <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('CEP') }}</label>
                            <div class="col-md-6">
                                <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" required autocomplete="cep">
                                @error('cep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                       <!--  municipio de origem  -->
                       <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Municipio de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" required autocomplete="cidade">
                                @error('municipioOrimgem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                       <!--  estado   -->
                       <div class="form-group row">
                            <label for="uf" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                            <div class="col-md-6">
                                <input id="uf" type="text" class="form-control @error('uf') is-invalid @enderror" name="uf" required autocomplete="uf">
                                @error('uf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  Rua   -->
                       <div class="form-group row">
                            <label for="rua" class="col-md-4 col-form-label text-md-right">{{ __('Rua') }}</label>
                            <div class="col-md-6">
                                <input id="rua" type="text" class="form-control @error('rua') is-invalid @enderror" name="rua" required autocomplete="rua">
                                @error('rua')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!--  Numero   -->
                       <div class="form-group row">
                            <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Número') }}</label>
                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control @error('Numero') is-invalid @enderror" name="numero" required autocomplete="numero">
                                @error('Numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  bairro   -->
                       <div class="form-group row">
                            <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>
                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" required autocomplete="bairro">
                                @error('bairro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       
                       <!--  Complemento   -->
                       <div class="form-group row">
                            <label for="complemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>
                            <div class="col-md-6">
                                <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" required autocomplete="complemento">
                                @error('complemento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                       <!--  naturalidade   -->
                       <div class="form-group row">
                            <label for="naturalidade" class="col-md-4 col-form-label text-md-right">{{ __('Naturalidade') }}</label>
                            <div class="col-md-6">
                                <input id="naturalidade" type="text" class="form-control @error('naturalidade') is-invalid @enderror" name="naturalidade" required autocomplete="naturalidade">
                                @error('naturalidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                       <!--  rg   -->
                       <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">{{ __('RG') }}</label>
                            <div class="col-md-6">
                                <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" required autocomplete="rg">
                                @error('rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 




                      <!--  orgaoExpeditor   -->
                       <div class="form-group row">
                            <label for="orgaoExpeditor" class="col-md-4 col-form-label text-md-right">{{ __('Orgão Expeditor') }}</label>
                            <div class="col-md-6">
                                <input id="orgaoExpeditor" type="text" class="form-control @error('rg') is-invalid @enderror" name="orgaoExpeditor" required autocomplete="orgaoExpeditor">
                                @error('orgaoExpeditor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 

                  
                        

                       <!--  ufrg   -->
                       <div class="form-group row">
                            <label for="orgaoExpeditor" class="col-md-4 col-form-label text-md-right">{{ __('Estado do RG') }}</label>
                                            <select name="ufrg" class="col-md-4 col-form-label text-md-right" >
                            <option selected>Selecione o Estado:</option>
                            <option value="Acre">Acre</option>
                            <option value="Algaoas">Algaoas</option>
                            <option value="Amapá">Amapá</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Bahia">Bahia</option>
                            <option value="Ceará">Ceará</option>
                            <option value="Espírito Santo">Espírito Santo</option>
                            <option value="Goiás">Goiás</option>
                            <option value="Maranhão">Maranhão</option>
                            <option value="Mato Grosso">Mato Grosso</option>
                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option value="Minas Gerais">Minas Gerais</option>
                            <option value="Paraíba">Paraíba</option>
                            <option value="Paraná">Paraná</option>
                            <option value="Paraná">Pará</option>

                            <option value="Pernambuco">Pernambuco</option>
                            <option value="Piauí">Piauí</option>
                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Rondônia">Rondônia</option>
                            <option value="Roraima">Roraima</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Sergipe">Sergipe</option>
                            <option value="Tocantins">Tocantins</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                         </select>
                       </div> 




                                
                       <!--  Nome Contato Familiar  -->
                       <div class="form-group row">
                            <label for="contatoFamiliar" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Responsável') }}</label>
                            <div class="col-md-6">
                                <input id="contatoFamiliar" type="text" class="form-control @error('contatoFamiliar') is-invalid @enderror" name="contatoFamiliar" required autocomplete="contatoFamiliar">
                                @error('contatoFamiliar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 




                      <!-- Telefone do Contato Familiar  -->
                       <div class="form-group row">
                            <label for="telefoneContatoFamiliar" class="col-md-4 col-form-label text-md-right">{{ __('Telefone do Contato Familiar') }}</label>
                            <div class="col-md-6">
                                <input id="telefoneContatoFamiliar" type="text" class="form-control @error('telefoneContatoFamiliar') is-invalid @enderror" name="telefoneContatoFamiliar" required autocomplete="telefoneContatoFamiliar">
                                @error('telefoneContatoFamiliar')
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
                <div class="card-header">{{ __('Unidade / Hospital de Origem') }}</div>

                <div class="card-body">





             <!--  unidadeHo -->
             <div class="form-group row">
                            <label for="unidadeHo" class="col-md-4 col-form-label text-md-right">{{ __('Unidade / Hospital de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="unidadeHo" type="text" class="form-control @error('unidadeHo') is-invalid @enderror" name="unidadeHo" required autocomplete="unidadeHo">
                                @error('unidadeHo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        


             <!--  MunicipioHo -->
             <div class="form-group row">
                            <label for="municipioHo" class="col-md-4 col-form-label text-md-right">{{ __('Municipio') }}</label>
                            <div class="col-md-6">
                                <input id="unidadeHo" type="text" class="form-control @error('municipioHo') is-invalid @enderror" name="municipioHo" required autocomplete="municipioHo">
                                @error('municipioHo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                   <!--  estadoHo -->
                         <div class="form-group row">
                            <label for="estadoHo" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                            <div class="col-md-6">
                                <input id="estadoHo" type="text" class="form-control @error('estadoHo') is-invalid @enderror" name="estadoHo" required autocomplete="estadoHo">
                                @error('estadoHo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>







           <!--  setorLeito -->
             <div class="form-group row">
                            <label for="setorLeito" class="col-md-4 col-form-label text-md-right">{{ __('Setor / Leito') }}</label>
                            <div class="col-md-6">
                                <input id="unidadeHo" type="text" class="form-control @error('setorLeito') is-invalid @enderror" name="setorLeito" required autocomplete="setorLeito">
                                @error('setorLeito')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                 <!--  fone -->
                 <div class="form-group row">
                            <label for="fone" class="col-md-4 col-form-label text-md-right">{{ __('Fone do Setor / Leito') }}</label>
                            <div class="col-md-6">
                                <input id="fone" type="text" class="form-control @error('fone') is-invalid @enderror" name="fone" required autocomplete="fone">
                                @error('fone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>



                   <!--  Médico Assistente -->
                 <div class="form-group row">
                            <label for="medicoA" class="col-md-4 col-form-label text-md-right">{{ __('Médico Assistente') }}</label>
                            <div class="col-md-6">
                                <input id="medicoA" type="text" class="form-control @error('medicoA') is-invalid @enderror" name="medicoA" required autocomplete="medicoA">
                                @error('medicoA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

   
                 <!--  Data de Internação -->
                 <div class="form-group row">
                            <label for="dataInternacao" class="col-md-4 col-form-label text-md-right">{{ __('Data da Internação') }}</label>
                            <div class="col-md-6">
                                <input id="dataInternacao" type="date" class="form-control @error('dataInternacao') is-invalid @enderror" name="dataInternacao" required autocomplete="dataInternacao">
                                @error('dataInternacao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


            
                 <!--  Diagnostico -->
                 <div class="form-group row">
                            <label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico') }}</label>
                            <div class="col-md-6">
                                <input id="diagnostico" type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico" required autocomplete="diagnostico">
                                @error('diagnostico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                   
                      
                     
                 <!--  quadroClinico -->
                 <div class="form-group row">
                            <label for="quadroClinico" class="col-md-4 col-form-label text-md-right">{{ __('Quadro Clínico') }}</label>
                            <div class="col-md-6">
                                <input id="quadroClinico" type="text" class="form-control @error('quadroClinico') is-invalid @enderror" name="quadroClinico" required autocomplete="quadroClinico">
                                @error('quadroClinico')
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
                <div class="card-header">{{ __('Procedimento Cirúrgico:') }}</div>
                <div class="card-body">
           
                <p>Necessita de Procedimento Cirúrgico ? </p>
                <div>
               
               <input type="checkbox" name="npc" value="SIM"> 
               <label for="horns"> SIM</label>

              </div>



                <div>
                <input type="checkbox" name="npc" value="SIM">  
                <label for="horns"> NÃO</label>

                </div>

                    


                    <!--  po -->
                   <div class="form-group row">
                            <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('PO ?') }}</label>
                            <div class="col-md-6">
                                <input id="po" type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="po" required autocomplete="po">
                                @error('po')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>



                   <!--  dataPo -->
                   <div class="form-group row">
                            <label for="dataPo" class="col-md-4 col-form-label text-md-right">{{ __('Data Po') }}</label>
                            <div class="col-md-6">
                                <input id="dataPo" type="date" class="form-control @error('dataPo') is-invalid @enderror" name="dataPo">
                                @error('dataPo')
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
                <div class="card-header">{{ __('Procedimento Cirúrgico:') }}</div>
                <div class="card-body">

               
                   <!--  Transferências Interestaduais: TFD – AUTORIZADO -->
                <div class="form-group row">
                  <label for="tfd" class="col-md-4 col-form-label text-md-right">{{ __('Transferências Interestaduais: TFD – AUTORIZADO') }}</label>
                       <div class="col-md-6">
                              <input id="tfd" type="text" class="form-control @error('tfd') is-invalid @enderror" name="tfd" required autocomplete="tfd">
                                @error('tfd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>  

          <div class="card-body">
          <p><b>Condições de Transferencia para fora da Região ?  </b> </p>
          <div>
          <input type="checkbox" name="transferenciaFR" value="SIM"> 
          <label for="horns"> SIM</label>
          </div>


           <div>
           <input type="checkbox" name="transferenciaFR" value="NAO">  
           <label for="horns"> NÃO</label>
           </div>

           <br>
           <p><b>AUTORIZAÇÃO FAMILIAR: ? </b>  </p>
           <div>
          
          <input type="checkbox" name="autorizacaoFa" value="SIM"> 
          <label for="horns"> SIM</label>
          </div>


           <div>
           <input type="checkbox" name="autorizacaoFa" value="NAO">  
           <label for="horns"> NÃO</label>
           </div>





                <!--  Nome do Responsavel -->
                <div class="form-group row">
                            <label for="reponsavelFa" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Responsável') }}</label>
                            <div class="col-md-6">
                                <input id="reponsavelFa" type="text" class="form-control @error('reponsavelFa') is-invalid @enderror" name="reponsavelFa" required autocomplete="reponsavelFa">
                                @error('reponsavelFa')
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

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dados Clínicos') }}</div>
                <div class="card-body">




                   <!--  PA  -->
                   <div class="form-group row">
                            <label for="pag" class="col-md-4 col-form-label text-md-right">{{ __('PA') }}</label>
                            <div class="col-md-6">
                                <input id="pa" type="text" class="form-control" name="pa">
                                <label for="X" class="col-md-4 col-form-label text-md-right">{{ __('X') }}</label>
                                <input id="pa1" type="text" class="form-control" name="pa1">
                              </div>
                    </div>















          <!-- FC  -->
          <div class="form-group row">
                       <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('FC ') }}</label>
                            <div class="col-md-6">
                                <input id="fc" type="text" class="form-control @error('fc') is-invalid @enderror" name="fc" required autocomplete="fc">
                                @error('fc')
                                   <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </span>
                                @enderror
                   </div>
           </div>
     





          <!-- PA X FC  -->
          <div class="form-row">
         <div class="col">
         <label for="horns">FR</label>
             <input type="text" name="fr" class="form-control" placeholder="fr">
            </div>
        <div class="col">
        <label for="horns">Temp</label>
      <input type="text" name="temp" class="form-control" placeholder="temp">
    </div>
  </div>
  



         <!-- Sat X HTG  -->
          <div class="form-row">
         <div class="col">
         <label for="horns">SAT %</label>
         <input type="text" name="sat" class="form-control" placeholder="Sat %">
         </div>



        <div class="col">
        <label for="horns">HTG </label>
      <input type="text" name="htg" class="form-control" placeholder="HTG">
    </div>
  </div>



<br>
<br>

         <!--  po -->
          <div class="form-group row">
                       <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('Glasgow ') }}</label>
                            <div class="col-md-6">
                                <input id="glasgow" type="text" class="form-control @error('glasgow') is-invalid @enderror" name="glasgow" required autocomplete="glasgow">
                                @error('glasgow')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


<br>
<br>



            
         <!-- peso X altura  -->
          <div class="form-row">
         <div class="col">
         <label for="horns">Peso</label>
         <input type="text" name="peso" class="form-control" placeholder="Peso">
         </div>



        <div class="col">
        <label for="horns">Altura </label>
      <input type="text" name="altura" class="form-control" placeholder="Altura">
    </div>
  </div>





<br>
<br>




         <div class="card-body">
         <p><b>Alergia  </b> </p>
         <div>
         <input type="checkbox" name="alergia" value="SIM"> 
         <label for="horns"> SIM</label>
         </div>


        <div>
        <input type="checkbox" name="alergia" value="NAO">  
        <label for="horns"> NÃO</label>
        </div>


                   
 

        <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('Quais Alergias ? ') }}</label>

           
                <div class="form-group">
    <textarea class="form-control" id="detalergias" name="detalergias" rows="3"></textarea>
        </div>


           
       


<br>
<br>
         <div class="card-body">
         <p><b>Comorbidades  </b> </p>
         <div>
         <input type="checkbox" name="comorbidades" value="SIM"> 
         <label for="horns"> SIM</label>
         </div>


        <div>
        <input type="checkbox" name="comorbidades" value="NAO">  
        <label for="horns"> NÃO</label>
        </div>

                  
 

        <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('Quais Comorbidades? ') }}</label>
      
        <div class="form-group">
        <textarea class="form-control" id="detcomorbidades" name="detcomorbidades" rows="3"></textarea>
        </div>
     
        </div>






        <br>
<br>




         <div class="card-body">
         <p><b>Medicamentos de Uso Domiciliar ?  </b> </p>
         <div>
         <input type="checkbox" name="medicacoesdomiciliar" value="SIM"> 
         <label for="horns"> SIM</label>
         </div>


        <div>
        <input type="checkbox" name="medicacoesdomiciliar" value="NAO">  
        <label for="horns"> NÃO</label>
        </div>


                   
 

        <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('Quais Medicamentos? ') }}</label>

           
                <div class="form-group">
    <textarea class="form-control" id="detmedicacoesdomiciliar" name="detmedicacoesdomiciliar" rows="3"></textarea>
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
                <div class="card-header">{{ __(' ') }}</div>
                <div class="card-body">

           <br>
           <p><b>IOT-VM </b>  </p>
           <div>
          
          <input type="checkbox" name="iotvm" value="SIM"> 
          <label for="horns"> SIM</label>
          </div>


           <div>
           <input type="checkbox" name="iotvm" value="NAO">  
           <label for="horns"> NÃO</label>
           </div>



   <!--  Transferências Interestaduais: TFD – AUTORIZADO -->
         <div class="form-group row">
                  <label for="o2" class="col-md-4 col-form-label text-md-right">{{ __('02 :') }}</label>
                       <div class="col-md-6">
                              <input id="o2" type="text" class="form-control @error('o2') is-invalid @enderror" name="o2" required autocomplete="o2">
                                @error('02')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
                                <label for="o2" class="col-md-4 col-form-label text-md-right">{{ __('ml/h.') }}</label>
                            </div>
             </div>  





           <br>
           <p><b>A.CENTRAL</b>  </p>
           <div>
          
          <input type="checkbox" name="aCentral" value="SIM"> 
          <label for="horns"> SIM</label>
          </div>


           <div>
           <input type="checkbox" name="aCentral" value="NAO">  
           <label for="horns"> NÃO</label>
           </div>




           <br>
           <p><b>PAM</b>  </p>
           <div>
          
          <input type="checkbox" name="pam" value="SIM"> 
          <label for="horns"> SIM</label>
          </div>


           <div>
           <input type="checkbox" name="pam" value="NAO">  
           <label for="horns"> NÃO</label>
           </div>









           <br>
           <p><b>TABAGISMO</b>  </p>
           <div>
          
          <input type="checkbox" name="tabagismo" value="SIM"> 
          <label for="horns"> SIM</label>
          </div>

           <div>
           <input type="checkbox" name="tabagismo" value="NAO">  
           <label for="horns"> NÃO</label>
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
                <div class="card-header">{{ __('Se Gestante:') }}</div>
                <div class="card-body">
           
                <p>O Paciente é Gestante ?</p>
                <div>
       
               <input type="checkbox" name="gestante" value="SIM"> 
               <label for="horns"> SIM</label>
               </div>

                <div>
                <input type="checkbox" name="gestante" value="SIM">  
                <label for="horns"> NÃO</label>
                </div>

                    



                    <!--  Idade da Gestante -->
                   <div class="form-group row">
                            <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('Idade da Gestante (IG)') }}</label>
                            <div class="col-md-6">
                                <input id="idadeGestante" type="text" class="form-control" name="idadeGestante">
                              </div>
                    </div>

                  
                  
                   <!--   Gesta -->
                   <div class="form-group row">
                            <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('Gesta') }}</label>
                            <div class="col-md-6">
                                <input id="gesta" type="text" class="form-control" name="gesta">
                              </div>
                    </div>


                    <!--   P -->
                   <div class="form-group row">
                            <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('P/') }}</label>
                            <div class="col-md-6">
                                <input id="p" type="text" class="form-control" name="p">
                              </div>
                    </div>



                    <!--   A -->
                   <div class="form-group row">
                            <label for="a" class="col-md-4 col-form-label text-md-right">{{ __('A') }}</label>
                            <div class="col-md-6">
                                <input id="a" type="text" class="form-control" name="a">
                              </div>
                    </div>



                     
                     
                    <!--   Dilatação Uterina  -->
                   <div class="form-group row">
                            <label for="dilatacaouterina" class="col-md-4 col-form-label text-md-right">{{ __('Dilatação Uterina (cm)') }}</label>
                            <div class="col-md-6">
                                <input id="dilatacaouterina" type="text" class="form-control" name="dilatacaouterina">
                              </div>
                    </div>




                   <!--  Dinâmica  -->
                   <div class="form-group row">
                            <label for="dinamica" class="col-md-4 col-form-label text-md-right">{{ __('Dinâmica') }}</label>
                            <div class="col-md-6">
                                <input id="dinamica" type="text" class="form-control" name="dinamica">
                              </div>
                    </div>

                    

            

                            
           <br>
           <p><b>Bolsa Rota</b>  </p>
           <div>
          
          <input type="checkbox" name="bRota" value="SIM"> 
          <label for="horns"> SIM</label>
          </div>


           <div>
           <input type="checkbox" name="bRrota" value="NAO">  
           <label for="horns"> NÃO</label>
           </div>
                            
                     

           <br>
           <p><b>Plano de Interrupção nas 24h</b>  </p>
           <div>
          
          <input type="checkbox" name="plano" value="SIM"> 
          <label for="horns"> SIM</label>
          </div>


           <div>
           <input type="checkbox" name="plano" value="NAO">  
           <label for="horns"> NÃO</label>
           </div>

            
         <!-- PA X FC  -->
         <div class="form-row">
         <div class="col">
         <label for="horns">BCF</label>
             <input type="text" name="bcf" class="form-control">
            </div>
        <div class="col">
        <label for="horns">FR</label>
          <input type="text" name="frg1" class="form-control">
        </div>
        </div>



         <!-- PA X FC  -->
         <div class="form-row">
         <div class="col">
         <label for="horns">T</label>
             <input type="text" name="tg1" class="form-control">
            </div>
        <div class="col">
        <label for="horns">Peso (Cç)</label>
          <input type="text" name="pesog1" class="form-control">
        </div>
        </div>



        <br>
           <p><b>Cipe</b>  </p>
           <div>
          
          <input type="checkbox" name="sipi" value="SIM"> 
          <label for="horns"> SIM</label>
          </div>


           <div>
           <input type="checkbox" name="sipi" value="NAO">  
           <label for="horns"> NÃO</label>
           </div>

                 <!--  tg  -->
                 <div class="form-group row">
                            <label for="sipe1" class="col-md-4 col-form-label text-md-right">{{ __('Cipe') }}</label>
                            <div class="col-md-6">
                                <input id="sipi1" type="text" class="form-control" name="sipi1">
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
                <div class="card-header">{{ __('Outros:') }}</div>
                <div class="card-body">
           
                <div class="form-group">
    <textarea class="form-control" id="outros" name="outros" rows="3"></textarea>
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
                <div class="card-header">{{ __('Nome do Responsável pelo Preenchimento:') }}</div>
                <div class="card-body">
             
                      <!--  responsavel  -->
                      <div class="form-group row">
                            <label for="responsavel" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Responsável') }}</label>
                            <div class="col-md-6">
                                <input id="responsavel" type="text" class="form-control" name="responsavel">
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
                <div class="card-header">{{ __('Unidade / Hospital de Destino') }}</div>
                <div class="card-body">
               
               
               
          <!--  unidade / hospital de destino   -->
          <div class="form-group row">
          <label for="unidadeHd" class="col-md-4 col-form-label text-md-right">{{ __('Unidade / Hospital de Destino') }}</label>
          <div class="col-md-6">
          <input id="tg" type="text" class="form-control" name="unidadeHd">
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
                <div class="card-header">{{ __('Hospital / Unidade de Destino') }}</div>
              
                 <!--  Municipio HD -->
                 <div class="form-group row">
                            <label for="dataPo" class="col-md-4 col-form-label text-md-right">{{ __('Municipio') }}</label>
                            <div class="col-md-6">
                                <input id="dataPo" type="text" class="form-control @error('dataPo') is-invalid @enderror" name="municipioHd">
                                @error('dataPo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>  



                             <!--  Estado HD -->
                 <div class="form-group row">
                            <label for="dataPo" class="col-md-4 col-form-label text-md-right">{{ __('Estado ') }}</label>
                            <div class="col-md-6">
                                <input id="dataPo" type="text" class="form-control @error('estadoHd') is-invalid @enderror" name="estadoHd">
                                @error('estdoHd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>  



                 <!--  setorLeito -->
                 <div class="form-group row">
                            <label for="dataPo" class="col-md-4 col-form-label text-md-right">{{ __('Setor / Leito ') }}</label>
                            <div class="col-md-6">
                                <input id="setorLeito" type="text" class="form-control @error('setorLeito') is-invalid @enderror" name="setorLeitoHd">
                                @error('setorLeito')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>  


                 <!--  Fone do Leito -->
                 <div class="form-group row">
                            <label for="foneHd" class="col-md-4 col-form-label text-md-right">{{ __('Fone :') }}</label>
                            <div class="col-md-6">
                                <input id="foneHd" type="text" class="form-control @error('foneHd') is-invalid @enderror" name="foneHd">
                                @error('foneHd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>     



                 <!--  Médico Recepcionista -->
                 <div class="form-group row">
                            <label for="medicoRecep" class="col-md-4 col-form-label text-md-right">{{ __('Médico que receberá o paciente :') }}</label>
                            <div class="col-md-6">
                                <input id="foneHd" type="text" class="form-control @error('medicoRecep') is-invalid @enderror" name="medicoRecep">
                                @error('medicoRecep')
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
                <div class="card-header">{{ __('evolucao:') }}</div>
                <div class="card-body">
           
                <div class="form-group">
    <textarea class="form-control" id="evolucao" name="evolucao" rows="3"></textarea>
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

 




