<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos (Inversa) con Liga
    public function liga()
    {
        return $this->belongsTo('App\Models\Liga');
    }

    // Relacion Uno a Muchos con Jugador
    public function jugadores()
    {
        return $this->hasMany('App\Models\Jugador');
    }

    // Relacion Uno a Muchos con EquipoPartido
    public function equipoPartidos()
    {
        return $this->hasMany('App\Models\EquipoPartido');
    }

    // Relacion Uno a Muchos con TablaPosicion
    public function tablaPosiciones()
    {
        return $this->hasMany('App\Models\EstadisticaEquipo');
    }
    
}
