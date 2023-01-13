@extends('layouts3.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Solicitação de Transporte Aereo') }}</div>

                <div class="card-body">
                <form action="{{ route('aerio.store') }}" method="POST">
                        @csrf


<?php 
use App\Models\aerio;
use App\Http\Controllers\aerioController;
?>


                        <!-- (a) nomeCompleto -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">a. Nome Completo</label>
                            <div class="col-md-6">
                                <input id="nomeCompleto" type="text" class="form-control @error('nomeCompleto') is-invalid @enderror" name="nomeCompleto" value="{{ old('solicitacao') }}" required autocomplete="nomeCompleto" autofocus>
                                @error('nomeCompleto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <!-- (b) dataNascimento -->
                        <div class="form-group row">
                            <label for="dataNascimento" class="col-md-4 col-form-label text-md-right">{{ __('b. Data de Nascimento') }}</label>
                            <div class="col-md-6">
                                <input id="dataNascimento" type="date" class="form-control @error('dataNascimento') is-invalid @enderror" name="dataNascimento" value="{{ old('dataNascimento') }}" required autocomplete="dataNascimento">
                                @error('dataNascimento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                      <!--  Endereço -->
                       <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('c. Endereço ') }}</label>
                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" required autocomplete="endereco">
                                @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        
                      <!--  telefone -->
                       <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('d. Telefone ') }}</label>
                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" required autocomplete="telefone">
                                @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                      <!--  altura -->
                       <div class="form-group row">
                            <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('e. Atura') }}</label>
                            <div class="col-md-6">
                                <input id="altura" type="text" class="form-control @error('altura') is-invalid @enderror" name="altura" required autocomplete="altura">
                                @error('altura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                             

                      <!--  peso -->
                       <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">{{ __('e. Peso') }}</label>
                            <div class="col-md-6">
                                <input id="peso" type="text" class="form-control @error('peso') is-invalid @enderror" name="peso" required autocomplete="peso">
                                @error('peso')
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
                <div class="card-header">{{ __('') }}</div>
                <div class="card-body">
           
                <p>Autorização para T.A.M Desacompnhado </p>
                <div>
               
               <input type="checkbox" name="tam" value="SIM"> 
               <label for="horns"> SIM</label>

              </div>



                <div>
                <input type="checkbox" name="tam" value="NAO">  
                <label for="horns"> NÃO</label>

                </div>

                    


                    <!--  tamResponsavel -->
                   <div class="form-group row">
                            <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('f. Responsável') }}</label>
                            <div class="col-md-6">
                                <input id="tamResponsavel" type="text" class="form-control @error('tamResponsavel') is-invalid @enderror" name="tamResponsavel" required autocomplete="tamResponsavel">
                                @error('po')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>




           
        <p>Autorização de uso da Imagem  </p>
        <div>
          
        <input type="checkbox" name="imagem" value="SIM"> 
        <label for="horns"> SIM</label>
        </div>



         <div>
         <input type="checkbox" name="imagem" value="NAO">  
         <label for="horns"> NÃO</label>
         </div>

             


              <!--  G. Rensponsável -->
              <div class="form-group row">
                       <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('g. Responsável') }}</label>
                       <div class="col-md-6">
                           <input id="imagemResponsavel" type="text" class="form-control @error('imagemResponsavel') is-invalid @enderror" name="imagemResponsavel" required autocomplete="imagemResponsavel">
                           @error('imagemResponsavel')
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
                <div class="card-header">{{ __('Dados da Origem / Unidade de Saúde') }}</div>

                <div class="card-body">





                       <!--  hospital -->
                       <div class="form-group row">
                            <label for="hospital" class="col-md-4 col-form-label text-md-right">{{ __('I Hospital') }}</label>
                            <div class="col-md-6">
                                <input id="hospital" type="text" class="form-control @error('hospital') is-invalid @enderror" name="hospital">
                                @error('hospital')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  Setor e Leito -->
                       <div class="form-group row">
                            <label for="setor_Leito" class="col-md-4 col-form-label text-md-right">{{ __('II Setor e Leito') }}</label>
                            <div class="col-md-6">
                                <input id="setor_Leito" type="text" class="form-control @error('setorLeito') is-invalid @enderror" name="setorLeito">
                                @error('setorLeito')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  Médico Rensponsável e CRM  -->
                       <div class="form-group row">
                            <label for="medicoCrm" class="col-md-4 col-form-label text-md-right">{{ __('III Médico e CRM ') }}</label>
                            <div class="col-md-6">
                                <input id="medicoCrm" type="text" class="form-control @error('medicoCrm') is-invalid @enderror" name="medicoCrm">
                                @error('medicoCrm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                     <!-- Telefone  -->
                       <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('IV Telefone') }}</label>
                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefoneUnidade">
                                @error('telefoneUnidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                       <!--  Endereço   -->
                       <div class="form-group row">
                            <label for="enderecoUnidade" class="col-md-4 col-form-label text-md-right">{{ __('V Endereço') }}</label>
                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control @error('enderecoUnidade') is-invalid @enderror" name="enderecoUnidade" >
                                @error('enderecoUnidade')
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
                <div class="card-header">{{ __('VI. Apoio Solo: Unidade tipo A, B, C ou D:') }}</div>
                <div class="card-body">
           
                <p>1. 192, Se B ou D ( Abrir a Ficha na CR) </p>
                <div>
            
               <input type="checkbox" name="seis1" value="SIM"> 
               <label for="horns"> SIM</label>
            
              </div>



                <div>
                <input type="checkbox" name="seis1" value="SIM">  
                <label for="horns"> NÃO</label>

                </div>

                    


                    <!--  QNi da Ocorrencia -->
                   <div class="form-group row">
                            <label for="qni61" class="col-md-4 col-form-label text-md-right">{{ __('Qni da Ocorrência ') }}</label>
                            <div class="col-md-6">
                                <input id="qni61" type="text" class="form-control @error('qni61') is-invalid @enderror" name="qni61">
                                @error('qni61')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>



                   <!--  MR61 -->
                   <div class="form-group row">
                            <label for="dataPo" class="col-md-4 col-form-label text-md-right">{{ __('MR') }}</label>
                            <div class="col-md-6">
                                <input id="mr61" type="text" class="form-control @error('mr61') is-invalid @enderror" name="mr61">
                                @error('mr61')
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
                <div class="card-header">{{ __('VI. Apoio Solo: Unidade tipo A, B, C ou D:') }}</div>
                <div class="card-body">
           
                <p>2. 193, Se C ( Abrir a Ficha no Cobom) </p>
                <div>
            
               <input type="checkbox" name="seis2" value="SIM"> 
               <label for="horns"> SIM</label>
            
              </div>

              <div>
              <input type="checkbox" name="seis2" value="SIM">  
              <label for="horns"> NÃO</label>
              </div>

                    


                    <!--  QNi da Ocorrencia -->
                   <div class="form-group row">
                            <label for="qni62" class="col-md-4 col-form-label text-md-right">{{ __('Qni da Ocorrência ') }}</label>
                            <div class="col-md-6">
                                <input id="qni62" type="text" class="form-control @error('qni62') is-invalid @enderror" name="qni62">
                                @error('qni62')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>




                   <!--  Despachante -->
                   <div class="form-group row">
                            <label for="despachante" class="col-md-4 col-form-label text-md-right">{{ __('Despachante') }}</label>
                            <div class="col-md-6">
                                <input id="despachante" type="text" class="form-control @error('despachante') is-invalid @enderror" name="despachante">
                                @error('despachante')
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
                <div class="card-header">{{ __('VI. Apoio Solo: Unidade tipo A, B, C ou D:') }}</div>
                <div class="card-body">
           
                <p>3. Responsavel pela Frota do Hospital  </p>
                <div>
            
               <input type="checkbox" name="frotaHospital" value="SIM"> 
               <label for="horns"> SIM</label>
            
              </div>



                <div>
                <input type="checkbox" name="frotaHospital" value="SIM">  
                <label for="horns"> NÃO</label>

                </div>

                    


                    <!-- a63 -->
                   <div class="form-group row">
                            <label for="a63" class="col-md-4 col-form-label text-md-right">{{ __('Se A ') }}</label>
                            <div class="col-md-6">
                                <input id="a63" type="text" class="form-control @error('a63') is-invalid @enderror" name="a63">
                                @error('a63')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>



                   <!--  telefone63 -->
                   <div class="form-group row">
                            <label for="telefone63" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                            <div class="col-md-6">
                                <input id="telefone63" type="text" class="form-control @error('telefone63') is-invalid @enderror" name="telefone63">
                                @error('mr61')
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
                <div class="card-header">{{ __('Acionamento') }}</div>
                <div class="card-body">
               
               
               
          <!--  Médico Regulador Estadual    -->
          <div class="form-group row">
          <label for="mReguladorEstadual" class="col-md-4 col-form-label text-md-right">{{ __('I. Médico Regulador Estadual') }}</label>
          <div class="col-md-6">
          <input id="mReguladorEstadual" type="text" class="form-control" name="mReguladorEstadual">
          </div>
          </div>
               
               
               
                         
          <!-- SIS REG    -->
          <div class="form-group row">
          <label for="sisreg" class="col-md-4 col-form-label text-md-right">{{ __('II. SISREG') }}</label>
          <div class="col-md-6">
          <input id="sisreg" type="text" class="form-control" name="sisreg">
          </div>
          </div>
               

       
          <!--Data e Hora  -->
          <div class="form-group row">
          <label for="dataHora" class="col-md-4 col-form-label text-md-right">{{ __('III. Data e Hora: ') }}</label>
          <div class="col-md-6">
          <input id="dataHora" type="text" class="form-control" name="dh">
          </div>
          </div>
            

          <!--BAGAGEM DO PACIENTE  -->
          <div class="form-group row">
          <label for="dataHora" class="col-md-4 col-form-label text-md-right">{{ __('IV. BAGAGEM DO PACINETE MAX 5KG: ') }}</label>
          <div class="col-md-6">
          <input id="dataHora" type="text" class="form-control" name="bagagem">
          </div>
          </div>  
           
         
                        </div>
                        </div>
                        </div>



   <!--hdaqt -->
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('História da Doença Atual e Quanto Tempo:') }}</div>
                <div class="card-body">
           
     <div class="form-group">
    <textarea class="form-control" id="outros" name="hdaqt" rows="3"></textarea>
    </div>
    </div>




   <!--exameFisico -->

    </div>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Exame Físico:') }}</div>
                <div class="card-body">
           
    <div class="form-group">
    <textarea class="form-control" id="ex" name="exameFisico" rows="3"></textarea>
    </div>
    </div>



    </div>
    </div>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Antecedentes Pessoais e Familiares:') }}</div>
                <div class="card-body">
           
     <div class="form-group">
    <textarea class="form-control" id="apef" name="apef" rows="3"></textarea>
    </div>
    </div>


    </div>
    </div>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Exames Laboratoriais :') }}</div>
                <div class="card-body">
           
     <div class="form-group">
    <textarea class="form-control" id="outros" name="exameLabor" rows="3"></textarea>
    </div>
    </div>




    </div>
    </div>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Exames de imagem:') }}</div>
                <div class="card-body">
           
     <div class="form-group">
    <textarea class="form-control" id="exameImagem" name="exameImagem" rows="3"></textarea>
    </div>
    </div>



    </div>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Prescrição Médica:') }}</div>
                <div class="card-body">
           
     <div class="form-group">
    <textarea class="form-control" id="prescM" name="prescM" rows="3"></textarea>
    </div>
    </div>



    </div>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Evolução Clinica Atualizada:') }}</div>
                <div class="card-body">
           
     <div class="form-group">
    <textarea class="form-control" id="eca" name="eca" rows="3"></textarea>
    </div>
    </div>



                        </div>
                        </div>
                        </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SSVV') }}</div>
                <div class="card-body">


                  <!--  SSVV  -->
                   <div class="form-group row">
                   <label for="pag" class="col-md-4 col-form-label text-md-right">{{ __('SSVV :') }}</label>
                   <div class="col-md-6">
                   <input id="SSVV" type="text" class="form-control" name="ssvv">
                   </div>
                   </div>

                   <!--  FR  -->
                   <div class="form-group row">
                            <label for="pag" class="col-md-4 col-form-label text-md-right">{{ __('FR :') }}</label>
                            <div class="col-md-6">
                                <input id="fr" type="text" class="form-control" name="fr">
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
     


          <!-- PA   -->
          <div class="form-row">
         <div class="col">
         <label for="horns">PA</label>
             <input type="text" name="pa" class="form-control">
            </div>
        <div class="col">
        <label for="horns">G</label>
      <input type="text" name="g" class="form-control">
    </div>
  </div>
  



         <!-- Sat X HTG  -->
          <div class="form-row">
         <div class="col">
         <label for="horns">temp</label>
         <input type="text" name="temp" class="form-control">
         </div>



        <div class="col">
        <label for="horns">hgt </label>
      <input type="text" name="hgt" class="form-control">
    </div>
  </div>



