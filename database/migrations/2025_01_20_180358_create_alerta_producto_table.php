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
        Schema::create('alerta_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_ProductoFK');
            $table->unsignedBigInteger('Id_AlertaFK');
            $table->foreign('Id_ProductoFK')->references('Id_Producto')->on('producto')->onDelete('no action');
            $table->foreign('Id_AlertaFK')->references('Id_Alerta')->on('alerta')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alerta_producto');
    }
};
