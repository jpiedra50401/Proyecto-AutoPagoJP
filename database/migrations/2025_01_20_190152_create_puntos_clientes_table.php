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
        Schema::create('puntos_clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_PuntosFK');
            $table->unsignedBigInteger('Id_ClienteFK');
            $table->foreign('Id_PuntosFK')->references('Id_Puntos')->on('puntos')->onDelete('no action');
            $table->foreign('Id_ClienteFK')->references('Id_Cliente')->on('clientes')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puntos_clientes');
    }
};
