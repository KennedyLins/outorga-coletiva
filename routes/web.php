<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitanteController;
use App\Http\Controllers\SistemaController;


Route::get('/', [SolicitanteController::class, 'index']);
Route::get('/formulario_anexo_cadastral', [SolicitanteController::class, 'redirect']);
Route::post('/cadastro', [SolicitanteController::class, 'create']);
//Route::get('/concluido', [SolicitanteController::class, 'finish']);
