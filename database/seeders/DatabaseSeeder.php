<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CampeonatosSeeder::class,
            EquiposSeeder::class,
            JugadoresSeeder::class,
            PartidosSeeder::class,
            ResultadosSeeder::class,
            Equipo_PartidosSeeder::class,
            Campeonato_EquiposSeeder::class,
        ]);
    }
}
