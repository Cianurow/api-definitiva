<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquiposController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::orderBy('nombre')->get();
        return $equipos;
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

        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->juegos = $request->juegos;
        $equipo->save();
        return $equipo;
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        return $equipo;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        try {
            // Eliminar los partidos donde el equipo es local o visitante
            Partido::where('equipo_local_id', $equipo->id)->delete();
            Partido::where('equipo_visitante_id', $equipo->id)->delete();
            
            // Eliminar el equipo
            $equipo->delete();
            
            return response()->json(['message' => 'Equipo eliminado exitosamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al eliminar el equipo: ' . $e->getMessage()], 500);
        }
    }
}
