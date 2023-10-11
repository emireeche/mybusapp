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
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->unsignedBigInteger('reserva_id');
            $table->string('montoapagar');
            $table->string('metododepago');
            $table->string('fechapago');
            $table->foreign('reserva_id')->references('id')->on('reservaciones')->onDelete('cascade');
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
