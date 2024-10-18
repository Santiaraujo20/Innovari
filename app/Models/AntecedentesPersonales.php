<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentePersonal extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'hta_personal',
        'dbt1_personal',
        'ca_personal',
        'dislipidemia_personal',
        'sobrepeso_obesidad_personal',
        'alergias',
        'embarazo',
        'cirugias_previas',
    ];

    // Relación inversa con Paciente (uno a uno)
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
