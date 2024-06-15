<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
            // Partidos jugados
            ['fecha' => '2024-06-11 16:30:00', 'lugar' => 'Estadio Santiago Bernabéu', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 1, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-06-11 15:30:00', 'lugar' => 'Old Trafford', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 2, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-06-12 15:30:00', 'lugar' => 'Camp Nou', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 3, 'equipo_visitante_id' => 1],
            ['fecha' => '2024-06-12 17:00:00', 'lugar' => 'Wembley Stadium', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 2, 'equipo_visitante_id' => 1],
            ['fecha' => '2024-06-13 16:00:00', 'lugar' => 'Santiago Bernabéu', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 1, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-06-13 16:00:00', 'lugar' => 'MetLife Stadium', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 3, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-06-11 18:00:00', 'lugar' => 'Lambeau Field', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 1, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-06-13 18:30:00', 'lugar' => 'Anfield', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 2, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-06-13 18:30:00', 'lugar' => 'Sant Jordi Club', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 3, 'equipo_visitante_id' => 1],
            ['fecha' => '2024-06-13 18:30:00', 'lugar' => 'Estadio Azteca', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 1, 'equipo_visitante_id' => 3],
        
            // Partidos por jugar
            ['fecha' => '2024-08-20 16:30:00', 'lugar' => 'Staples Center', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 2, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-08-25 13:30:00', 'lugar' => 'Madison Square Garden', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 1, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-09-02 13:30:00', 'lugar' => 'Rogers Arena', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 3, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-09-10 18:00:00', 'lugar' => 'KeyArena', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 1, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-09-20 18:00:00', 'lugar' => 'Mercedes-Benz Arena', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 2, 'equipo_visitante_id' => 1],
        ]);      
    }
}
