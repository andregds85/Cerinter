<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoramentoTable extends Migration
{
   
    public function up()
    {
        Schema::create('monitoramento', function (Blueprint $table) {
          
            $table->id();
            $table->string('solicitacao')->nullable();
            $table->timestamps();  
        });
        
    }

        public function down()
        {
          Schema::dropIfExists('monitoramento');
        }
    }


                        /*
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




                        $table->string('data',30)->nullable();
                        $table->string('regulador',50)->nullable();
                        $table->string('usuario',50)->nullable();

       */