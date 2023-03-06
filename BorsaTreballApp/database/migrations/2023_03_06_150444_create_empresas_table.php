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
        Schema::create('empresas', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->string('nombre', 100);
            $table->string('direccion', 200);
            $table->string('localidad', 100);
            $table->string('provincia', 100);
            $table->integer('telefono');
            $table->string('url', 255);
            $table->string('email', 100);
            $table->string('password', 100);

            $table->primary('nombre');
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
