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
        Schema::create('venta_puntos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_PuntosFK');
            $table->unsignedBigInteger('Id_VentaFK');
            $table->foreign('Id_PuntosFK')->references('Id_Puntos')->on('puntos')->onDelete('no action');
            $table->foreign('Id_VentaFK')->references('Id_Venta')->on('venta')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_puntos');
    }
};