<br>
<br>

         <!--  sp02 -->
          <div class="form-group row">
                       <label for="sp02" class="col-md-4 col-form-label text-md-right">{{ __('SP02 ') }}</label>
                            <div class="col-md-6">
                                <input id="sp02" type="text" class="form-control @error('sp02') is-invalid @enderror" name="sp02">
                                @error('sp02')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

  
                    
                  <!--  Modalidade  -->
                  <div class="form-group row">
                       <label for="Modalidade" class="col-md-4 col-form-label text-md-right">{{ __('Modalidade: ') }}</label>
                            <div class="col-md-6">
                                <input id="Modalidade" type="text" class="form-control @error('Modalidade') is-invalid @enderror" name="Modalidade">
                                @error('Modalidade')
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





                  
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ventilatório / Modalidade') }}</div>
                <div class="card-body">
           
              <p>Ar ambiente </p>
              <div>
               
              <input type="checkbox" name="arAmbiente" value="SIM"> 
              <label for="horns"> SIM</label>

              </div>



                <div>
                <input type="checkbox" name="arAmbiente" value="NÃO">  
                <label for="horns"> NÃO</label>

                </div>

                    


                    <!--  Cateterto -->
                   <div class="form-group row">
                            <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('Cateter tipo Óculos ?') }}</label>
                            <div class="col-md-6">
                                <input id="po" type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="cateterto">
                                <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('|/min. ') }}</label>
    
                                @error('po')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>





                   <!--  Mascara com Reservatório -->
                   <div class="form-group row">
                            <label for="mascreservatorio" class="col-md-4 col-form-label text-md-right">{{ __('Mascara com Reservatório') }}</label>
                            <div class="col-md-6">
                                <input id="mascreservatorio" type="text" class="form-control @error('mascreservatorio') is-invalid @enderror" name="mascreservatorio">
                                <label for="po" class="col-md-4 col-form-label text-md-right">{{ __('|/min. ') }}</label>

                                @error('mascreservatorio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>    
                    


                    
                   <!--  VNI -->
                   <div class="form-group row">
                            <label for="vni" class="col-md-4 col-form-label text-md-right">{{ __('VNI') }}</label>
                            <div class="col-md-6">
                                <input id="vni" type="text" class="form-control @error('vni') is-invalid @enderror" name="vni">

                                @error('vni')
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
                <div class="card-header">{{ __('5') }}</div>
                <div class="card-body">


          <!-- IOT/traqueo:Fio 2  -->
          <div class="form-group row">
                       <label for="iot" class="col-md-4 col-form-label text-md-right">{{ __('IOT/traqueo:Fio 2 ') }}</label>
                            <div class="col-md-6">
                                <input id="iot" type="text" class="form-control @error('iot') is-invalid @enderror" name="iot">
                                @error('iot')
                                   <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </span>
                                @enderror
                   </div>
           </div>
     


          <!-- PEEP  e Voic -->
          <div class="form-row">
         <div class="col">
         <label for="horns">PEEP</label>
             <input type="text" name="peep" class="form-control">
            </div>
        <div class="col">
        <label for="horns">Voic</label>
      <input type="text" name="voic" class="form-control">
    </div>
  </div>
  



         <!-- Pinsp e  I:E -->
          <div class="form-row">
         <div class="col">
         <label for="horns">Pinsp</label>
         <input type="text" name="pinsp" class="form-control">
         </div>



        <div class="col">
        <label for="horns">I:E </label>
      <input type="text" name="ie" class="form-control">
    </div>
  </div>



<br>
<br>

    <label for="horns">Observação</label>
    <div class="form-group">
    <textarea class="form-control" id="obs" name="obs5" rows="3"></textarea>
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
                <div class="card-header">{{ __('Circulatório') }}</div>
                                


                    <!--  ECG -->
                   <div class="form-group row">
                            <label for="ecg" class="col-md-4 col-form-label text-md-right">{{ __('ECG') }}</label>
                            <div class="col-md-6">
                                <input id="ecg" type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="ecg">
    
                                @error('po')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>




          <div class="card-body">
        
           <p>MPC</p>
           <div>
            
           <input type="checkbox" name="mpc" value="SIM"> 
           <label for="horns"> SIM</label>

           </div>



             <div>
             <input type="checkbox" name="mpc" value="NÃO">  
             <label for="horns"> NÃO</label>

             </div>



    <label for="horns">Observação</label>
    <div class="form-group">
    <textarea class="form-control" id="obs" name="obsCirculatorio" rows="3"></textarea>
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
                <div class="card-header">{{ __('Neurológico') }}</div>
                                
         
         
           <div class="card-body">
           <p>Crise Convulsiva</p>
           <div>
            
           <input type="checkbox" name="cc" value="SIM"> 
           <label for="horns"> SIM</label>

           </div>



             <div>
             <input type="checkbox" name="cc" value="NÃO">  
             <label for="horns"> NÃO</label>

             </div>



    <label for="horns">Observação</label>
    <div class="form-group">
    <textarea class="form-control" id="obs" name="obscc" rows="3"></textarea>
    </div>





    <div class="card-body">
           <p>HIC</p>
           <div>
            
           <input type="checkbox" name="hic" value="SIM"> 
           <label for="horns"> SIM</label>

           </div>



             <div>
             <input type="checkbox" name="hic" value="NÃO">  
             <label for="horns"> NÃO</label>
             </div>



    <label for="horns">Observação</label>
    <div class="form-group">
    <textarea class="form-control" id="obsHic" name="obsHic" rows="3"></textarea>
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
                <div class="card-header">{{ __('/') }}</div>
                                
         
         
           <div class="card-body">
           <p>Isolamento:Contato </p>
           <div>
            
           <input type="checkbox" name="isolamento" value="SIM"> 
           <label for="horns"> SIM</label>

           </div>



             <div>
             <input type="checkbox" name="isolamento" value="NÃO">  
             <label for="horns"> NÃO</label>

             </div>





           <div class="card-body">
           <p>Respiratório</p>
           <div>
            
           <input type="checkbox" name="respiratorio" value="SIM"> 
           <label for="horns"> SIM</label>

           </div>



             <div>
             <input type="checkbox" name="respiratorio" value="NÃO">  
             <label for="horns"> NÃO</label>
             </div>




                    <!--  agente Etiologo -->
                    <div class="form-group row">
                            <label for="agenteEt" class="col-md-4 col-form-label text-md-right">{{ __('Agente Etiólogo') }}</label>
                            <div class="col-md-6">
                                <input id="agenteEt" type="text" class="form-control @error('agenteEt') is-invalid @enderror" name="agenteEt">
    
                                @error('po')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>




                    
                    <!--  Antibiograma -->
                    <div class="form-group row">
                            <label for="agenteEt" class="col-md-4 col-form-label text-md-right">{{ __('Antibiograma') }}</label>
                            <div class="col-md-6">
                                <input id="antibiograma" type="text" class="form-control @error('antibiograma') is-invalid @enderror" name="antibiograma">
    
                                @error('antibiograma')
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




                        </div>
                        </div>
                        </div>
                        </div>
                        </div>



  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                <div class="card-body">
               
               
               
          <!--  Dieta    -->
          <div class="form-group row">
          <label for="dieta" class="col-md-4 col-form-label text-md-right">{{ __('Dieta') }}</label>
          <div class="col-md-6">
          <input id="dieta" type="text" class="form-control" name="dieta">
          </div>
          </div>
               
               
               
                         
          <!-- Acesso EV/ IO    -->
          <div class="form-group row">
          <label for="acessoEV" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Ev / IO') }}</label>
          <div class="col-md-6">
          <input id="acessoEV" type="text" class="form-control" name="acessoEV">
          </div>
          </div>
               

       
          <!--Sondas e Drenos  -->
          <div class="form-group row">
          <label for="sondasDrenos" class="col-md-4 col-form-label text-md-right">{{ __('Sondas e Drenos:') }}</label>
          <div class="col-md-6">
          <input id="sondasDrenos" type="text" class="form-control" name="sondasDrenos">
          </div>
          </div>
            

          <!--Drogas em Bic  -->
          <div class="form-group row">
          <label for="drogasBic" class="col-md-4 col-form-label text-md-right">{{ __('Drogas em Bic: ') }}</label>
          <div class="col-md-6">
          <input id="drogasBic" type="text" class="form-control" name="drogasBic">
          </div>
          </div>  



          <!--Profilaxia da Aerocinetose  -->
          <div class="form-group row">
          <label for="aerocinetose" class="col-md-4 col-form-label text-md-right">{{ __('Profilaxia de AeroCinetose: ') }}</label>
          <div class="col-md-6">
          <input id="aerocinetose" type="text" class="form-control" name="aerocinetose">
          </div>
          </div>  


          <!-- Alergias 3 -->
          <div class="form-group row">
          <label for="alergias3" class="col-md-4 col-form-label text-md-right">{{ __('Alergias: ') }}</label>
          <div class="col-md-6">
          <input id="alergias3" type="text" class="form-control" name="alergias3">
          </div>
          </div> 


          <!-- Fobias 3 -->
          <div class="form-group row">
          <label for="fobias3" class="col-md-4 col-form-label text-md-right">{{ __('Fobias 3: ') }}</label>
          <div class="col-md-6">
          <input id="fobias3" type="text" class="form-control" name="fobias3">
          </div>
          </div> 


          <!-- Doenças pisiquiatricas  -->
          <div class="form-group row">
          <label for="dpisiquiatra" class="col-md-4 col-form-label text-md-right">{{ __('Doenças Pisiquiatricas: ') }}</label>
          <div class="col-md-6">
          <input id="dpisiquiatra" type="text" class="form-control" name="dpisiquiatra">
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
                <div class="card-header">{{ __('4. Unidade de Destino / Unidade de Saúde ') }}</div>
                <div class="card-body">
               
               
               
          <!--  Hopital4    -->
          <div class="form-group row">
          <label for="hospital4" class="col-md-4 col-form-label text-md-right">{{ __('Hospital') }}</label>
          <div class="col-md-6">
          <input id="hospital4" type="text" class="form-control" name="hospital4">
          </div>
          </div>
               
               
               
                         
          <!-- Setor e Leito 4     -->
          <div class="form-group row">
          <label for="acessoEV" class="col-md-4 col-form-label text-md-right">{{ __('Setor e Leito ') }}</label>
          <div class="col-md-6">
          <input id="setorLeito4" type="text" class="form-control" name="setorLeito4">
          </div>
          </div>
               

       
          <!--Médico Responsavel e CRM 4  -->
          <div class="form-group row">
          <label for="medicoResponsavel4" class="col-md-4 col-form-label text-md-right">{{ __('Médico Responsável e CRM :') }}</label>
          <div class="col-md-6">
          <input id="medicoResponsavel4" type="text" class="form-control" name="medicoResponsavel4">
          </div>
          </div>
            

          <!--Telefone4 ()  -->
          <div class="form-group row">
          <label for="telefone4" class="col-md-4 col-form-label text-md-right">{{ __('Telefone : ') }}</label>
          <div class="col-md-6">
          <input id="telefone4" type="text" class="form-control" name="telefone4">
          </div>
          </div>  



          <!-- endereco4  -->
          <div class="form-group row">
          <label for="endereco4" class="col-md-4 col-form-label text-md-right">{{ __('Endereço: ') }}</label>
          <div class="col-md-6">
          <input id="endereco4" type="text" class="form-control" name="endereco4">
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
                <div class="card-header">{{ __('Apoio tipo A, B, C ou D') }}</div>
                                
         
         
           <div class="card-body">
           <p>1. 192, Se B ou D (Abrir a ficha CR) </p>
           <div>
            

                    <!--  QNI da Ocorrencia  -->
                    <div class="form-group row">
                            <label for="qni4" class="col-md-4 col-form-label text-md-right">{{ __('QNI da Ocorrência :') }}</label>
                            <div class="col-md-6">
                                <input id="qni4" type="text" class="form-control @error('qni4') is-invalid @enderror" name="qni4">
    
                                @error('qni4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                            <!--  mr4 -->
                            <div class="form-group row">
                            <label for="mr4" class="col-md-4 col-form-label text-md-right">{{ __('MR') }}</label>
                            <div class="col-md-6">
                                <input id="mr4" type="text" class="form-control @error('mr4') is-invalid @enderror" name="mr4">
    
                                @error('mr4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


          <div class="card-body">
           <p>2. 193, Se C (Abrir a ficha no Cobom) </p>
           <div>

                          <!--  QNI da Ocorrencia  4 2 -->
                           <div class="form-group row">
                            <label for="qni42" class="col-md-4 col-form-label text-md-right">{{ __('QNI da Ocorrência :') }}</label>
                            <div class="col-md-6">
                                <input id="qni42" type="text" class="form-control @error('qni42') is-invalid @enderror" name="qni42">
    
                                @error('qni42')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           </div>


                            <!--  Despachante 4  -->
                            <div class="form-group row">
                            <label for="despachante4" class="col-md-4 col-form-label text-md-right">{{ __('Despachante') }}</label>
                            <div class="col-md-6">
                                <input id="despachante4" type="text" class="form-control @error('despachante4') is-invalid @enderror" name="despachante4">
    
                                @error('despachante4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>



                            
           <div class="card-body">
           <p>3. Responsavel pela Frota do Hospital </p>
           <div>

                            <!--  Sea4 -->
                            <div class="form-group row">
                            <label for="Sea4" class="col-md-4 col-form-label text-md-right">{{ __('SE A:') }}</label>
                            <div class="col-md-6">
                                <input id="Sea4" type="text" class="form-control @error('Sea4') is-invalid @enderror" name="Sea4">
    
                                @error('Sea4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                        <!--  telefoneSea4 -->
                           <div class="form-group row">
                            <label for="telefoneSea4" class="col-md-4 col-form-label text-md-right">{{ __('Telefone:') }}</label>
                            <div class="col-md-6">
                                <input id="telefoneSea4" type="text" class="form-control @error('Sea4') is-invalid @enderror" name="telefoneSea4">
    
                                @error('telefoneSea4')
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


            















         
         



                        </div>
                        </div>
                        </div>
                        </div>






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Preenchimento de Equipe de Saúde Aeromédica') }}</div>
                                
         
                 <!--  Cálculo de Correção da Fio -->
                 <div class="form-group row">
                            <label for="ccfio" class="col-md-4 col-form-label text-md-right">{{ __('Cálculo de Correção da Fio:') }}</label>
                            <div class="col-md-6">
                                <input id="ccfio" type="text" class="form-control @error('ccfio') is-invalid @enderror" name="ccfio">
    
                                @error('ccfio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>



                 <!--  Cálculo de Consumo O 2 -->
                 <div class="form-group row">
                            <label for="cco2" class="col-md-4 col-form-label text-md-right">{{ __('Cálculo de Consumo O2 :') }}</label>
                            <div class="col-md-6">
                                <input id="cco2" type="text" class="form-control @error('cco2') is-invalid @enderror" name="cco2">
    
                                @error('cco2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                <!--  Fio 2 Maior Altitude  -->
                 <div class="form-group row">
                            <label for="fioMaiorAl" class="col-md-4 col-form-label text-md-right">{{ __('Fio 2 Maior Altitude :') }}</label>
                            <div class="col-md-6">
                                <input id="fioMaiorAl" type="text" class="form-control @error('fioMaiorAl') is-invalid @enderror" name="fioMaiorAl">
    
                                @error('fioMaiorAl')
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











                        </div>
                        </div>
                        </div>
                        </div>






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Preenchimento pelos Comandantes / Aerodromo de Origem') }}</div>
                                
         
                 <!--  Nome / Prefixo  -->
                 <div class="form-group row">
                            <label for="nomePrefixo" class="col-md-4 col-form-label text-md-right">{{ __('Nome/Prefixo:') }}</label>
                            <div class="col-md-6">
                                <input id="nomePrefixo" type="text" class="form-control @error('nomePrefixo') is-invalid @enderror" name="nomePrefixo">
    
                                @error('nomePrefixo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>





                 <!--  Tipo de Pista -->
                 <div class="form-group row">
                            <label for="tipoPista" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Pista:') }}</label>
                            <div class="col-md-6">
                                <input id="tipoPista" type="text" class="form-control @error('tipoPista') is-invalid @enderror" name="tipoPista">
    
                                @error('tipoPista')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


     
                        

           <div class="card-body">
           <p>Homologação Noturna  </p>
           <div>
            
           <input type="checkbox" name="Hnoturna" value="SIM"> 
           <label for="horns"> SIM</label>

           </div>



             <div>
             <input type="checkbox" name="Hnoturna" value="NÃO">  
             <label for="horns"> NÃO</label>
             </div>



                <!--  horarioDecolagem -->
                    <div class="form-group row">
                            <label for="horarioDecolagem" class="col-md-4 col-form-label text-md-right">{{ __('Horário Limite para Decolagem:') }}</label>
                            <div class="col-md-6">
                                <input id="horarioDecolagem" type="text" class="form-control @error('horarioDecolagem') is-invalid @enderror" name="horarioDecolagem">
    
                                @error('horarioDecolagem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    


                    
                <!--  enderecoAo -->
                <div class="form-group row">
                            <label for="enderecoAo" class="col-md-4 col-form-label text-md-right">{{ __('Endereço :') }}</label>
                            <div class="col-md-6">
                                <input id="enderecoAo" type="text" class="form-control @error('enderecoAo') is-invalid @enderror" name="enderecoAo">
    
                                @error('enderecoAo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                                        
                <!--  telefoneAo -->
                <div class="form-group row">
                            <label for="telefoneAo" class="col-md-4 col-form-label text-md-right">{{ __('Telefone  :') }}</label>
                            <div class="col-md-6">
                                <input id="telefoneAo" type="text" class="form-control @error('enderecoAo') is-invalid @enderror" name="telefoneAo">
    
                                @error('telefoneAo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                <!-- distanciaDP -->
                <div class="form-group row">
                            <label for="distanciaDP" class="col-md-4 col-form-label text-md-right">{{ __('Distancia e Tempo do Destino do Paciente  :') }}</label>
                            <div class="col-md-6">
                                <input id="distanciaDP" type="text" class="form-control @error('distanciaDP') is-invalid @enderror" name="distanciaDP">
    
                                @error('distanciaDP')
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
                <div class="card-header">{{ __('Preenchimento pelos Comandantes / Aerodromo de Destino') }}</div>
                                
         
                 <!--  Nome / Prefixo Destino  -->
                 <div class="form-group row">
                            <label for="nomePrefixo" class="col-md-4 col-form-label text-md-right">{{ __('Nome/Prefixo:') }}</label>
                            <div class="col-md-6">
                                <input id="nomePrefixod" type="text" class="form-control @error('nomePrefixod') is-invalid @enderror" name="nomePrefixod">
    
                                @error('nomePrefixod')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>





                 <!--  Tipo de Pista destino -->
                 <div class="form-group row">
                            <label for="tipoPistad" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Pista:') }}</label>
                            <div class="col-md-6">
                                <input id="tipoPistad" type="text" class="form-control @error('tipoPistad') is-invalid @enderror" name="tipoPistad">
    
                                @error('tipoPistad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


     
                        

           <div class="card-body">
           <p>Homologação Noturna  </p>
           <div>
            
           <input type="checkbox" name="Hnoturnad" value="SIM"> 
           <label for="horns"> SIM</label>

           </div>



             <div>
             <input type="checkbox" name="Hnoturnad" value="NÃO">  
             <label for="horns"> NÃO</label>
             </div>



                <!--  horarioDecolagem destino-->
                    <div class="form-group row">
                            <label for="horarioDecolagemd" class="col-md-4 col-form-label text-md-right">{{ __('Horário Limite para Decolagem:') }}</label>
                            <div class="col-md-6">
                                <input id="horarioDecolagemd" type="text" class="form-control @error('horarioDecolagemd') is-invalid @enderror" name="horarioDecolagemd">
    
                                @error('horarioDecolagemd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    


                    
                <!--  enderecoAo destino -->
                <div class="form-group row">
                            <label for="enderecoAod" class="col-md-4 col-form-label text-md-right">{{ __('Endereço :') }}</label>
                            <div class="col-md-6">
                                <input id="enderecoAod" type="text" class="form-control @error('enderecoAod') is-invalid @enderror" name="enderecoAod">
    
                                @error('enderecoAo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                                        
                <!--  telefoneAo destino -->
                <div class="form-group row">
                            <label for="telefoneAod" class="col-md-4 col-form-label text-md-right">{{ __('Telefone  :') }}</label>
                            <div class="col-md-6">
                                <input id="telefoneAod" type="text" class="form-control @error('telefoneAod') is-invalid @enderror" name="telefoneAod">
    
                                @error('telefoneAo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                <!-- distanciaDP destino -->
                <div class="form-group row">
                            <label for="distanciaDPd" class="col-md-4 col-form-label text-md-right">{{ __('Distancia e Tempo do Destino do Paciente  :') }}</label>
                            <div class="col-md-6">
                                <input id="distanciaDPd" type="text" class="form-control @error('distanciaDPd') is-invalid @enderror" name="distanciaDPd">
    
                                @error('distanciaDP')
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
                <div class="card-header">{{ __('C / D / E / F') }}</div>
                <div class="card-body">


    <label for="horns">Meteorologia</label>
    <div class="form-group">
    <textarea class="form-control" id="obs" name="meteoro" rows="3"></textarea>
    </div>
  

    <label for="horns">Altitude da Origem</label>
    <div class="form-group">
    <textarea class="form-control" id="altOrigem" name="altOrigem" rows="3"></textarea>
    </div>

    <label for="horns">Altitude da Máxima</label>
    <div class="form-group">
    <textarea class="form-control" id="altMaxima" name="altMaxima" rows="3"></textarea>
    </div>

    <label for="horns">Duração da Missão</label>
    <div class="form-group">
    <textarea class="form-control" id="dmissao" name="dmissao" rows="3"></textarea>
    </div>

                          </div>
                         </div>
                        </div>
                        </div>


               

          

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Obserções') }}</div>
                <div class="card-body">


    <label for="horns">obs1</label>
    <div class="form-group">
    <textarea class="form-control" id="obsu1" name="obsu1" rows="3"></textarea>
    </div>
  

    <label for="horns">obs2</label>
    <div class="form-group">
    <textarea class="form-control" id="obsu2" name="obsu2" rows="3"></textarea>
    </div>

    <label for="horns">obs3</label>
    <div class="form-group">
    <textarea class="form-control" id="obsu3" name="obsu3" rows="3"></textarea>
    </div>

    <label for="horns">obs4</label>
    <div class="form-group">
    <textarea class="form-control" id="obsu4" name="obsu4" rows="3"></textarea>
    </div>

                          </div>
                         </div>
                        </div>
                        </div>
                        </div>





























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








































