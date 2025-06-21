<?php

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
        Schema::create('examen_laboratorios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_empleado')->constrained('empleados');
            $table->foreignId('id_paciente')->constrained('pacientes');
            $table->foreignId('id_examen')->constrained('examenes');
            $table->dateTime('fecha_examen');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_laboratorios');
    }
};
