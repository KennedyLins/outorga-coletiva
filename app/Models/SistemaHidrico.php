<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaHidrico extends Model
{
    use HasFactory;

    public function solicitante()
    {
        return $this->hasMany(SolicitanteOutorgaColetiva::class);
    }

    
}
