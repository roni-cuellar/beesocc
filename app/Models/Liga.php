<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    use HasFactory;

    
    // Relacion Uno a Muchos (Inversa) con User
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relacion Uno a Muchos con Equipo
    public function equipos()
    {
        return $this->hasMany('App\Models\Equipo');
    }

    // Relacion Uno a Muchos con TablaPosicion
    public function tablaPosiciones()
    {
        return $this->hasMany('App\Models\TablaPosicion');
    }
    
}
