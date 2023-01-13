<?php

namespace App\Exports;

use App\Models\Checklist;

use App\pacie;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportPacie implements FromCollection
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Checklist::all();
    }
}
