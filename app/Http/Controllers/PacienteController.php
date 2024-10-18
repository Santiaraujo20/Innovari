<?php

namespace App\Http\Controllers;

use App\Models\Paciente; // Asegúrate de que el modelo Paciente esté importado
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PacienteActualizado;

class PacienteController extends Controller
{
    // Muestra la lista de pacientes
    public function index() {
        $pacientes = Paciente::all(); // Obtener todos los pacientes
        return view('pacientes.index', compact('pacientes')); // Retorna la vista con los pacientes
    }

    // Muestra el formulario para crear un nuevo paciente
    public function create() {
        return view('pacientes.create'); // Retorna la vista para crear un paciente
    }

    // Almacena un nuevo paciente
    public function store(Request $request) {
        // Validación de los datos recibidos
        $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|string|max:10',
            'estado_civil' => 'required|string|max:20',
            'lugar_origen' => 'required|string|max:255',
            'nivel_estudio' => 'required|string|max:255',
            'ocupacion' => 'required|string|max:255',
            'anos_puesto' => 'required|integer',
        ]);


        //var_dump($request);
        // Crear el paciente
        $paciente = Paciente::create($request->all());


        // Enviar correo al crear el paciente (opcional)
        //Mail::to('araujoivansan@gmail.com')->send(new PacienteActualizado($paciente->nombre));

        // Redirigir a la lista de pacientes con un mensaje de éxito
        return redirect()->route('paciente.index')->with('success', 'Paciente creado con éxito.');
    }

    // Muestra los detalles de un paciente específico
    public function show(Paciente $paciente) {
        return view('pacientes.show', compact('paciente')); // Retorna la vista con los detalles del paciente
    }

    // Muestra el formulario para editar un paciente existente
    public function edit(Paciente $paciente) {
        return view('pacientes.edit', compact('paciente')); // Retorna la vista para editar el paciente
    }

    // Actualiza un paciente existente
    public function update(Request $request, Paciente $paciente) {
        // Validación de los datos recibidos
        $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|string|max:10',
            'estado_civil' => 'required|string|max:20',
            'lugar_origen' => 'required|string|max:255',
            'nivel_estudio' => 'required|string|max:255',
            'ocupacion' => 'required|string|max:255',
            'anos_puesto' => 'required|integer',
        ]);


        // Actualiza el paciente
        $paciente->update($request->all());

        // Enviar correo al actualizar el paciente (opcional)
        Mail::to('araujoivansan@gmail.com')->send(new PacienteActualizado($paciente->nombre));

        // Redirigir a la lista de pacientes con un mensaje de éxito
        return redirect()->route('paciente.index')->with('success', 'Paciente actualizado con éxito.');
    }

    // Elimina un paciente existente
    public function destroy(Paciente $paciente) {
        $paciente->delete(); // Elimina el paciente

        // Redirigir a la lista de pacientes con un mensaje de éxito
        return redirect()->route('paciente.index')->with('success', 'Paciente eliminado con éxito.');
    }
}
