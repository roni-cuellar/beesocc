<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\EquipoPartido;
use App\Models\EstadisticaEquipo;
use App\Models\EventoEstadistico;
use App\Models\Jugador;
use App\Models\Liga;
use App\Models\Noticia;
use App\Models\Partido;

class ConsultasController extends Controller
{

    public function consultas(){
         $equipo=Equipo::find(5);
         return $equipo->jugadores;
        }
         


}
