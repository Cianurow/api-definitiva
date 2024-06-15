<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampeonatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('campeonatos')->insert([
            [
                'nombre' => 'Clash Royale LatAm',
                'fecha_inicio' => '2024-07-01',
                'fecha_termino' => '2024-07-15',
                'reglas' => '1) Todos los participantes deben tener una cuenta válida en Clash Royale.
                 2) Se jugará bajo el formato de eliminación directa.
                 3) Cada enfrentamiento constará de tres partidas.',
                'premios' => json_encode([
                    'primer_lugar' => 1000,
                    'segundo_lugar' => 500,
                    'tercer_lugar' => 250,
                ]),
            ],
            [
                'nombre' => 'FIFA World Cup',
                'fecha_inicio' => '2024-06-10',
                'fecha_termino' => '2024-07-10',
                'reglas' => '1) Cada jugador debe seleccionar un equipo de la vida real para representar. 
                2) Se jugará bajo el formato de grupos y luego eliminación directa. 
                3) Los partidos serán de 90 minutos con tiempo extra y penales en caso de empate.',
                'premios' => json_encode([
                    'primer_lugar' => 2000,
                    'segundo_lugar' => 1000,
                    'tercer_lugar' => 500,
                ]),
            ],
            [
                'nombre' => 'Dota 2 International',
                'fecha_inicio' => '2024-08-01',
                'fecha_termino' => '2024-08-30',
                'reglas' => '1) Equipos de cinco jugadores. 
                2) Se jugará bajo el formato de doble eliminación. 
                3) Se permiten todas las selecciones de héroes.',
                'premios' => json_encode([
                    'primer_lugar' => 5000,
                    'segundo_lugar' => 2500,
                    'tercer_lugar' => 1000,
                ]),
            ],
        ]);
    }
}
