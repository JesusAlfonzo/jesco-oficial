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
        Schema::create('insumo_danados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_lote')->constrained('lotes');
            $table->foreignId('id_examen_laboratorio')->nullable()->constrained('examen_laboratorios');
            $table->foreignId('id_empleado')->constrained('empleados');
            $table->foreignId('id_tipo_dano')->constrained('tipo_danos');
            $table->integer('cantidad');
            $table->text('descripcion');
            $table->dateTime('fecha_registro')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insumos_danados');
    }
};
