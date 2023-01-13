<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
  
    function __construct()
    {
         $this->middleware('permission:solicitante-list|solicitante-create|solicitante-edit|solicitante-delete', ['only' => ['index','show']]);
         $this->middleware('permission:solicitante-create', ['only' => ['create','store']]);
         $this->middleware('permission:solicitante-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:solicitante-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
            return view('solicitante.index');

    }
   
       
    
}

