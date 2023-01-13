<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SolicitanteController;
use App\Http\Controllers\TerrestreController;
use App\Http\Controllers\TerrestreControllerPDF;
use App\Http\Controllers\TerrestreControlleradm;
use App\Http\Controllers\MonitoramentoController;
use App\Http\Controllers\aerioController;
use App\Http\Controllers\aerioControllerpdf;
use App\Http\Controllers\AeroControlleradm;
use App\Http\Controllers\apagaController;
use App\Http\Controllers\tempoRealController;
use App\Http\Controllers\soundController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\ChecklistControllerPDF;
use App\Http\Controllers\ChecklistControlleradm;
use App\Http\Controllers\MinhasSolicitacoesController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\BuscaUsuarioController;
use App\Http\Controllers\ChecklistControllerPDFS;
use App\Http\Controllers\TaxaController;
use App\Http\Controllers\CnesController;
use App\Http\Controllers\OcupacaoControllerPDF;



Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('solicitante', SolicitanteController::class);
    Route::resource('terrestre', TerrestreController::class);
    Route::resource('terrestreadm', TerrestreControlleradm::class);
    Route::resource('checklistadm', ChecklistControlleradm::class);

    Route::resource('aeroadm', AeroControlleradm::class);
    Route::resource('sound', soundController::class);
    Route::resource('checklist', ChecklistController::class);
    Route::resource('painel', PainelController::class);
    Route::resource('pesquisar',ProdutoController::class);
    Route::resource('buscaUsuario',BuscaUsuarioController::class);

    Route::resource('sucesso', MonitoramentoController::class);
    Route::resource('taxa', TaxaController::class);
    Route::resource('cnes', CnesController::class);

    Route::resource('aerio', aerioController::class);
    Route::resource('apaga', apagaController::class);
    Route::resource('temporeal', tempoRealController::class);
    Route::resource('sound',soundController::class);
    Route::resource('minhassolicitacoes',MinhasSolicitacoesController::class);
    Route::get('checklistpdf/{id}', [ChecklistControllerPDF::class, 'index']); 
    Route::get('checklistpdfs/{id}', [ChecklistControllerPDFS::class, 'index']); 



    Route::get('ocupacaopdf', [OcupacaoControllerPDF::class, 'index']); 

        
    Route::get('pdf', [TerrestreControllerPDF::class, 'generatePDF']); 
    Route::get('aereoPdf', [aerioControllerPDF::class, 'generatePDF']); 

    
    Route::resource('manual', ManualController::class);
  
    Route::get('import_exportpacie', 'App\Http\Controllers\Import_Export_ControllerPacie@importExport');
    Route::post('importpacie', 'App\Http\Controllers\Import_Export_ControllerPacie@import');
    Route::get('exportpacie', 'App\Http\Controllers\Import_Export_ControllerPacie@export');


    Route::get('import_export', 'App\Http\Controllers\Import_Export_Controller@index');
    Route::post('import', 'App\Http\Controllers\Import_Export_Controller@import');
    Route::get('export', 'App\Http\Controllers\Import_Export_Controller@export');


});




