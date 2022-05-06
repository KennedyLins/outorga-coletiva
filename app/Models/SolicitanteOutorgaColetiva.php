<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitanteOutorgaColetiva extends Model
{
    use HasFactory;


    public function sistema()
    {
        return $this->belongsTo(SistemaHidrico::class);
    }
}


