<?php

namespace App\Imports;

use App\Models\Categorias;
use App\Models\Pacientes;
use App\Pacie;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPacie implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pacientes([
                    
            'categorias_id' => $row[0],     
            'solicitacao' => $row[1],
            'cns' => $row[2],
            'nomedousuario' => $row[3],
            'municipio' => $row[4],
            'datasolicitacao' => $row[5],
            'unidadedesejada' => $row[6],
            'codigo'    => $row[7],
            'observacao1' => $row[8],
            'observacao2' => $row[9],
            'observacao3' => $row[10],
            'observacao4' => $row[11],
            'observacao5' => $row[12],
            'statusSolicitacao' => $row[13],
        ]);
    }
}









