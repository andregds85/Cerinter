<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatechecklistTable extends Migration
{
   
    public function up()
    {
        Schema::create('checklist', function (Blueprint $table) {
          
             /*Dados do Paciente */ 
            $table->id();
            $table->text('nome')->nullable();
            $table->string('dataSolicitacao',25)->nullable();
            $table->string('cns',30)->nullable();
            $table->string('dn',30)->nullable();
            $table->string('idade',20)->nullable();
            $table->string('sexo',20)->nullable();
            $table->string('cpf',20)->nullable();
            $table->string('rg',20);
            $table->string('orgaoEmissor',30)->nullable();
            $table->string('estado',30)->nullable();
            $table->text('diagnostico')->nullable();
            $table->string('macroOrigem',30)->nullable();
            $table->string('hospitalOrigem',50)->nullable();
            $table->string('LeitoOrigem',50)->nullable();
            $table->string('macroDestino',30)->nullable();
            $table->string('hospitalDestino',50)->nullable();
            $table->string('LeitoDestino',50)->nullable();
            $table->string('QuemRecebe',50)->nullable();




     
            /*Tipo de precaução */ 
           $table->string('padrao',10)->nullable();
           $table->string('contato',10)->nullable();
           $table->string('respiratoria',10)->nullable();
           $table->string('covid',15)->nullable();
           $table->string('metodo',10)->nullable();
           $table->string('data',15)->nullable();


                     /*Dispositivos invasivos */ 
                     /*fila 1 */ 
           $table->string('sng',30)->nullable();
           $table->string('svd',30)->nullable();
           $table->string('dreno',30)->nullable();
           $table->string('tottqd',30)->nullable();
           $table->string('gtt',30)->nullable();
         
         
           /*Dispositivos invasivos */ 
                     /*fila 2 */ 
                     $table->string('pai',30)->nullable();
                     $table->string('kehr',30)->nullable();
                     $table->string('acessoVenosoCentral',30)->nullable();
                     $table->string('acessoVenosoPeriferico',15)->nullable();
                     $table->string('cateterDialise',10)->nullable(); 



                     /*Dispositivos invasivos */ 
                     /*fila 3 */ 
                     $table->string('dve',30)->nullable();
                     $table->text('outros')->nullable();
            

                     /*suporte hemodinamico */ 
                     $table->text('drogas')->nullable();
           


                        /*suporte ventilatorio */ 
                        $table->string('suporteo2',30)->nullable();
                        $table->string('cateter',30)->nullable();
                        $table->string('mascara',30)->nullable();
                        $table->string('outroSu',30)->nullable();
                        $table->string('vm',30)->nullable();
                        $table->string('fiO2',30)->nullable();
                        $table->string('peep',30)->nullable();
                        $table->string('spO2',30)->nullable();
                        $table->string('prona',30)->nullable();
                        $table->string('risco',30)->nullable();


                         /*informações complementares */ 

                        $table->string('aguda',30)->nullable();
                        $table->string('funcionalidade',30)->nullable();
                        $table->string('pa',30)->nullable();
                        $table->string('fc',30)->nullable();
                        $table->string('spo2c',30)->nullable();
                        $table->string('temp',30)->nullable();
                        $table->string('peso',30)->nullable();
                        $table->string('altura',30)->nullable();
                        $table->text('outrosIC')->nullable();
                        $table->text('comorbidades')->nullable();
                        $table->text('nir')->nullable();



                         /*Regulação Estadual */ 
                        $table->string('usuario',50)->nullable();


                           


            $table->timestamps();  
        });
        
    }

        public function down()
        {
      
            Schema::dropIfExists('checklist');
       
        }
    }


   