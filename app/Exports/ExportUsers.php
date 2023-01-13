<?php

namespace App\Exports;

use App\Models\Checklist;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUsers implements FromCollection
{

    public function collection()
    {
        return Checklist::all();
    }
}