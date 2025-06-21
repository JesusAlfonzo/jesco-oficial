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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_proveedor')->constrained('proveedores');
            $table->foreignId('id_usuario')->constrained('users');
            $table->dateTime('fecha_compra');
            $table->decimal('total', 12, 2);
            $table->string('numero_factura');
            $table->string('foto_factura')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
