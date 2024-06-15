<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Campeonato_EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
    // Campeonato 1: Clash Royale LATAM
    DB::table('campeonato_equipo')->insert([
        ['campeonato_id' => 1, 'equipo_id' => 1], // Royale Knights
        ['campeonato_id' => 1, 'equipo_id' => 2], // Goblin Gang
        ['campeonato_id' => 1, 'equipo_id' => 3], // Fireball Masters
    ]);

    // Campeonato 2: FIFA LATAM
    DB::table('campeonato_equipo')->insert([
        ['campeonato_id' => 2, 'equipo_id' => 4], // Real Madrid FC
        ['campeonato_id' => 2, 'equipo_id' => 5], // Barcelona FC
        ['campeonato_id' => 2, 'equipo_id' => 6], // Liverpool FC
    ]);

    // Campeonato 3: Dota 2 LATAM (aunque no jugados, para el ejemplo)
    DB::table('campeonato_equipo')->insert([
        ['campeonato_id' => 3, 'equipo_id' => 7], // Radiant Rulers
        ['campeonato_id' => 3, 'equipo_id' => 8], // Dire Destroyers
        ['campeonato_id' => 3, 'equipo_id' => 9], // Ancient Avengers
    ]);
    }
}
