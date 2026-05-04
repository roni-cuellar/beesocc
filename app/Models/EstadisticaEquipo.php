<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablaPosiciones extends Model
{
    use HasFactory;

     // Relacion Uno a Muchos (Inversa) con Equipo
    public function equipo()
    {
        return $this->belongsTo('App\Models\Equipo');
    }

    // Relacion Uno a Muchos (Inversa) con Liga
    public function liga()
    {
        return $this->belongsTo('App\Models\Liga');
    }
}
