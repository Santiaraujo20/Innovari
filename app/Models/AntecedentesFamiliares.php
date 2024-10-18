<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedenteFamiliar extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'hipertension',
        'diabetes',
        'cancer',
        'obesidad',
        'dislipidemia',
        'otros',
    ];

    // Relación con el modelo Paciente
    //public function paciente()
    //{
        //return $this->belongsTo(Paciente::class);
    //}
}
