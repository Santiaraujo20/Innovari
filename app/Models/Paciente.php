<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    // Relación uno a muchos con SignosVitales
    public function signosVitales()
    {
        return $this->hasMany(SignosVitales::class);
    }

    // Relación uno a uno con AntecedentesFamiliares
    public function antecedentesFamiliares()
    {
        return $this->hasOne(AntecedentesFamiliares::class);
    }

    // Relación uno a uno con AntecedentesPersonales
    public function antecedentesPersonales()
    {
        return $this->hasOne(AntecedentesPersonales::class);
    }

    // Relación uno a muchos con Medicacion
    public function medicaciones()
    {
        return $this->hasMany(Medicacion::class);
    }

    // Relación uno a muchos con Intervencion
    public function intervenciones()
    {
        return $this->hasMany(Intervencion::class);
    }
}

