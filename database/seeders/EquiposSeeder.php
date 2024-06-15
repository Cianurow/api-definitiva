<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
    // Campeonato 1: Clash Royale LATAM
    DB::table('equipos')->insert([
        ['nombre' => 'Royale Knights', 'juegos' => 'Clash Royale'],
        ['nombre' => 'Goblin Gang', 'juegos' => 'Clash Royale'],
        ['nombre' => 'Fireball Masters', 'juegos' => 'Clash Royale'],
    ]);

    // Campeonato 2: FIFA LATAM
    DB::table('equipos')->insert([
        ['nombre' => 'Real Madrid FC', 'juegos' => 'FIFA 22'],
        ['nombre' => 'Barcelona FC', 'juegos' => 'FIFA 22'],
        ['nombre' => 'Liverpool FC', 'juegos' => 'FIFA 22'],
    ]);

    // Campeonato 3: Dota 2 LATAM
    DB::table('equipos')->insert([
        ['nombre' => 'Radiant Rulers', 'juegos' => 'Dota 2'],
        ['nombre' => 'Dire Destroyers', 'juegos' => 'Dota 2'],
        ['nombre' => 'Ancient Avengers', 'juegos' => 'Dota 2'],
    ]);
    }
}
