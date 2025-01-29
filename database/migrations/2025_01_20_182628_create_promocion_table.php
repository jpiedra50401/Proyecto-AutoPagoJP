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
        Schema::create('promocion', function (Blueprint $table) {
            $table->id('Id_Promocion');
            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->string('Telefono', 20);
            $table->string('Correo', 50);
            $table->unsignedBigInteger('Id_ProductoFK');
            $table->foreign('Id_ProductoFK')->references('Id_Producto')->on('producto')->onDelete('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promocion');
    }
};
