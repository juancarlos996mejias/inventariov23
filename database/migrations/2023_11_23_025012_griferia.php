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
        Schema::create('griferia', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('articulo');
            $table->string('marca');
            $table->string('super rubro');
            $table->string('rubro');
            $table->string('stock total');
            $table->string('almacen talar');
            $table->string('almacen outlet');
            $table->string('almacen quilmes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('griferia');
    }
};