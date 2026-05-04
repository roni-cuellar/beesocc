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
        Schema::create('tabla_posiciones', function (Blueprint $table) {
            $table->id();

            $table->integer('partidos_jugados')->default(0);
            $table->integer('ganados')->default(0);
            $table->integer('empatados')->default(0);
            $table->integer('perdidos')->default(0);
            $table->integer('goles_favor')->default(0);
            $table->integer('goles_contra')->default(0);
            $table->integer('diferencia_goles')->default(0);
            $table->integer('puntos')->default(0);

            // Atributo foraneo
            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->unsignedBigInteger('liga_id')->nullable();

            // Referenciando la tabla equipos
            $table->foreign('equipo_id')
                ->references('id')
                ->on('equipos')
                ->onDelete('set null');

            $table->foreign('liga_id')
                ->references('id')
                ->on('ligas')
                ->onDelete('set null');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_posiciones');
    }
};
