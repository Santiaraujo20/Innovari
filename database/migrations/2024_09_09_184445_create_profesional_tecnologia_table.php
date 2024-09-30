<?php

use App\Models\Profesional;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profesional_tecnologia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profesionales_id')->constrained();  // Comillas añadidas
            $table->foreignId('tecnologias_id')->constrained();    // Comillas añadidas
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesional_tecnologia');
    }
};
