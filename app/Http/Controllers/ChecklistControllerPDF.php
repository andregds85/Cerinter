<?php
  
namespace App\Http\Controllers;

use App\Models\Checklist;
  
use Illuminate\Http\Request;
use PDF;
  
class ChecklistControllerPDF extends Controller
{

    function __construct()
    {
         $this->middleware('permission:administrador-list|administrador-create|administrador-edit|administrador-delete', ['only' => ['index','show']]);
         $this->middleware('permission:administrador-create', ['only' => ['create','store']]);
         $this->middleware('permission:administrador-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:administrador-delete', ['only' => ['destroy']]);
    }
    

    public function index($id)
      {

      $data = [
            'title' => 'Checklist Transporte Seguro',
            'date' => date('d/m/Y')
        ];
          
        $pdf = PDF::loadView('checklistTransporte.mypdf',['id'=>$id]);

    
        return $pdf->download('ChecklistTransporteSeguro.pdf');
    }


}