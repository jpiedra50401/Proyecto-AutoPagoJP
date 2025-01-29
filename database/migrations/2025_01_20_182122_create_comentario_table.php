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
        Schema::create('comentario', function (Blueprint $table) {
            $table->id('Id_Comentario');
            $table->string('Comentario', 100);
            $table->timestamps();
            $table->unsignedBigInteger('Id_ClienteFK');
            $table->foreign('Id_ClienteFK')->references('Id_Cliente')->on('clientes')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentario');
    }
};
