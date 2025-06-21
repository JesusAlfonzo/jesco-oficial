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
        Schema::create('historico_precios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_producto')->constrained('productos');
            $table->decimal('precio_anterior', 10, 2);
            $table->decimal('precio_nuevo', 10, 2);
            $table->dateTime('fecha_cambio')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historico_precios');
    }
};
