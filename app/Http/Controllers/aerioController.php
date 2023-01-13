<?php

namespace App\Http\Controllers;

use App\Models\aerio;
use Illuminate\Http\Request;

class aerioController extends Controller
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
            return view('aerio.index');
    }
   

    public function create()
    {
    
    }
   
   public function store(Request $request)
    {
        request()->validate([
 
     
        ]);      
        aerio::create($request->all());
        return view('monitoramento.index');
    }


    
}

