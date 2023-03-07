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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombreEmpresa', 255);
            $table->string('nombrePuesto', 255);
            $table->string('localidadOferta', 255);
            $table->double('salario', null, 2);
            $table->date('fechaPublicacion');
            $table->enum('estadoOferta', ['vigente', 'caducada', 'cubierta']);
            $table->integer('numeroInscritos');
            $table->timestamps();

            $table->foreign('nombreEmpresa')->references('nombre')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas');
    }
};
