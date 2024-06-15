<?php

namespace App\Http\Controllers;

use App\Models\Resultado;
use Illuminate\Http\Request;

class ResultadosController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultados = Resultado::orderBy('puntuacion_ganador')->get();
        return $resultados;
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
        $resultado = new Resultado();
        $resultado->partido_id = $request->partido_id;
        $resultado->puntuacion_ganador = $request->puntuacion_ganador;
        $resultado->puntuacion_perdedor = $request->puntuacion_perdedor;
        $resultado->equipo_ganador_id = $request->equipo_ganador_id;
        $resultado->equipo_perdedor_id = $request->equipo_perdedor_id;
    
        $resultado->save();
        return $resultado;
    }

    /**
     * Display the specified resource.
     */
    public function show(Resultado $resultado)
    {
        return $resultado;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resultado $resultado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resultado $resultado)
    {
        $resultado-> puntuacion_ganador = $request->puntuacion_ganador;
        $resultado-> puntuacion_perdedor = $request->puntuacion_perdedor;
        $resultado-> partido_id= $request->partido_id;
        $resultado-> equipo_ganador_id = $request-> equipo_ganador_id;
        $resultado-> equipo_perdedor_id = $request->equipo_perdedor_id;
        $resultado->save();

        return $resultado;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resultado $resultado)
    {
        return $resultado->delete();
    }
}
