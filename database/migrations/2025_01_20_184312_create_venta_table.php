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
        Schema::create('venta', function (Blueprint $table) {
            $table->id('Id_Venta');
            $table->decimal('Monto_Total', 7, 2);
            $table->timestamps();
            $table->unsignedBigInteger('Id_PagoFK');
            $table->unsignedBigInteger('Id_ClienteFK');
            $table->foreign('Id_PagoFK')->references('Id_Pago')->on('pago')->onDelete('no action');
            $table->foreign('Id_ClienteFK')->references('Id_Cliente')->on('clientes')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta');
    }
};
