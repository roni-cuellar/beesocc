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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->integer('dorsal');
            $table->string('posicion');
            $table->date('fecha_nacimiento');

            // Atributo foraneo
            $table->unsignedBigInteger('equipo_id')->nullable();

            // Referenciando la tabla equipos
            $table->foreign('equipo_id')
                ->references('id')
                ->on('equipos')
                ->onDelete('set null');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
