<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use Illuminate\Http\Request;

class CampeonatosController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campeonatos = Campeonato::orderBy('nombre')->get();
        return $campeonatos;
    }

    public function show($id)
    {
        $campeonato = Campeonato::select('nombre', 'fecha_inicio', 'fecha_termino', 'reglas', 'premios')
            ->find($id);

        if (!$campeonato) {
            return response()->json(['error' => 'Campeonato no encontrado'], 404);
        }

        return response()->json($campeonato);
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
        $campeonato = new Campeonato();
        $campeonato->nombre = $request->nombre;
        $campeonato->fecha_inicio = $request->fecha_inicio;
        $campeonato->fecha_termino = $request->fecha_termino;
        $campeonato->reglas = $request->reglas;
        $campeonato->premios = $request->premios;
        $campeonato->save();
        return $campeonato;
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campeonato $campeonato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campeonato $campeonato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campeonato $campeonato)
    {
        return $campeonato->delete();
    }
}
