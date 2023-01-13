<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrestre extends Model
{

    use HasFactory;
    protected $table="terrestre";
    protected $fillable = [
   
       'sisreg',
       'CNSUS',
       'usuario',
                  
       'nome',
       'sexo',
       'dataNasc',
       'nomeDaMae',
      
      
       'cep',
       'cidade',
       'uf',
       'rua',
       'numero',
       'bairro',
       'complemento',
       
       
      'naturalidade',
      'rg',
      'orgaoExpeditor',
      'ufrg',


       'contatoFamiliar',
       'telefoneContatoFamiliar',




       'unidadeHo',
       'municipioHo',
       'estadoHo',
       'setorLeito',
       'fone',
       'medicoA',
       'dataInternacao',
       'diagnostico',
       'quadroClinico',
       'npc',
       'po',
       'dataPo',
       'tfd',
       'transferenciaFR',
       'autorizacaoFa',
       'reponsavelFa',
       'pa',
       'pa1',
       'fc',
       'fr',
       'temp',
       'sat',
       'htg',
       'glasgow',
       'peso',
       'altura',
       'alergia',
       'detalergias',
       'comorbidades',
       'detcomorbidades',
       'medicacoesdomiciliar',
       'detmedicacoesdomiciliar',
       'iotvm',
       'o2', 
       'aCentral', 
       'pam', 
       'tabagismo',  
       'gestante',
       'idadeGestante',
       'gesta',
       'p',
       'a',
       'dilatacaouterina',
       'dinamica',
       'bRota',     
       'plano',  
       'bcf',
       'frg1',  
       'tg1',  
       'pesog1', 
       'sipi',
       'sipi1',  
       'outros',
       'responsavel',
       'unidadeHd',
       'municipioHd',
       'estadoHd',
       'setorLeitoHd',
       'foneHd',
       'medicoRecep',
       'evolucao',

   ];
}


  
