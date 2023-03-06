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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('nombre', 255);
            $table->string('apellidos', 255);
            $table->longText('descripcion');
            $table->string('email', 255);
            $table->string('password', 40)->comment('hasheada con sha2');
            $table->date('fechaNacimiento');
            $table->string('titulacion', 255);
            $table->boolean('cochePropio');
            $table->longText('experienciaLaboral');

            $table->primary('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
