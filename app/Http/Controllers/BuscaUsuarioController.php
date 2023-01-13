<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDF;



class BuscaUsuarioController extends Controller
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
       return view('users.pesquisa');
    }


     public function pesquisa($p_nome){
        $produtos = DB::table('users')
                ->where('name', 'like',  "%" .$p_nome)
                ->get();
        return view('users.pesquisa');
    }



}


