<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Equipo_PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// Seeder para la tabla equipo_partido basado en los resultados de partidos jugados (true)
    DB::table('equipo_partido')->insert([
        ['equipo_id' => 1, 'partido_id' => 1, 'ganador' => true],
        ['equipo_id' => 2, 'partido_id' => 1, 'ganador' => false],

        ['equipo_id' => 3, 'partido_id' => 2, 'ganador' => true],
        ['equipo_id' => 1, 'partido_id' => 2, 'ganador' => false],

        ['equipo_id' => 2, 'partido_id' => 3, 'ganador' => true],
        ['equipo_id' => 3, 'partido_id' => 3, 'ganador' => false],

        ['equipo_id' => 1, 'partido_id' => 4, 'ganador' => true],
        ['equipo_id' => 3, 'partido_id' => 4, 'ganador' => false],

        ['equipo_id' => 2, 'partido_id' => 5, 'ganador' => true],
        ['equipo_id' => 1, 'partido_id' => 5, 'ganador' => false],

        ['equipo_id' => 4, 'partido_id' => 6, 'ganador' => true],
        ['equipo_id' => 5, 'partido_id' => 6, 'ganador' => false],

        ['equipo_id' => 6, 'partido_id' => 7, 'ganador' => true],
        ['equipo_id' => 4, 'partido_id' => 7, 'ganador' => false],

        ['equipo_id' => 5, 'partido_id' => 8, 'ganador' => true],
        ['equipo_id' => 6, 'partido_id' => 8, 'ganador' => false],

        ['equipo_id' => 4, 'partido_id' => 9, 'ganador' => true],
        ['equipo_id' => 6, 'partido_id' => 9, 'ganador' => false],

        ['equipo_id' => 5, 'partido_id' => 10, 'ganador' => true],
        ['equipo_id' => 4, 'partido_id' => 10, 'ganador' => false],
    ]);

    }
    
}
