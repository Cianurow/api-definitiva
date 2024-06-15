<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;
    protected $table = "resultados";
    public $timestamps = false;

    public function partidos()
    {
        return $this->belongsTo(Partido::class, 'partido_id');
    }

    public function equipoGanador()
    {
        return $this->belongsTo(Equipo::class, 'equipo_ganador_id');
    }

    public function equipoPerdedor()
    {
        return $this->belongsTo(Equipo::class, 'equipo_perdedor_id');
    }
}
