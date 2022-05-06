<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SistemaHidrico;

class SistemaController extends Controller
{
    public function index()
    {
        return view('form_sistema');
    }
   
    public function store(Request $request)
    {
        $sistema = new SistemaHidrico;
        $sistema->name = $request->name;
        $sistema->observacao = $request->observacao;
        $sistema->save();
        
        return view('form_sistema');
    }

    


}