<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evidencia extends Model
{
    use HasFactory;
    protected $guarded = [];

    //Relacion uno a muchos (Grupo)
    public function evidencia()
    {
        return $this->belongsTo(Grupo::class, 'idresultadoAprendizaje');
    }
}
