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
            $table->integer('id')->autoIncrement();
            $table->string('nombre', 50);
            $table->string('apellidos', 100);
            $table->longText('descripcion');
            $table->string('email', 100)->unique();
            $table->string('password', 40);
            $table->date('fechaNacimiento');
            $table->string('titulacion', 50);
            $table->boolean('cochePropio');
            $table->longText('experienciaLaboral');
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
