<?php
  
namespace App\Http\Controllers;

use App\Models\Aerio;
  
use Illuminate\Http\Request;
use PDF;
  
class aerioControllerPDF extends Controller
{

    public function generatePDF()
    {
        $data = [
            'title' => 'Central de Transferência / Transporte Aereo',
            'date' => date('d/m/Y')
        ];
          
        $pdf = PDF::loadView('aerio.mypdf', $data);
        return $pdf->download('TransporteAereo.pdf');
    }

 
}