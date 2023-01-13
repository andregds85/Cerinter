<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use Illuminate\Http\Request;

class ChecklistController  extends Controller
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
            return view('checklistTransporte.index');
    }
   
   
    public function store(Request $request)
    {
        request()->validate([
               
        ]);    
        Checklist::create($request->all());
        echo  "<script>
        alert( 'Sucesso, Cadastro efetuado com Sucesso !' );
             </script>";

        return view('monitoramento.index');
  
    }



}


