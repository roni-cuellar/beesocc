<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoPartido extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos (Inversa) con Equipo
    public function equipo()
    {
        return $this->belongsTo('App\Models\Equipo');
    }

    // Relacion Uno a Muchos (Inversa) con Partido
    public function partido()
    {
        return $this->belongsTo('App\Models\Partido');
    }
}
