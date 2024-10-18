<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    // Atributos permitidos para asignación masiva
    protected $fillable = [
        'nombre_completo',
        'apellido',
        'edad',
        'fecha_nacimiento',
        'sexo',
        'estado_civil',
        'lugar_origen',
        'nivel_estudio',
        'ocupacion',
        'anos_puesto',
        // Añadir otros campos según sea necesario
    ];

    // Relación uno a muchos con SignoVital
    public function signosVitales()
    {
        return $this->hasMany(SignoVital::class); // Cambiado a SignoVital
    }

    // Relación uno a uno con AntecedentesFamiliares
    public function antecedentesFamiliares()
    {
        return $this->hasOne(AntecedenteFamiliar::class);
    }

    // Relación uno a uno con AntecedentesPersonales
    public function antecedentesPersonales()
    {
        return $this->hasOne(AntecedentePersonal::class);
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
