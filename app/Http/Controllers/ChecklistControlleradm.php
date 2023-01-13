<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use Illuminate\Http\Request;
use PDF;
use DataTables;



class ChecklistControlleradm extends Controller
{
  
    function __construct()
    {
         $this->middleware('permission:administrador-list|administrador-create|administrador-edit|administrador-delete', ['only' => ['index','show']]);
         $this->middleware('permission:administrador-create', ['only' => ['create','store']]);
         $this->middleware('permission:administrador-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:administrador-delete', ['only' => ['destroy']]);
    }
    
    public function index(Request $request)
    {
       return view('checklistadm.index');
    }

  
    public function show($id)
    {
        return view('checklistTransporte.mypdf',['id'=>$id]);
    }




    
    

}

 



