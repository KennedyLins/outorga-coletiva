<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitanteController;
use App\Http\Controllers\SistemaController;


//Solicitante
Route::get('/',                           [SolicitanteController::class, 'index']);
Route::get('/formulario_anexo_cadastral', [SolicitanteController::class, 'form']);
Route::post('/cadastro',                  [SolicitanteController::class, 'create']);

//Sistema
Route::get('/form_sistema', [SistemaController::class, 'index']);
Route::post('/cad_sistema', [SistemaController::class, 'store']);

