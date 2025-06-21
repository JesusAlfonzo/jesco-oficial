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
        Schema::create('examen_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_examen')->constrained('examenes');
            $table->foreignId('id_producto')->constrained('productos');
            $table->integer('cantidad_necesaria');
            $table->text('instrucciones_uso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_producto');
    }
};
