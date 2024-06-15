<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampeonatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campeonatos')->insert([
            [
                'nombre' => 'Clash Royale Latam',
                'fecha_inicio' => '2024-07-01',
                'fecha_termino' => '2024-07-15',
                'reglas' => "1) Todos los participantes deben tener una cuenta válida en Clash Royale.\n2) Se jugará bajo el formato de eliminación directa.\n3) Cada enfrentamiento constará de tres partidas.",
                'premios' => "Primer Lugar => 1000 \nSegundo lugar => 500 \nTercer Lugar => 250"
            ],
            [
                'nombre' => 'FIFA World Cup',
                'fecha_inicio' => '2024-06-10',
                'fecha_termino' => '2024-07-10',
                'reglas' => "1) Cada jugador debe seleccionar un equipo de la vida real para representar.\n2) Se jugará bajo el formato de grupos y luego eliminación directa.\n3) Los partidos serán de 90 minutos con tiempo extra y penales en caso de empate.",
                'premios' => "Primer Lugar => 2000 \nSegundo lugar => 1000 \nTercer Lugar => 500"
            ],
            [
                'nombre' => 'Dota 2 International',
                'fecha_inicio' => '2024-08-01',
                'fecha_termino' => '2024-08-30',
                'reglas' => "1) Equipos de cinco jugadores.\n2) Se jugará bajo el formato de doble eliminación.\n3) Se permiten todas las selecciones de héroes.",
                'premios' => "Primer Lugar => 5000. \nSegundo lugar => 2500 \nTercer Lugar => 500"
            ],
        ]);
    }
}