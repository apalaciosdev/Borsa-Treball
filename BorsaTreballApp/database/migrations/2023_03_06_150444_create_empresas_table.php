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
            $table->string('nombre', 255);
            $table->string('direccion', 255);
            $table->string('localidad', 255);
            $table->string('provincia', 255);
            $table->integer('telefono');
            $table->string('url', 255);
            $table->string('email', 255);
            $table->string('password', 40)->comment('hasheada con sha2');

            $table->primary('email');
            $table->index('nombre');
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
