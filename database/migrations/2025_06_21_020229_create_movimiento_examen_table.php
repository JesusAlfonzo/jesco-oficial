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
        Schema::create('movimiento_examens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_examen_laboratorio')->constrained('examen_laboratorios');
            $table->foreignId('id_lote')->constrained('lotes');
            $table->integer('cantidad_utilizada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento_examen');
    }
};
