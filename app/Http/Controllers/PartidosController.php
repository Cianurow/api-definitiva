<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;
use App\Http\Requests\PartidoRequest;
use App\Http\Controllers\Controller;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los partidos con sus relaciones
        $partidos = Partido::with(['equipoLocal', 'equipoVisitante', 'campeonato'])->orderBy('fecha', 'asc')->get();

        // Retornar la respuesta JSON con los partidos
        return response()->json($partidos);
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
    public function store(PartidoRequest $request)
    {   
        $validatedData = $request->validated();

        $partido = new Partido();
        $partido->fecha = $request->fecha;
        $partido->lugar = $request->lugar;
        $partido->jugado = 0;
        $partido->campeonato_id = $request->campeonato_id;
        $partido->equipo_local_id = $request->equipo_local_id;
        $partido->equipo_visitante_id = $request->equipo_visitante_id;
        $partido->save();
        return $partido;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Obtener un partido específico por su ID con sus relaciones
        $partido = Partido::with(['equipoLocal', 'equipoVisitante', 'campeonato', 'resultado'])->find($id);

        // Verificar si se encontró el partido
        if (!$partido) {
            return response()->json(['error' => 'Partido no encontrado'], 404);
        }

        // Retornar la respuesta JSON con el partido
        return response()->json($partido);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partido $partido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partido $partido)
    {
         if ($request->has('fecha')) {
        $partido->fecha = $request->fecha;
        }
        if ($request->has('lugar')) {
            $partido->lugar = $request->lugar;
        }
        if ($request->has('campeonato_id')) {
            $partido->campeonato_id = $request->campeonato_id;
        }
        if ($request->has('equipo_local_id')) {
            $partido->equipo_local_id = $request->equipo_local_id;
        }
        if ($request->has('equipo_visitante_id')) {
            $partido->equipo_visitante_id = $request->equipo_visitante_id;
        }
        if ($request->has('jugado')) {
            $partido->jugado = $request->jugado;
        }
        $partido->save();

        return response()->json($partido, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partido $partido)
    {
        return $partido->delete();
    }
}
