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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_inventario')->constrained('inventarios');
            $table->foreignId('id_tipo_movimiento')->constrained('tipo_movimientos');
            $table->foreignId('id_usuario')->constrained('users');
            $table->foreignId('id_examen_laboratorio')->nullable()->constrained('examen_laboratorios');
            $table->integer('cantidad');
            $table->dateTime('fecha_movimiento');
            $table->text('motivo')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
