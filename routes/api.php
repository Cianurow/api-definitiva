<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\CampeonatosController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\ResultadosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/equipos', EquiposController::class);
Route::resource('/jugadores', JugadoresController::class);
Route::resource('/partidos', PartidosController::class);
Route::resource('/campeonatos', CampeonatosController::class);
Route::resource('/resultados', ResultadosController::class);

Route::put('/partidos/{id}', [PartidosController::class, 'update']);
Route::delete('/partidos/{id}', [PartidosController::class, 'destroy']);
Route::post('/partidos', [PartidosController::class, 'store']);

Route::put('/resultados/{id}', [ResultadosController::class, 'update']);
Route::delete('/resultados/{id}', [ResultadosController::class, 'destroy']);
Route::post('/resultados', [ResultadosController::class, 'store']);

Route::get('/campeonatos/{id}/equipos', [CampeonatosController::class, 'equipos']);
Route::post('/campeonatos', [CampeonatosController::class, 'store']);
Route::delete('/campeonatos', [CampeonatosController::class, 'destroy']);

Route::post('/equipos', [EquiposController::class, 'store']);
Route::delete('/equipos/{id}', [EquiposController::class, 'destroy']);

Route::post('/jugadores', [JugadoresController::class, 'store']);
Route::delete('/jugadores/{id}', [JugadoresController::class, 'destroy']);
