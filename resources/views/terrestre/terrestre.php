<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrestre extends Model
{

    use HasFactory;
    protected $table="terrestre";
    protected $fillable = [
        'solicitacao',
        'motivoSolicitacao',
        'crih',
        'sisreg',
        'CNSUS',
        'nome',
        'sexo',
        'idade',
        'municipioOrimgem',
        'estado',
        'unidadeHo',
        'municipioHo',
        'estadoHo',
        'setorLeito',
        'fone',
        'medicoA',
        'foneMedico',
        'dataInternacao',
        'diagnostico',
        'quadroClinico',
        'npc',
        'po',
        'tfd',
        'transferenciaFR',
        'autorizacaoFa',
        'pa',
        'pa1',
        'fc',
        'fr',
        'temp',
        'sat',
        'htg',
        'glasgow',
        'insRenal',
        'diurese',
        'insCardiaca',
        'insCardiaca1',
        'dva',  
        'qualDva',  
        'sedacao', 
        'iotvm',
        'o2', 
        'aCentral', 
        'has', 
        'dm',  
        'avc',
        'gestante',
        'idadeGestante',
        'gesta',
        'p',
        'a',
        'dilatacaouterina',
        'dinamica',
        'pag',  
        'pag1',   
        'fcg',
        'frg',                 
        'tg',
        'hgtg',   
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

   ];
}



