<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Equipo extends Model
{
    use HasFactory;
    protected $table = "equipos";
    protected $fillable = [
        'nombre',
        'entrenador',
        'juegos'
    ];
    public $timestamps = false;

    public function jugadores(): HasMany
    {
        return $this->hasMany(Jugador::class);
    }
    public function partidosLocal()
    {
        return $this->hasMany(Partido::class, 'equipo_local_id');
    }

    public function partidosVisitante()
    {
        return $this->hasMany(Partido::class, 'equipo_visitante_id');
    }

    public function campeonatos(): BelongsToMany
    {
        return $this->BelongsToMany(Campeonato::class);
    }
}
