<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrestreTable extends Migration
{
   
    public function up()
    {
        Schema::create('terrestre', function (Blueprint $table) {
          
            /*p1 */
            $table->id();
            $table->string('solicitacao',100)->nullable();
            $table->string('motivoSolicitacao',200)->nullable();
            $table->string('crih',100)->nullable();
            $table->string('sisreg',50)->nullable();
            $table->string('CNSUS',50)->nullable();
          
        
            /*Dados do Paciente */ 
           $table->string('nome',200)->nullable();
           $table->string('sexo',50)->nullable();
           $table->string('idade',20);
           $table->string('municipioOrimgem',50)->nullable();
           $table->string('estado',50)->nullable();

            
            
           /*Unidade / Hospital de Origem */ 
           $table->string('unidadeHo')->nullable();
           $table->string('municipioHo',100)->nullable();
           $table->string('estadoHo',100)->nullable();
           $table->string('setorLeito',100)->nullable();
           $table->string('fone',50)->nullable();
           $table->string('medicoA')->nullable();
           $table->string('foneMedico',50)->nullable();
           $table->string('dataInternacao')->nullable();
           $table->string('diagnostico')->nullable(); 
           $table->string('quadroClinico')->nullable();   
           $table->string('npc')->nullable(); 
           $table->string('po',100)->nullable(); 
           $table->string('dataPo',100)->nullable(); 
           $table->string('tfd')->nullable();
           $table->string('transferenciaFR')->nullable(); 
           $table->string('autorizacaoFa')->nullable(); 
           $table->string('pa')->nullable();
           $table->string('pa1')->nullable();    
           $table->string('fc')->nullable(); 
           $table->string('fr')->nullable(); 
           $table->string('temp')->nullable();  
           $table->string('sat')->nullable(); 
           $table->string('htg')->nullable();  
           $table->string('glasgow')->nullable();    
           $table->string('insRenal')->nullable();     
           $table->string('diurese')->nullable();  
           $table->string('insCardiaca')->nullable(); 
           $table->string('insCardiaca1')->nullable(); 
           $table->string('dva')->nullable();  
           $table->string('qualDva')->nullable();  
           $table->string('sedacao')->nullable(); 
           $table->string('iotvm')->nullable(); 
           $table->string('o2')->nullable(); 
           $table->string('aCentral')->nullable(); 
           $table->string('has')->nullable(); 
           $table->string('dm')->nullable();  
           $table->string('avc')->nullable();
           $table->string('gestante')->nullable();  
           $table->string('idadeGestante')->nullable(); 
           $table->string('gesta')->nullable(); 
           $table->string('p')->nullable(); 
           $table->string('a')->nullable();  
           $table->string('dilatacaouterina')->nullable();  
           $table->string('dinamica')->nullable();  
           $table->string('pag')->nullable();  
           $table->string('pag1')->nullable();   
           $table->string('fcg')->nullable();
           $table->string('frg')->nullable();  
           $table->string('tg')->nullable();  
           $table->string('hgtg')->nullable();  
           $table->string('bRota')->nullable();     
           $table->string('plano')->nullable();  
           $table->string('bcf')->nullable();
           $table->string('frg1')->nullable();  
           $table->string('tg1')->nullable();  
           $table->string('pesog1')->nullable(); 
           $table->string('sipi',50)->nullable();
		   $table->string('sipi1',100)->nullable();
           $table->text('outros')->nullable();
           $table->text('responsavel')->nullable();
           $table->text('unidadeHd')->nullable();
           $table->string('municipioHd',50)->nullable();
           $table->string('estadoHd',50)->nullable();
           $table->string('setorLeitoHd',100)->nullable();
           $table->string('foneHd',50)->nullable();
           $table->string('medicoRecep',100)->nullable();
           $table->string('vagaZero',50)->nullable();
           $table->string('HospitalRef',100)->nullable();
           $table->string('LeitoExtraTeto',100)->nullable();
           $table->string('LeitoprivadoUd',100)->nullable();
           $table->string('TransferidoUnidadeUd',100)->nullable();
           $table->string('transporteIndicado',100)->nullable();
           $table->string('MedicoreguladorUd',100)->nullable();
         
      
                
      
           /* horario acionamento */
           $table->string('hdc',100)->nullable();
           $table->string('hdcResponsavel',100)->nullable();
           $table->string('hpchegada',100)->nullable();
           $table->string('nrPreenchimeto',100)->nullable();
           $table->text('evolucao')->nullable();
           $table->text('evolucao1')->nullable();
           $table->text('evolucao2')->nullable();
           $table->text('evolucao3')->nullable();
           $table->text('evolucao4')->nullable();
           $table->text('evolucao5')->nullable();



 


           
            $table->timestamps();  
        });
        
    }

        public function down()
        {
      
            Schema::dropIfExists('terrestre');
       
        }
    }


   