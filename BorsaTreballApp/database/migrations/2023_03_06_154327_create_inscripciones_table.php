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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->integer('idOferta');
            $table->string('usuario', 255);
            $table->timestamps();

            $table->primary(['idOferta', 'usuario']);
            $table->foreign('idOferta')->references('id')->on('ofertas')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('usuario')->references('email')->on('usuarios')->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
