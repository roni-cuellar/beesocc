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
        Schema::create('equipo_partidos', function (Blueprint $table) {
            $table->id();

            $table->string('rol'); // local o visitante 
            $table->integer('goles_marcados');

            // Atributos foraneos
            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->unsignedBigInteger('partido_id')->nullable();

            // Referenciando la tabla equipos
            $table->foreign('equipo_id')
                ->references('id')
                ->on('equipos')
                ->onDelete('set null');

            // Referenciando la tabla partidos
            $table->foreign('partido_id')
                ->references('id')
                ->on('partidos')
                ->onDelete('set null');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipo_partidos');
    }
};
