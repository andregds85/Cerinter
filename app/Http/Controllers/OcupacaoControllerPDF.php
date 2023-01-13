<?php
  
namespace App\Http\Controllers;

  
use Illuminate\Http\Request;
use PDF;
  
class OcupacaoControllerPDF extends Controller
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

      $data = [
            'title' => 'Checklist Transporte Seguro',
            'date' => date('d/m/Y')
        ];
          
        $pdf = PDF::loadView('checklistadm.leitos');
        $pdf->setPaper('A4', 'landscape'); //Paisagem
        $data1=date('d/m/y');
        /*
        $pdf->set('isRemoteEnabled', true);  */

        return $pdf->download($data1.'leitos.pdf', set_time_limit(300));

    }


}