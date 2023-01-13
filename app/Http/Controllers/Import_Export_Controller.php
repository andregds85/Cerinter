<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checklist;

use App\Exports\ExportUsers;
use App\Imports\ImportUsers;
use Maatwebsite\Excel\Facades\Excel;

class Import_Export_Controller extends Controller
{
    function __construct()
    {
         $this->middleware('permission:administrador-list|administrador-create|administrador-edit|administrador-delete', ['only' => ['index','store']]);
         $this->middleware('permission:administrador-create', ['only' => ['create','store']]);
         $this->middleware('permission:administrador-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:administrador-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('import');


    }
    public function importExport()
    {
  /*    return view('import'); */
    }
    public function export()
    {
        return Excel::download(new ExportUsers, 'CheckList_Seguro.xlsx');
    }

    public function import()
    {
        Excel::import(new ImportUsers, request()->file('file'));
        return back();
    }
}
