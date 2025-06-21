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
        Schema::create('departamento_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_departamento')->constrained('departamentos');
            $table->foreignId('id_producto')->constrained('productos');
            $table->integer('stock_minimo');
            $table->integer('stock_maximo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departamento_producto');
    }
};
