<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsultasController;


Route::get('consultas',[ConsultasController::class,'consultas']);