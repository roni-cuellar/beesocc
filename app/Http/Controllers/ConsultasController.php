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
            //CONSULTAS EQUIPO
      //  $equipo=Equipo::find(1);
      //  return $equipo->liga; 

       // $equipo=Equipo::find(8);
       // return $equipo->jugadores;
        
       // $equipo=Equipo::find(2);
       // return $equipo->equipoPartidos;


       //CONSULTAS EQUIPO_PARTIDO
        $equipoP=EquipoPartido::find(2);
        return $equipoP->equipo;



        }

}
