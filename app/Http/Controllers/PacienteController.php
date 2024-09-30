<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PacienteActualizado;

class PacienteController extends Controller
{
    public function index() {
        Mail::to('araujoivansan@gmail.com')
            ->send(new PacienteActualizado("Fabian"));
    }
    /*Mail::to('araujoivansan@gmail.com')
        -> send(new PacienteActualizado());
    return "Enviado";*/
}
