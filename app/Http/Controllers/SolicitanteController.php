<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitanteOutorgaColetiva;
use App\Models\SistemaHidrico;

class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function form()
    {
        $sistemas = SistemaHidrico::all();
        return view('formulario', compact(['sistemas']));
    }

    

    public function create(Request $request)
    {

        $solicitante = new SolicitanteOutorgaColetiva;
        
        $solicitante->nome              =  $request->nome;
        $solicitante->email             =  $request->email;
        $solicitante->cpf_cnpj          =  $request->cpf_cnpj;
        $solicitante->rg                =  $request->rg;
        $solicitante->montante_jusante  =  $request->montante_jusante;
        $solicitante->local_captacao    =  $request->local_captacao;
        $solicitante->latitude          =  $request->latitude;
        $solicitante->longitude         =  $request->longitude;
        $solicitante->tipo_uso          =  $request->tipo_uso;
        $solicitante->volume_jan        =  $request->volume_jan;
        $solicitante->volume_fev        =  $request->volume_fev;
        $solicitante->volume_mar        =  $request->volume_mar;
        $solicitante->volume_abr        =  $request->volume_abr;
        $solicitante->volume_mai        =  $request->volume_mai;
        $solicitante->volume_jun        =  $request->volume_jun;
        $solicitante->volume_jul        =  $request->volume_jul;
        $solicitante->volume_ago        =  $request->volume_ago;
        $solicitante->volume_set        =  $request->volume_set;
        $solicitante->volume_out        =  $request->volume_out;
        $solicitante->volume_nov        =  $request->volume_nov;
        $solicitante->volume_dez        =  $request->volume_dez;
        $solicitante->observacao        =  $request->observacao;
        $solicitante->sistema_hidricos_id   =  $request->sistema_hidrico;

        $solicitante->save();

        return view('concluido');
    }

}
