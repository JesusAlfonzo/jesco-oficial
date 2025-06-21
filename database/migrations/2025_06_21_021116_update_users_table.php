<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Eliminar columnas no usadas
            $table->dropColumn(['name', 'email', 'email_verified_at']);
            
            // Añadir relaciones
            $table->foreignId('id_empleado')->unique()->constrained('empleados');
            $table->foreignId('id_rol')->constrained('roles');
            $table->string('username')->unique();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Restaurar columnas eliminadas
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            
            // Eliminar relaciones
            $table->dropForeign(['id_empleado']);
            $table->dropForeign(['id_rol']);
            $table->dropColumn(['id_empleado', 'id_rol', 'username']);
        });
    
    }

};
