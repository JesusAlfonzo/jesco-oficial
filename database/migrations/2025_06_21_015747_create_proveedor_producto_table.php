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
        Schema::create('proveedor_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_proveedor')->constrained('proveedores');
            $table->foreignId('id_producto')->constrained('productos');
            $table->decimal('precio_habitual', 10, 2);
            $table->integer('tiempo_entrega_dias');
            $table->boolean('es_principal')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor_producto');
    }
};
