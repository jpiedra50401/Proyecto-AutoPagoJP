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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('Id_Cliente');
            $table->string('Nombre', 50);
            $table->string('Primer_Apellido', 50);
            $table->string('Segundo_Apellido', 50);
            $table->string('Telefono', 20);
            $table->string('Correo', 50);
            $table->unsignedBigInteger('Id_RolFK');
            $table->foreign('Id_RolFK')->references('Id_Rol')->on('roles')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
