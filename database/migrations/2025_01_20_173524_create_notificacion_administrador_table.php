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
        Schema::create('notificacion_administrador', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_AdministradorFK');
            $table->unsignedBigInteger('Id_NotificacionFK');
            $table->foreign('Id_AdministradorFK')->references('Id_Administrador')->on('administrador')->onDelete('no action');
            $table->foreign('Id_NotificacionFK')->references('Id_Notificacion')->on('notificacion')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacion_administrador');
    }
};
