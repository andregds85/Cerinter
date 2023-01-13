<?php
  
namespace App\Http\Controllers;

use App\Models\Terrestre;
  
use Illuminate\Http\Request;
use PDF;
  
class TerrestreControllerPDF extends Controller
{


    public function generatePDF()
    {
        $data = [
            'title' => 'Central de Transferência / Transporte Terrestre',
            'date' => date('d/m/Y')
        ];
          
        $pdf = PDF::loadView('terrestre.mypdf', $data);
    
        return $pdf->download('TransporteTerrestre.pdf');
    }

  

}