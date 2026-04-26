<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoEstadistico extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos (Inversa) con Jugador
    public function jugador()
    {
        return $this->belongsTo('App\Models\Jugador');
    }

    // Relacion Uno a Muchos (Inversa) con Partido
    public function partido()
    {
        return $this->belongsTo('App\Models\Partido');
    }
}
