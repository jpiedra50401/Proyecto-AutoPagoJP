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
        Schema::create('venta_promocion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_PromocionFK');
            $table->unsignedBigInteger('Id_VentaFK');
            $table->unsignedBigInteger('Id_ReporteFK');
            $table->foreign('Id_PromocionFK')->references('Id_Promocion')->on('promocion')->onDelete('no action');
            $table->foreign('Id_VentaFK')->references('Id_Venta')->on('venta')->onDelete('no action');
            $table->foreign('Id_ReporteFK')->references('Id_Reporte')->on('reporte')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_promocion');
    }
};
