<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

      // Relacion Uno a Muchos con EquipoPartido
    public function equipoPartidos()
    {
        return $this->hasMany('App\Models\EquipoPartido');
    }

    // Relacion Uno a Muchos con EventoEstadistico
    public function eventoEstadisticos()
    {
        return $this->hasMany('App\Models\EventoEstadistico');
    }
    
}
