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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('ruta_id');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->string('preciobase');
            $table->string('cantidadpasajeros');
            $table->string('estadoreserva');
            $table->float('costo_total');
            $table->foreign('cliente_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete ('cascade');                    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
