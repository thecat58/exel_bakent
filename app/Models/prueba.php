<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    protected $table = "cargarcertificados";
    protected $guarded = [];
    use HasFactory;

    public $timestamps = false;

}
