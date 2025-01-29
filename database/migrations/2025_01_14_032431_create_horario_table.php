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
        Schema::create('horario', function (Blueprint $table) {
            $table->id();
            $table->timestamp('FechaHoraProducto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horario');
    }
};



//             $table->id();
//             $table->timestamp('FechaHoraSistema')->nullable();
//             $table->timestamp('FechaHoraProducto')->nullable();
//             $table->string('empleado', 250);
//             $table->unsignedInteger('idProductoFK'); //FK
//             $table->string('descProducto', 250);
//             $table->unsignedInteger('idLineaFK'); //FK
//             $table->string('descLinea', 250);
//             $table->unsignedInteger('idUMDFK'); //FK
//             $table->string('descUMD', 250);
//             $table->unsignedInteger('idComposicionFK'); //FK
//             $table->string('descComposicion', 250);
//             $table->decimal('factor', 6, 2);
//             $table->tinyInteger('turno');
//             $table->tinyInteger('maquinista');
//             $table->decimal('cantidad', 7, 2);
//             $table->decimal('kilos', 7, 2);
//             $table->string('Causa', 100)->nullable();
//             $table->boolean('tOrden')->default(false);
//             $table->integer('numOrden')->nullable();
//             $table->string('Observaciones', 250)->nullable();
//             $table->boolean('bdEstado')->default(true);

//             $table->timestamps();

//             $table->foreign('idProductoFK')->references('Id')->on('Producto')->onDelete('no action');
//             $table->foreign('idLineaFK')->references('Id')->on('Linea')->onDelete('no action');
//             $table->foreign('idUMDFK')->references('Id')->on('UnidadDeMedida')->onDelete('no action');
//             $table->foreign('idComposicionFK')->references('Id')->on('Composicion')->onDelete('no action');