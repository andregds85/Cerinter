<?php

namespace App\Http\Controllers;

use App\Models\monitoramento;
use Illuminate\Http\Request;

class MonitoramentoController extends Controller
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
       return view('monitoramento.index');
    }
     
}



