<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentesPersonales extends Model
{
    // Relación inversa con Paciente (uno a uno)
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}

