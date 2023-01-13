<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use Illuminate\Http\Request;
use PDF;



class ProdutoController extends Controller
{
  
    function __construct()
    {
         $this->middleware('permission:administrador-list|administrador-create|administrador-edit|administrador-delete', ['only' => ['index','show']]);
         $this->middleware('permission:administrador-create', ['only' => ['create','store']]);
         $this->middleware('permission:administrador-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:administrador-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
               return view('checklistadm.pesquisa');
     }


     public function pesquisa($p_nome){
        $produtos = DB::table('checklist')
                ->where('nome', 'like',  "%" .$p_nome)
                ->get();
        return view('checklistadm.pesquisa');
    }



}


