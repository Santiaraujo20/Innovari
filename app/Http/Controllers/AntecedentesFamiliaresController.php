<?php

namespace App\Http\Controllers;

use App\Models\AntecedenteFamiliar; // Asegúrate de que el modelo AntecedenteFamiliar esté importado
use Illuminate\Http\Request;

class AntecedentesFamiliaresController extends Controller
{
    // Almacena antecedentes familiares
    public function store(Request $request, $pacienteId)
    {
        // Validación de los datos recibidos
        $request->validate([
            'hipertension' => 'boolean',
            'diabetes' => 'boolean',
            'cancer' => 'nullable|string|max:255',
            'obesidad' => 'boolean',
            'dislipidemia' => 'boolean',
            'otros' => 'nullable|string|max:255',
        ]);

        // Crear y asociar los antecedentes familiares al paciente
        AntecedenteFamiliar::create([
            'paciente_id' => $pacienteId,  // Asegúrate de que 'paciente_id' sea una columna en la tabla de antecedentes familiares
            'hipertension' => $request->hipertension,
            'diabetes' => $request->diabetes,
            'cancer' => $request->cancer,
            'obesidad' => $request->obesidad,
            'dislipidemia' => $request->dislipidemia,
            'otros' => $request->otros,
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('paciente.index')->with('success', 'Antecedentes familiares creados con éxito.');
    }
}
