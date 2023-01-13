<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAerioTable extends Migration
{
   
    public function up()
    {
        Schema::create('aerio', function (Blueprint $table) {
          
            /*Solicitação de Transporte Aerio Médico */
            /*Dados de Identificação do Paciente */

            $table->id();
            $table->string('nomeCompleto',100)->nullable();
            $table->string('dataNascimento',30)->nullable();
            $table->string('endereco',100)->nullable();
            $table->string('telefone',50)->nullable();
            $table->string('altura',10)->nullable();
            $table->string('peso',10)->nullable();
            $table->string('tam',10)->nullable();
            $table->string('tamResponsavel',100)->nullable();
            $table->string('imagem',10)->nullable();
            $table->string('imagemResponsavel',100)->nullable();

         
         
            /* Dados da Origem   */
            /* Unidades de Saúde */
            $table->string('hospital',50)->nullable();
            $table->string('setorLeito',30)->nullable();
            $table->string('medicoCrm',100)->nullable();
            $table->string('telefoneUnidade',50)->nullable();
            $table->string('enderecoUnidade',100)->nullable();


 
            /* Item 61   */
            $table->string('seis1',100)->nullable();
            $table->string('qni61',100)->nullable();
            $table->string('mr61',100)->nullable();


            
            /* Item 62   */
            $table->string('seis2',100)->nullable();
            $table->string('qni62',100)->nullable();
            $table->string('despachante',100)->nullable();


                      
            /* Item 63  */
            $table->string('frotaHospital',100)->nullable();
            $table->string('a63',100)->nullable();
            $table->string('telefone63',100)->nullable();

            
            
            

            /* Item 63  */
            $table->string('mReguladorEstadual',100)->nullable();
            $table->string('sisreg',100)->nullable();
            $table->string('dh',100)->nullable();
            $table->string('bagagem',100)->nullable();

            
        
        
           /* Dados Clinicos do Paciente  */
           $table->text('hdaqt')->nullable();
           $table->text('exameFisico')->nullable();
           $table->text('apef')->nullable();
           $table->text('exameLabor')->nullable();
           $table->text('exameImagem')->nullable();
           $table->text('prescM')->nullable();
           $table->text('eca')->nullable();





                 /* ssvv */
                 $table->string('ssvv',100)->nullable();
                 $table->string('fr',100)->nullable();
                 $table->string('fc',100)->nullable();
                 $table->string('pa',100)->nullable();
                 $table->string('g',100)->nullable();
                 $table->string('temp',100)->nullable();
                 $table->string('hgt',100)->nullable();
                 $table->string('sp02',100)->nullable();
                 $table->string('Modalidade')->nullable();

                 
                 
                 $table->string('arAmbiente',20)->nullable();
                 $table->string('cateterto',100)->nullable();
                 $table->string('mascreservatorio',100)->nullable();
                 $table->string('vni',100)->nullable();
                 $table->string('iot',100)->nullable();
                 $table->string('peep',100)->nullable();
                 $table->string('voic',100)->nullable();
                 $table->string('pinsp',100)->nullable();
                 $table->string('ie',100)->nullable();
                 $table->text('obs5')->nullable();

                 

                 /* Circulatório  */ 
                 $table->string('ecg')->nullable();
                 $table->string('mpc',20)->nullable();
                 $table->text('obsCirculatorio')->nullable();

                 
                 /*Neurológico */
                 $table->string('cc',20)->nullable();
                 $table->text('obscc')->nullable();
                 $table->string('hic',20)->nullable();
                 $table->text('obsHic')->nullable();


                 $table->string('isolamento',100)->nullable();
                 $table->string('respiratorio',100)->nullable();
                 $table->string('agenteEt',100)->nullable();
                 $table->string('antibiograma',100)->nullable();

       



                 $table->string('dieta',100)->nullable();
                 $table->string('acessoEV',100)->nullable();
                 $table->string('sondasDrenos',100)->nullable();
                 $table->string('drogasBic',100)->nullable();
                 $table->string('aerocinetose',100)->nullable();
                 $table->string('alergias3',100)->nullable();
                 $table->string('fobias3',100)->nullable();
                 $table->string('dpisiquiatra',100)->nullable();




                 /* 4 . Unidade de Saúde  */
                 $table->string('hospital4',100)->nullable();
                 $table->string('setorLeito4',100)->nullable();
                 $table->string('medicoResponsavel4',100)->nullable();
                 $table->string('telefone4',100)->nullable();
                 $table->string('endereco4',100)->nullable();
                 $table->string('qni4',100)->nullable();
                 $table->string('mr4',100)->nullable();
                 $table->string('qni42',100)->nullable();
                 $table->string('despachante4',100)->nullable();
                 $table->string('Sea4',100)->nullable();
                 $table->string('telefoneSea4',100)->nullable();


                 /* 4 . Aerodromo de Origem */
                 $table->string('ccfio',100)->nullable();
                 $table->string('cco2',100)->nullable();
                 $table->string('fioMaiorAl',100)->nullable();
                 $table->string('nomePrefixo',100)->nullable();
                 $table->string('tipoPista',100)->nullable();
                 $table->string('Hnoturna',100)->nullable();
                 $table->string('horarioDecolagem',100)->nullable();
                 $table->string('enderecoAo',100)->nullable();
                 $table->string('telefoneAo',100)->nullable();
                 $table->string('distanciaDP',100)->nullable();




                             /* 4 . Aerodromo de Destino */
                             $table->string('nomePrefixod',100)->nullable();
                             $table->string('tipoPistad',100)->nullable();
                             $table->string('Hnoturnad',100)->nullable();
                             $table->string('horarioDecolagemd',100)->nullable();
                             $table->string('enderecoAod',100)->nullable();
                             $table->string('telefoneAod',100)->nullable();
                             $table->string('distanciaDPd',100)->nullable();


            
                             /* 4 . campos finais de texto */
                             $table->text('meteoro')->nullable();
                             $table->text('altOrigem')->nullable();
                             $table->text('altMaxima')->nullable();
                             $table->text('dmissao')->nullable();
                             $table->text('obsu1')->nullable();
                             $table->text('obsu2')->nullable();
                             $table->text('obsu3')->nullable();
                             $table->text('obsu4')->nullable();


                            


            $table->timestamps();  
        });
        
    }

        public function down()
        {
      
            Schema::dropIfExists('aerio');
       
        }
    }


   
    





