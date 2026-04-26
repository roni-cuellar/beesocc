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
        Schema::create('evento_estadisticos', function (Blueprint $table) {
            $table->id();

            $table->string('tipo_evento');
            $table->integer('minuto');
            $table->text('detalle')->nullable();

            // Atributos foraneos
            $table->unsignedBigInteger('jugador_id')->nullable();
            $table->unsignedBigInteger('partido_id')->nullable();

            // Referenciando la tabla jugadores
            $table->foreign('jugador_id')
                ->references('id')
                ->on('jugadores')
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
        Schema::dropIfExists('evento_estadisticos');
    }
};
