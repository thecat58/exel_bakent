<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionParticipante extends Model
{
    use HasFactory;

    protected $table = 'asignacionParticipante';

    protected $guarded = [];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'idParticipante');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'idGrupo');
    }

}
