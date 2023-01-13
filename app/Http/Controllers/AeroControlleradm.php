<?php

namespace App\Http\Controllers;

use App\Models\aerio;
use Illuminate\Http\Request;
use PDF;


class AeroControlleradm extends Controller
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
            return view('aeroadm.index');
    }
   
}


