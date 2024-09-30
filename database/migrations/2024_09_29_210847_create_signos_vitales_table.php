<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('signos_vitales', function (Blueprint $table) {
        $table->id();
        $table->foreignId('paciente_id')->constrained('pacientes');
        $table->string('tension_arterial'); // TA
        $table->integer('frecuencia_cardiaca'); // FC
        $table->integer('frecuencia_respiratoria'); // FR
        $table->float('temperatura_corporal'); // Tº
        $table->float('saturacion_oxigeno'); // SpO2
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signos_vitales');
    }
};
