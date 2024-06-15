<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener el parámetro 'equipo_id' de la solicitud
        $equipoId = $request->query('equipo_id');

        // Si se proporciona 'equipo_id', filtrar los jugadores
        if ($equipoId) {
            $jugadores = Jugador::where('equipo_id', $equipoId)->get();
        } else {
            // De lo contrario, devolver todos los jugadores
            $jugadores = Jugador::all();
        }

        return response()->json($jugadores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $jugador = new Jugador();
        $jugador->rut = $request->rut;
        $jugador->nombre = $request->nombre;
        $jugador->apellido = $request->apellido;
        $jugador->posicion = $request->posicion;
        $jugador->equipo_id = $request->equipo_id;
        $jugador->save();
        return $jugador;

    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        return $jugador;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        return $jugador->delete();
    }
}
