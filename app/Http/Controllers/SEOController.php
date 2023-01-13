<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR use only single facades
use Artesaos\SEOTools\Facades\SEOTools;



class SEOController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Cerinter SC | Cerinter SC');
        SEOMeta::setDescription('Central de transporte da Secretária de Estado de Saúde do estado de Santa Catarina. Responsável por tranporte de pacientes de uti.');
        SEOMeta::setCanonical('https://cerintersc.com.br');

        OpenGraph::setDescription('Central de transporte da Secretária de Estado de Saúde do estado de Santa Catarina. Responsável por tranporte de pacientes de uti.');
        OpenGraph::setTitle('Cerinter SC | Cerinter SC');
        OpenGraph::setUrl('@cerintersc.com.br');
        OpenGraph::addProperty('cerintersc.com.br', 'cerintersc.com.br');

        TwitterCard::setTitle('Cerinter SC | Cerinter SC');
        TwitterCard::setSite('@cerintersc.com.br');

        JsonLd::setTitle('Cerinter SC | Cerinter SC');
        JsonLd::setDescription('Central de transporte da Secretária de Estado de Saúde do estado de Santa Catarina. Responsável por tranporte de pacientes de uti.');
        JsonLd::addImage('http://cerintersc.com.br/content/home/v2/public/img/logo_menor.png');

        // OR use single only SEOTools

        SEOTools::setTitle('Cerinter SC | Cerinter SC');
        SEOTools::setDescription('Central de transporte da Secretária de Estado de Saúde do estado de Santa Catarina. Responsável por tranporte de pacientes de uti.');
        SEOTools::opengraph()->setUrl('https://cerintersc.com.br/');
        SEOTools::setCanonical('https://cerintersc.com.br');
        SEOTools::opengraph()->addProperty('cerintersc.com.br', 'cerintersc.com.br');
        SEOTools::twitter()->setSite('@cerintersc.com.br');
        SEOTools::jsonLd()->addImage('http://cerintersc.com.br/content/home/v2/public/img/logo_menor.png');
        return view('/');
        
    }  
     
}

